<?php
$reversed = null;
$original = null;
if (isset($_POST['values'])) {
    $input = trim($_POST['values']);
    if ($input !== '') {
        $original = array_map('trim', explode(',', $input));
        $original = array_filter($original, fn($value) => $value !== '');
        $reversed = array_reverse($original);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reverse Array Values</title>
</head>
<body>
    <h1>Reverse Array Values</h1>
    <form method="post">
        <label for="values">Enter array values separated by commas:</label><br>
        <input type="text" id="values" name="values" size="50" value="<?php echo isset($_POST['values']) ? htmlspecialchars($_POST['values']) : ''; ?>">
        <br><br>
        <button type="submit">Reverse Array</button>
    </form>

    <?php if ($original !== null): ?>
        <h2>Original Array</h2>
        <pre><?php echo htmlspecialchars(var_export($original, true)); ?></pre>

        <h2>Reversed Array</h2>
        <pre><?php echo htmlspecialchars(var_export($reversed, true)); ?></pre>
    <?php endif; ?>
</body>
</html>
