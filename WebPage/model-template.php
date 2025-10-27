<?php
if (!isset($modelData)) {
    die("No model data provided.");
}
include 'header.php';
?>

<main style="max-width: 600px; margin: 20px auto; padding: 15px; border: 1px solid #ddd; border-radius: 10px; box-shadow: 0 2px 8px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
    
    <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 10px;">
        <h1 style="margin: 0; font-size: 1.5rem;"><?php echo $modelData['name']; ?> <?php echo $modelData['country-origin-flag']; ?></h1>
        <?php if (!empty($modelData['image'])): ?>
            <img src="<?php echo htmlspecialchars($modelData['image']); ?>" 
                 alt="<?php echo htmlspecialchars($modelData['name']); ?>" 
                 style="width: 200px; height: auto; object-fit: cover; border-radius: 8px;">
        <?php endif; ?>
    </div>
    
    <p><?php echo $modelData['description']; ?></p>

    <?php if (!empty($modelData['rebagde'])): ?>
        <p><strong>Rebagde/Alternative names:</strong></p>
        <ul style="margin-top: 5px; padding-left: 20px;">
            <?php foreach ($modelData['rebagde'] as $altName): ?>
                <li><?php echo $altName; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <p><strong>Production years:</strong> <?php echo htmlspecialchars($modelData['production-years']); ?></p>

    <?php if (!empty($modelData['engines'])): ?>
        <p><strong>Engines:</strong></p>
        <ul style="margin-top: 5px; padding-left: 20px;">
            <?php foreach ($modelData['engines'] as $altName): ?>
                <li><?php echo $altName; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    
    <?php if (!empty($modelData['assembly-plants'])): ?>
        <p><strong>Assembly plants:</strong></p>
        <ul style="margin-top: 5px; padding-left: 20px;">
            <?php foreach ($modelData['assembly-plants'] as $altName): ?>
                <li><?php echo $altName; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

</main>



<?php include 'footer.php'; ?>
