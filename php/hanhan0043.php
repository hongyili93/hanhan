<?php $current_file = $_SERVER['SCRIPT_NAME']; ?>

<form action = "<?php echo $current_file; ?>" method="POST">
	# of years: <input type="number"  step="any" name="years"><br>
	Interest rate: <input type="number" step="any" name="rate"><br>
	<input type="submit" value="compute">
</form>


<?php
if (isset($_POST['years'])&&
	isset($_POST['rate'])) {
		computeAmount($_POST['years'], $_POST['rate']);
} else {
	echo "Please fill in all field!";
}

function computeAmount($years, $rate) {
	$amount = pow(($rate += 1), $years);
	echo "The amount after ".$years." years is ".$amount." !";
}

?>