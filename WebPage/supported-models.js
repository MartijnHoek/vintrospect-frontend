const csvUrl = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vQ3mFaOvCPpfhfAYTY_pSbO26ZP9r_GfmJcGplbXv3PT9LoqBWxCy35QdctiegXQsZmTPLSSjUfoHiI/pub?output=csv';

function csvToArray(strData, strDelimiter = ",") {
  const objPattern = new RegExp(
    (
      "(\\" + strDelimiter + "|\\r?\\n|\\r|^)" +
      "(?:\"([^\"]*(?:\"\"[^\"]*)*)\"|" +
      "([^\"\\" + strDelimiter + "\\r\\n]*))"
    ),
    "gi"
  );

  let arrData = [[]];
  let arrMatches = null;

  while (arrMatches = objPattern.exec(strData)) {
    const strMatchedDelimiter = arrMatches[1];
    if (strMatchedDelimiter.length && strMatchedDelimiter !== strDelimiter) arrData.push([]);

    let strMatchedValue = arrMatches[2]
      ? arrMatches[2].replace(/\"\"/g, "\"")
      : arrMatches[3];

    arrData[arrData.length - 1].push(strMatchedValue);
  }

  return arrData;
}

function convertSupport(value) {
  const val = value.trim().toLowerCase();
  if (val === 'true') return '✅';
  if (val === 'partial') return `<span class="tooltip" aria-label="Partial support">
            ⚠️
            <span class="tooltiptext">Partial support: some variants are covered, but not all.</span>
          </span>`;
  return '❌';
}

async function loadCSVData() {
  const response = await fetch(csvUrl);
  const csvText = await response.text();
  const dataArray = csvToArray(csvText);

  const dataRows = dataArray.slice(1); // skip header row
  const manufacturers = {};

  dataRows.forEach(row => {
    const manufacturer = row[0];
    const model = row[1];
    const productionDate = convertSupport(row[2]);
    const engineData = convertSupport(row[3]);
    const market = convertSupport(row[4]);
    const assemblyLocation = convertSupport(row[5]);

    if (!manufacturers[manufacturer]) manufacturers[manufacturer] = [];
    manufacturers[manufacturer].push({ model, productionDate, engineData, market, assemblyLocation });
  });

  renderManufacturers(manufacturers);
}

function renderManufacturers(data) {
  const container = document.getElementById('manufacturersContainer');
  container.innerHTML = '';

  Object.keys(data).sort().forEach(manufacturer => {
    const manufacturerDiv = document.createElement('div');
    manufacturerDiv.className = 'manufacturer';

    const title = document.createElement('h3');
    title.textContent = manufacturer;
    manufacturerDiv.appendChild(title);

    const sortedModels = data[manufacturer].sort((a,b) => a.model.localeCompare(b.model));

    const table = document.createElement('table');
    table.innerHTML = `
      <thead>
        <tr>
          <th>Model</th>
          <th>Production Date</th>
          <th>Engine Data</th>
          <th>Market</th>
          <th>Assembly Location</th>
        </tr>
      </thead>
      <tbody>
        ${sortedModels.map(entry => `
          <tr>
            <td>${entry.model}</td>
            <td>${entry.productionDate}</td>
            <td>${entry.engineData}</td>
            <td>${entry.market}</td>
            <td>${entry.assemblyLocation}</td>
          </tr>
        `).join('')}
      </tbody>
    `;
    manufacturerDiv.appendChild(table);
    container.appendChild(manufacturerDiv);
  });

  bindSearch();
}

function bindSearch() {
  const searchInput = document.getElementById('searchInput');
  const clearBtn = document.getElementById('clearBtn');
  const manufacturers = document.querySelectorAll('.manufacturer');

  function filterResults() {
    const filter = searchInput.value.toLowerCase();
    clearBtn.style.display = filter ? 'block' : 'none';

    manufacturers.forEach(manufacturer => {
      const manufacturerName = manufacturer.querySelector('h3').textContent.toLowerCase();
      const rows = manufacturer.querySelectorAll('tbody tr');

      let modelMatches = false;
      const manufacturerMatches = manufacturerName.includes(filter);

      rows.forEach(row => {
        const modelName = row.querySelector('td').textContent.toLowerCase();
        if (manufacturerMatches || modelName.includes(filter)) {
          row.style.display = '';
          modelMatches = true;
        } else {
          row.style.display = 'none';
        }
      });

      manufacturer.style.display = manufacturerMatches || modelMatches ? '' : 'none';
    });
  }

  searchInput.addEventListener('input', filterResults);
  searchInput.addEventListener('keydown', e => {
    if (e.key === 'Escape') {
      searchInput.value = '';
      clearBtn.style.display = 'none';
      filterResults();
    }
  });

  clearBtn.addEventListener('click', () => {
    searchInput.value = '';
    clearBtn.style.display = 'none';
    filterResults();
  });
}

window.addEventListener('DOMContentLoaded', loadCSVData);
