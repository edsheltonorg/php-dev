<?php header('Content-type: text/html; charset=utf-8'); ?>

<html>
    <head>
        <title>Ed PHP Test</title>
    </head>
<body>
    <h2>PHP Test</h2>
    <form action="" method="post" name="submission">
        <p>Name: <input type="text" name="name" /></p>
        <p>Columns: <input type="text" name="column" /></p>
        <label for="row">Rows:</label>
        <input type="text" name="row" /></p>
        <p><input type="submit" /></p>
    </form>
    <?php
        $sel_a = $_POST['column'];
        $sel_b = $_POST['row'];
        $name = $_POST['name'];
        $repeat = str_repeat("$name ",$sel_a).PHP_EOL;
        echo nl2br(str_repeat("$repeat",$sel_b));    ?>
</body>
</html>