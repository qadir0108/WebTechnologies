<h1>This is my Page</h1>

<?php

/// String
echo 'Kamran' . ' Qadir';
	   
/// Variables
$i  = 1;
echo $i;

echo '<br /><br /><br />';

/// Condition
if($i == 1) {
    echo 'i : ' . $i;
}

echo '<br /><br /><br />';

/// For Loop
for($j = 201 ; $j < 205 ; $j++) {
    echo 'j : ' . $j . '&nbsp;';
}

/// Functions
function printName($fname, $year) {
    echo "Mr. $fname. Born in $year <br>";
  }

  echo '<br /><br /><br />';
  printName("Kamran", "1975");
  printName("Qadir", "1978");
  printName("Kami", "1983");

?>