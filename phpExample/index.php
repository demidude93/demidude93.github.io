<!DOCTYPE html>
<html>
<body>

<?php

for ($counter = 8; $counter <= 293; $counter++){
	echo "<br>";
	if ($counter % 3 == 0){
		echo "pt";
	} elseif ($counter % 5 == 0){
		echo "Health";
	} else {
		echo "$counter";
	}
}

?>

</body>
</html>