<?php

$n = 3;
$l=3;
$m = ceil($l/$n); 
for($i=1;$i<=$n+1;$i++)
{
	

	for($j=1;$j<=$m;$j++)
	{
		echo "*";
		
	}
	if($i==$n)
	{
		$m = $l*$n;	
	}
	
	echo "<br>";
}

?>