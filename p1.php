<?php
// A simple PHP program to get array values from user and print them
$values = [];
if (isset($_POST['values'])) {
    $input = trim($_POST['values']);
    if ($input !== '') {
        $values = array_map('trim', explode(',', $input));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Print Array Values</title>
</head>
<body>
    <h1>Enter array values separated by commas</h1>
    <form method="post">
        <label for="values">Array values:</label>
        <input type="text" id="values" name="values" size="50" value="<?php echo isset($_POST['values']) ? htmlspecialchars($_POST['values']) : ''; ?>">
        <button type="submit">Submit</button>
    </form>

    <?php if (!empty($values)): ?>
        <h2>Array values entered:</h2>
        <ul>
            <?php foreach ($values as $value): ?>
                <li><?php echo htmlspecialchars($value); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif ($_SERVER['REQUEST_METHOD'] === 'POST'): ?>
        <p>No values entered.</p>
    <?php endif; ?>
</body>
</html>
