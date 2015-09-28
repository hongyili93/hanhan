<?php $current_file = $_SERVER['SCRIPT_NAME']; ?>

<form action = "<?php echo $current_file; ?>" method="POST">
	From number: <input type="number" name="fn"> 
	To number: <input type="number" name="sn">
	<input type="submit" value="print">
</form>


<?php
if (isset($_POST['fn'])&&
	isset($_POST['sn'])) {
		printOddNumFT($_POST['fn'], $_POST['sn']);
} else {
	echo "Please fill in all field with integer!";
}

function printOddNumFT($fn, $sn) {
	if ($fn == $sn && !($fn%2 == 0)) {
		echo $fn;
	} else {
		if ($fn < $sn) {
			if ($fn%2 == 0){
				$fn += 1;
				smallToLarge($fn, $sn);
			} else {
				smallToLarge($fn, $sn);
			}		
		} else {
			if ($fn%2 == 0){
				$fn -= 1;
				largeToSmall($fn, $sn);
			} else {
				largeToSmall($fn, $sn);
			}
		}
	}
}

function smallToLarge($fn, $sn) {
	while ($fn <= $sn) {
  		print "$fn <br />";
  		$fn += 2;
	}
}

function largeToSmall($fn, $sn) {
	while ($fn >= $sn) {
		print "$fn <br />";
  		$fn -= 2;
	}
}