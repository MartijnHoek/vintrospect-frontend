<?php $pageTitle = "VIN Decoding"; ?>
<?php include 'header.php'; ?>

<main id="vin-decode">
    <h2>VIN Decoding</h2>
    <p>Enter your VIN to get detailed decoding information about your vehicle.</p>

    <form method="post" id="vinForm">
        <label for="vinInput">Enter VIN:</label>
        <input type="text" id="vinInput" name="vin" maxlength="17" placeholder="e.g. 1HUCV88633A004347" required value="<?php echo htmlspecialchars($_POST['vin'] ?? ''); ?>" />
        <button type="submit">Decode VIN</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $vin = trim($_POST['vin'] ?? '');
        $data = null;
        $error = '';

        if ($vin !== '') {
            $url = 'https://vintrospect-basic-vin-decode.onrender.com/api/decode?vin=' . urlencode($vin);

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_HTTPHEADER, [
                'User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64)'
            ]);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

            $response = curl_exec($ch);
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $curlError = curl_error($ch);
            curl_close($ch);

            if (!$response) {
                $error = "⚠️ cURL error: $curlError";
            } elseif ($httpCode === 200) {
                $data = json_decode($response, true);
                if (isset($data['error'])) {
                    $error = $data['error'];
                    $data = null;
                }
            } elseif ($httpCode === 404) {
                $error = '⚠️ This VIN could not be decoded. Please check the input and try again.';
            } else {
                $error = "⚠️ Error fetching data: Server error ({$httpCode})";
            }
        } else {
            $error = '⚠️ Please enter a VIN.';
        }

        function getNestedValue($array, $path) {
            $keys = explode('.', $path);
            $value = $array;
            foreach ($keys as $key) {
                if (isset($value[$key])) {
                    $value = $value[$key];
                } else {
                    return null;
                }
            }
            return $value;
        }

        function formatValue($value) {
            if ($value === null || $value === '') return '—';
            if (is_array($value)) return count($value) ? implode(', ', $value) : '—';
            return $value;
        }

        if ($error) {
            echo '<div id="error" style="color:red; font-weight:bold; margin-top:1rem;">' . htmlspecialchars($error) . '</div>';
        }
    ?>
        <?php if ($data): ?>
            <table id="vin-result-table">
                <tbody>
                    <?php
                    $variantName = getNestedValue($data, 'model_data.variant_data.name');
                    $modelName = getNestedValue($data, 'model_data.name');
                    $modelDisplayName = $variantName ?? $modelName ?? '—';

                    $fieldsToDisplay = [
                        ['key' => 'vin', 'label' => 'VIN'],
                        ['key' => 'make', 'label' => 'Make'],
                        ['key' => 'model_data.production_date', 'label' => 'Production Date'],
                        ['key' => 'model_data.assembly_plant', 'label' => 'Assembled at'],
                        ['key' => 'model_data.markets', 'label' => 'Markets'],
                        ['key' => 'engine_data.name', 'label' => 'Engine Code'],
                        ['key' => 'engine_data.fuel_type', 'label' => 'Fuel Type'],
                        ['key' => 'engine_data.engine_type', 'label' => 'Engine Type'],
                        ['key' => 'engine_data.displacement_l', 'label' => 'Displacement (L)'],
                        ['key' => 'engine_data.power_kw', 'label' => 'Power (kW)'],
                        ['key' => 'engine_data.torque_nm', 'label' => 'Torque (Nm)'],
                    ];

                    foreach ($fieldsToDisplay as $field):
                        $value = getNestedValue($data, $field['key']);
                    ?>
                        <tr>
                            <th><?php echo htmlspecialchars($field['label']); ?></th>
                            <td><?php echo htmlspecialchars(formatValue($value)); ?></td>
                        </tr>
                        <?php if ($field['key'] === 'make'): ?>
                            <tr>
                                <th>Model</th>
                                <td><?php echo htmlspecialchars($modelDisplayName); ?></td>
                            </tr>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    <?php } ?>
</main>

<?php include 'footer.php'; ?>
