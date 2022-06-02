<?php
/**
** Input: Any money amount
** Output: Minimum amount of coins needed (EURO)
**/
$coins= array(2.00,1.00,0.50,0.20,0.10,0.05,0.02,0.01);

$money = (float)readline('Enter the amount of money: ');
$min_total_coins = 0;

for ($i=0; $i<count($coins); $i++){
	while ($money>= $coins[$i]){
		$min_total_coins += 1;
		$money= $money - $coins[$i];
	}
}
echo $min_total_coins;
?>
