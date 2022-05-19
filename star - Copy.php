<?php	 
// for ($i=1; $i<=5; $i++)	
// {	 
// for($j=1;$j<=$i;$j++)	  
// {	  	
// echo " * ";	 
// }	  	
// echo "<br/>";   	
// }

$n = 100;
$i = 1;
$sum = 0;

//calculating sum from 1 to n
while($i <= $n) {
  $sum += $i;
  $i++;
}

echo "Sum is: $sum";

?>