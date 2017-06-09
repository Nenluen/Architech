<!DOCTYPE html>
<html>
<body>
<?php
include "config.php";
include "functions.php";
$charname = $playername = "Not Defined";
?>

<div = "sheet">
<div = "sheetTop">
<?php echo("Character: $charname      Player: $playername") ?>

<?php
	dotloop(5,"W");
?>

</div>
</body>
</html>