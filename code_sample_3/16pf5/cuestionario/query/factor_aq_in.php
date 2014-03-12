<?php
/*** --- FACTOR AQ --------------------------------------------- ***/

$AQ = 0; //inicializo factor

$arr = array(2,4,5,9,10,12,13,14,23,27,28,29,33,34,35,36,39,40,41,43,44,47,	48,	49,	50,	54,	57,	58,	59,	61,	62,	63,	64,	65,	66,	68,	69,	71,	76,	77,	79,	83,	85,	87,	89,	90,	91,	92,	93,	96,	97,	99,	100,103,105,106,107,108,110,111,113,114,116,117,118,124,125,126,128,130,132,133,134,135,137,138,141,142,145,146,148,149,150,151,152,155,156,157,159,161,165,166,167,169); //Array con el número de pregunta que interviene.

//echo count($arr);
$cont = 0;
while ( $cont <= count($arr) ){
	$indice = $arr[$cont];
	if ($item[$indice] == 1){ //Si hemos respondido la opción A
		$AQ ++;
	}
	$cont++;
}


/*** --- FACTOR IN ----------------------------------------------- ***/

$fIN = 0; //inicializo factor

$arr = array(5,	8,	10,	14,	16,	22,	24,	26,	27,	28,	35,	36,	51,	56,	63,	75,	80,	85,	90,	91,	92,	98,	101,	102,111,116,121,123,125,128,130,131,140,144,151,154,158,160);//Array con el número de pregunta que interviene.

//echo count($arr);
$cont = 0;
while ( $cont <= count($arr) ){
	$indice = $arr[$cont];
	if ($item[$indice] == 2){ //Si hemos respondido la opción B
		$fIN ++;
	}
	$cont++;
}

//echo "factor AQ : ".$AQ.'<br>';
//echo "factor IN : ".$IN.'<br>';

?>