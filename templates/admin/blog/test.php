#!/usr/bin/env php
<html>
<head><title>Bus Terminal</title></head>
<body>

<form method="POST" action="">
    <fieldset style="width:80%">
        <legend>Student User Entry</legend>
        <label for="fname">Full Name</label><br>
        <input type="text" name="fname" id="fname"><br>

        <label for="uname">Username</label><br>
        <input type="text" name="uname" id="uname"><br>

        <label for="iname">Userid</label><br>
        <input type="text" name="iname" id="iname"><br>

        <label for="pname">Program</label><br>
        <input type="text" name="pname" id="pname"><br>

        <label for="dname">Date of Joining </label><br>
        <input type="date" name="dname" id="dname"><br><br>

        <button type="submit" name="submit" value="submit">Add entry</button>
        <button type="submit" name="rec" value="rec">Get Records</button>
        <button type="reset" value="reset">Clear</button>
    </fieldset>
</form>
</body>
</html>


<?php
echo "TEST ECHO";
    ?>