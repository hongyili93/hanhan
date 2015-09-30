<html>
<body>
<head>
<style>
.white {
    background-color: white;
}
.black {
    background-color: black;
}
</style>
<table border="0" width="240" height="240" cellpadding="0" cellspacing="0">
<?php
    for($i=0; $i<8; $i++) {
        echo "<tr>";
        for($j=0; $j<8; $j++) {
 
            if(($i+$j)%2 == 0) {
                echo "<td class='white'></td>";
            } else {
                echo "<td class='black'></td>";
            }
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>