<?php $current_file = $_SERVER['SCRIPT_NAME']; ?>
<font size="5"><strong>Please select your favourite color:</strong></font>
<br><br>
<form action = "<?php echo $current_file; ?>" method="POST">
  Blue
  <input type="radio" name="blue" checked="checked" >
  Green
  <input type="radio" name="green" >
  Yellow
  <input type="radio" name="yellow" >
  Red
  <input type="radio" name="red" >
  <br><br>
  <input type="submit" value="submit">
</form>

<?PHP
if (isset($_POST['blue'])) {
  echo "<br>"."Blue";
  if (isset($_POST['green'])) {
    echo "<br>"."Green";
    if (isset($_POST['yellow'])) {
      echo "<br>"."Yellow";
      if (isset($_POST['red'])) {
        echo "<br>"."Red";
      }
    }
  }
}

?>

