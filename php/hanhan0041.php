<?php $current_file = $_SERVER['SCRIPT_NAME']; ?>

<form action = "<?php echo $current_file; ?>" method="POST">
	From number: <input type="number" name="fn"> 
	To number: <input type="number" name="sn">
	<input type="submit" value="print">
</form>


<?php
if (isset($_POST['fn'])&&
	isset($_POST['sn'])) {
		printNumFT($_POST['fn'], $_POST['sn']);
} else {
	echo "Please fill in all field with integer!";
}


function printNumFT($fn, $sn) {
	if ($fn == $sn) {
		echo $fn;
	} else {
		if ($fn < $sn) {
			smallToLarge($fn, $sn);
		} else {
			largeToSmall($fn, $sn);
		}
	}
}

function smallToLarge($fn, $sn) {
	for( $i=$fn; $i<=$sn; $i++ ) {
		echo $i;
		echo "<br>";
	}
}

function largeToSmall($fn, $sn) {
	for( $i=$fn; $i>=$sn; $i-- ) {
		echo $i;
		echo "<br>";
	}
}













?>