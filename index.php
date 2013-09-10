<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Test Web Application</title>
</head>
<body id="webapp" onload="">
<?php
    if (empty($_POST)) {
?>
    <form action="index.php" method="post" accept-charset="utf-8">
        <label for="name">Name:</label>
        <input type="text" name="name" value="" id="name">
        <label for="Is_a_Person?">Is a Person?</label>
        <input type="checkbox" name="Is_a_Person?" value="" id="Is_a_Person?">

        <p><input type="submit" value="Continue →"></p>
    </form>
<?php
    } else {
        var_dump($_POST);
    }
?>
</body>
</html>
