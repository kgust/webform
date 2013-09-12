<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-type" content="text/html; charset=utf-8">
    <title>Test Web Application</title>
</head>
<body id="webapp" onload="">
<?php
    $json = file_get_contents('data.json');
    $data = json_decode($json, true);

    if (empty($_POST)) {
?>
    <form action="index.php" method="post" accept-charset="utf-8"><fieldset>
        <legend>Enter Sermon Information</legend>

        <input type="hidden" value="sermon" name="type">

        <p>
        <label for="date">Date</label>
        <input type="date" value="<?php echo $data['date'] ?>" placeholder="Enter sermon date..." id="date" name="date">
        </p>

        <p>
            <label for="scripture">Scripture</label>
            <input type="text" value="<?php echo $data['sermon']['scripture'] ?>" autofocus="" placeholder="Enter scripture passage..." id="sermon_scripture" name="scripture" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="reader">Reader</label>
            <input type="text" value="<?php echo $data['sermon']['reader'] ?>" placeholder="Enter scripture reader..." id="sermon_reader" name="reader" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="series">Series</label>
            <input type="text" value="<?php echo $data['sermon']['series'] ?>" placeholder="Enter sermon series..." id="sermon_series" name="series" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="title">Title</label>
            <input type="text" value="<?php echo $data['sermon']['title'] ?>" placeholder="Enter sermon title..." id="sermon_title" name="title" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="preacher">Preacher</label>
            <input type="text" value="<?php echo $data['sermon']['preacher'] ?>" placeholder="Enter preacher name..." id="sermon_preacher" name="preacher" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="engineer">Tech</label>
            <input type="text" value="<?php echo $data['sermon']['engineer'] ?>" placeholder="Enter mixer operator..." id="sermon_engineer" name="engineer" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="processor">Processor</label>
            <input type="text" value="<?php echo $data['sermon']['processor'] ?>" placeholder="Enter sound processor..." id="sermon_processor" name="processor" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="notes">Notes</label>
            <textarea placeholder="Enter notes..." cols="39" rows="4" id="sermon_notes" name="notes""><?php echo $data['sermon']['notes'] ?></textarea>
        </p>

        <p><input type="submit" value="Continue →"></p>
    </fieldset></form>

<form method="post" action="/dash/write_record/" id="enter_ace"><fieldset>
        <legend>Enter A.C.E. Information</legend>

        <input type="hidden" value="ace" name="type">

        <p>
            <label for="date">Date</label>
            <input type="date" value="2013-09-08" placeholder="Enter ACE date..." id="date" name="date">
        </p>

        <p>
            <label for="series">Series</label>
            <input type="text" value="2013 ACE Fall Series" placeholder="Enter ACE series title..." id="ace_series" name="series" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="title">Title</label>
            <input type="text" value="Hansen Missions Update" placeholder="Enter ACE title..." id="ace_title" name="title" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="teacher">Teacher</label>
            <input type="text" value="Jim Hansen" placeholder="Enter ACE teacher name..." id="ace_teacher" name="teacher" autocomplete="off" class="ac_input">
        </p>

        <p>
            <label for="comment">Comment</label>
            <textarea placeholder="Enter notes..." cols="39" rows="4" id="ace_comment" name="comment">Jim and Kathy Hansen are missionaries with SIM in Bolivia.</textarea>
        </p>

        <p><input type="submit" value="Continue →"></p>
    </fieldset></form>
<?php
    } else {
        $data[ $_POST['type'] ] = $_POST;
        $json = json_encode($data);
        file_put_contents('data.json', $json);
?>
    <p>You have successfully saved your data.json file. Go <a href="index.php">here</a> to return to the form.</p>
    <p style="font-family:monospace"><?php print $json; ?></p>
<?php
    }
?>
</body>
</html>

