<?php $current_file = $_SERVER['SCRIPT_NAME']; ?>
<font size="5"><strong>Please select your favourite color:</strong></font>
<br><br>
<form action = "<?php echo $current_file; ?>" method="POST">
  Blue
  <input type="radio" name="colour" value="blue" checked="checked" >
  Green
  <input type="radio" name="colour" value="green">
  Yellow
  <input type="radio" name="colour" value="yellow">
  Red
  <input type="radio" name="colour" value="red">
  <br><br>
  <input type="submit" value="submit">
</form>

<?PHP
if (isset($_POST['colour'])) {
  $selected_radio = $_POST['colour'];
  echo $selected_radio;
}
?>