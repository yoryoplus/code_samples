<?php
function rango($factor,$min,$max){
	if ($factor >= $min && $factor <= $max)	{
		return true;
		}
	}
// --------------- FACTOR A --------
$fact = $A;

if (rango($fact,0,4))
	$dA = 1;
if (rango($fact,5,6))
	$dA = 2;
if (rango($fact,7,9))
	$dA = 3;
if (rango($fact,10,13 ))
	$dA = 4;
if (rango($fact,14,15 ))
	$dA = 5;
if (rango($fact,16,17 ))
	$dA = 6;
if (rango($fact,18,19 ))
	$dA = 7;
if (rango($fact,20,20 ))
	$dA = 8;
if (rango($fact,21,21 ))
	$dA = 9;
if (rango($fact,22,22 ))
	$dA = 10;
	

	
// --------------- FACTOR B ---------
$fact = $B; 

if (rango($fact,0,3))
	$dB = 1;
if (rango($fact,4,5))
	$dB = 2;
if (rango($fact,6,7))
	$dB = 3;
if (rango($fact,8,9))
	$dB = 4;
if (rango($fact,10,11))
	$dB = 6;
if (rango($fact,12,12 ))
	$dB = 8;
if (rango($fact,13,13 ))
	$dB = 9;
if (rango($fact,14,15 ))
	$dB = 10;

// --------------- FACTOR C ---------
$fact = $C;

if (rango($fact,0,2))
	$dC = 1;
if (rango($fact,3,5))
	$dC = 2;
if (rango($fact,6,9))
	$dC = 3;
if (rango($fact,10,15 ))
	$dC = 4;
if (rango($fact,16,16 ))
	$dC = 5;
if (rango($fact,17,18 ))
	$dC = 6;
if (rango($fact,19,19 ))
	$dC = 7;
if (rango($fact,20,20 ))
	$dC = 8;


// --------------- FACTOR E ---------
$fact = $E;


if (rango($fact,0,5))
	$dE = 1;
if (rango($fact,6,8))
	$dE = 2;
if (rango($fact,9,10))
	$dE = 3;
if (rango($fact,11,14))
	$dE = 4;
if (rango($fact,15,15))
	$dE = 5;
if (rango($fact,16,16))
	$dE = 6;
if (rango($fact,17,18))
	$dE = 7;
if (rango($fact,19,19))
	$dE = 8;
if (rango($fact,20,20))
	$dE = 9;

// --------------- FACTOR F ---------
$fact = $F;


if (rango($fact,0,3 ))
	$dF = 1;
if (rango($fact,4,6 ))
	$dF = 2;
if (rango($fact,7,9 ))
	$dF = 3;
if (rango($fact,10,13 ))
	$dF = 4;
if (rango($fact,14,14 ))
	$dF = 5;
if (rango($fact, 15,16))
	$dF = 6;
if (rango($fact,17,17 ))
	$dF = 7;
if (rango($fact,18,18))
	$dF = 8;
if (rango($fact,19,20 ))
	$dF = 9;

	
// --------------- FACTOR G ---------
$fact = $G;
$dec = $dG; 

if (rango($fact,0,3 ))
	$dG = 1;
if (rango($fact,4,6 ))
	$dG = 2;
if (rango($fact,7,8 ))
	$dG = 3;
if (rango($fact,9,14 ))
	$dG = 4;
if (rango($fact,15,15 ))
	$dG = 5;
if (rango($fact,16,18 ))
	$dG = 6;
if (rango($fact,19,20 ))
	$dG = 7;
if (rango($fact,21,21 ))
	$dG = 8;
if (rango($fact,22,22 ))
	$dG = 9;

// --------------- FACTOR H ---------
$fact = $H;

if (rango($fact,0,0 ))
	$dH = 1;
if (rango($fact,1,2 ))
	$dH = 2;
if (rango($fact,3,6 ))
	$dH = 3;
if (rango($fact,7,14 ))
	$dH = 4;
if (rango($fact,15,16 ))
	$dH = 5;
if (rango($fact,17,18 ))
	$dH = 6;
if (rango($fact,19,19 ))
	$dH = 7;
if (rango($fact,20,20 ))
	$dH = 8;


// --------------- FACTOR I  ---------
$fact = $I;

if (rango($fact,0,0 ))
	$dI = 1;
if (rango($fact,1,1 ))
	$dI = 2;
if (rango($fact,2,3 ))
	$dI = 3;
if (rango($fact,4,6 ))
	$dI = 4;
if (rango($fact,7,8 ))
	$dI = 5;
if (rango($fact,9,10 ))
	$dI = 6;
if (rango($fact,11,14 ))
	$dI = 7;
if (rango($fact,15,18 ))
	$dI = 8;
if (rango($fact,19,20 ))
	$dI = 9;
if (rango($fact,21,22 ))
	$dI = 10;

// --------------- FACTOR L  ---------
$fact = $L;


if (rango($fact,0,0 ))
	$dL = 2;
if (rango($fact,1,2 ))
	$dL = 3;
if (rango($fact,3,7 ))
	$dL = 4;
if (rango($fact,8,9 ))
	$dL = 5;
if (rango($fact,10,12 ))
	$dL = 6;
if (rango($fact,13,15 ))
	$dL = 7;
if (rango($fact,16,17 ))
	$dL = 8;
if (rango($fact,18,18 ))
	$dL = 9;
if (rango($fact,19,20 ))
	$dL = 10;

// --------------- FACTOR M ---------
$fact = $M;

if (rango($fact,0,0))
	$dM = 3;
if (rango($fact,1,2 ))
	$dM = 4;
if (rango($fact,3,3 ))
	$dM = 5;
if (rango($fact,4,7 ))
	$dM = 6;
if (rango($fact,8,11 ))
	$dM = 7;
if (rango($fact,12,14 ))
	$dM = 8;
if (rango($fact,15,17 ))
	$dM = 9;
if (rango($fact,18,22 ))
	$dM = 10;

// --------------- FACTOR N ---------
$fact = $N;

if (rango($fact,0,0 ))
	$dN = 1;
if (rango($fact,1,1 ))
	$dN = 2;
if (rango($fact,2,4 ))
	$dN = 3;
if (rango($fact,5,7 ))
	$dN = 4;
if (rango($fact,8,9 ))
	$dN = 5;
if (rango($fact,10,12 ))
	$dN = 6;
if (rango($fact,13,15 ))
	$dN = 7;
if (rango($fact,16,17 ))
	$dN = 8;
if (rango($fact,18,19 ))
	$dN = 9;
if (rango($fact,20,20 ))
	$dN = 10;



// --------------- FACTOR O ---------
$fact = $O;


if (rango($fact,0,0 ))
	$dO = 2;
if (rango($fact,1,1 ))
	$dO = 3;
if (rango($fact,2,5 ))
	$dO = 4;
if (rango($fact, 6,7))
	$dO = 5;
if (rango($fact,8,12 ))
	$dO = 6;
if (rango($fact,13,15 ))
	$dO = 7;
if (rango($fact,16,18))
	$dO = 8;
if (rango($fact,19,19))
	$dO = 9;
if (rango($fact,20,20))
	$dO = 10;

// --------------- FACTOR Q1---------
$fact = $Q1;

if (rango($fact,0,3 ))
	$dQ1 = 1;
if (rango($fact,4,6 ))
	$dQ1 = 2;
if (rango($fact,7,8 ))
	$dQ1 = 3;
if (rango($fact,9,12 ))
	$dQ1 = 4;
if (rango($fact,13,13 ))
	$dQ1 = 5;
if (rango($fact,14,16 ))
	$dQ1 = 6;
if (rango($fact,17,18 ))
	$dQ1 = 7;
if (rango($fact,19,21 ))
	$dQ1 = 8;
if (rango($fact,22,23 ))
	$dQ1 = 9;
if (rango($fact,24,28 ))
	$dQ1 = 10;

// --------------- FACTOR Q2 ---------
$fact = $Q2;

if (rango($fact,0,0 ))
	$dQ2 = 3;
if (rango($fact,1,1 ))
	$dQ2 = 4;
if (rango($fact,2,2))
	$dQ2 = 5;
if (rango($fact,3,4 ))
	$dQ2 = 6;
if (rango($fact,5,7 ))
	$dQ2 = 7;
if (rango($fact,8,11 ))
	$dQ2 = 8;
if (rango($fact,12,14 ))
	$dQ2 = 9;
if (rango($fact,15,20 ))
	$dQ2 = 10;


// --------------- FACTOR Q3 ---------
$fact = $Q3;


if (rango($fact,0,3 ))
	$dQ3 = 1;
if (rango($fact,4,6 ))
	$dQ3 = 2;
if (rango($fact,7,9 ))
	$dQ3 = 3;
if (rango($fact,10,14 ))
	$dQ3 = 4;
if (rango($fact,15,15 ))
	$dQ3 = 5;
if (rango($fact,16,18 ))
	$dQ3 = 6;
if (rango($fact,19,19 ))
	$dQ3 = 7;
if (rango($fact,20,20 ))
	$dQ3 = 8;


// --------------- FACTOR Q4 ---------
$fact = $Q4;

if (rango($fact,0,0 ))
	$dQ4 = 3;
if (rango($fact,1,4 ))
	$dQ4 = 4;
if (rango($fact,5,5 ))
	$dQ4 = 5;
if (rango($fact,6,9 ))
	$dQ4 = 6;
if (rango($fact,10,13 ))
	$dQ4 = 7;
if (rango($fact,14,15 ))
	$dQ4 = 8;
if (rango($fact,16,18 ))
	$dQ4 = 9;
if (rango($fact,19,20 ))
	$dQ4 = 10;

// --------------- FACTOR MI ---------
$fact = $MI;

if (rango($fact,0,2 ))
	$dMI = 1;
if (rango($fact,3,4 ))
	$dMI = 2;
if (rango($fact,5,7 ))
	$dMI = 3;
if (rango($fact,8,12 ))
	$dMI = 4;
if (rango($fact,13,13))
	$dMI = 5;
if (rango($fact,14,17 ))
	$dMI = 6;
if (rango($fact,18,19 ))
	$dMI = 7;
if (rango($fact,20,22 ))
	$dMI = 8;
if (rango($fact,23,23 ))
	$dMI = 9;
if (rango($fact,24,24 ))
	$dMI = 10;
	
// --------------- FACTOR fIN ---------
$fact = $fIN;

if (rango($fact,0,0 ))
	$dIN = 4;
if (rango($fact,1,1 ))
	$dIN = 7;
if (rango($fact,2,3 ))
	$dIN = 8;
if (rango($fact,4,7 ))
	$dIN = 9;
if (rango($fact,8,38 ))
	$dIN = 10;

// --------------- FACTOR AQ  ---------
$fact = $AQ;

if (rango($fact,18,32 ))
	$dAQ = 1;
if (rango($fact,33,36 ))
	$dAQ = 2;
if (rango($fact,37,40 ))
	$dAQ = 3;
if (rango($fact,41,46 ))
	$dAQ = 4;
if (rango($fact,47,48))
	$dAQ = 5;
if (rango($fact,49,53 ))
	$dAQ = 6;
if (rango($fact,54,58))
	$dAQ = 7;
if (rango($fact,59,62 ))
	$dAQ = 8;
if (rango($fact,63,67 ))
	$dAQ = 9;
if (rango($fact,68,95 ))
	$dAQ = 10;
	
//========================================

$creat = 0.99 - 0.33 * $dA+ 0.33 * $dB + 0.17 * $dE - 0.33 * $dF + 0.16 * $dH + 0.33 * $dI + 0.16 * $dM - 0.16 * $dN + 0.16 * dQ1 + 0.33 * dQ2;

$electo =10.45 - 0.14 * $dA + 0.62 * $dB - 0.97 * $dC + 0.00 * $dE + 0.39  * $dF + 0.26  * $dG + 0.09 * $dH + 0.04 * $dI - 0.06 *$dL + 0.06 * $dM + 0.03 * $dN - 0.99  * $dO - 0.44 * $dQ1 - 0.07  * $dQ2 + 0.26 * $dQ3 + 0.02 * $dQ4;

$efetivo = 4.73 - 0.33 *$dA + 0.68 * $dB - 0.52 * $dC + 0.10 * $dE - 0.05 * $dF + 0.07 * $dG + 0.65 * $dH + 0.01 * $dI + 0.05 * $dL - 0.16 * $dM + 0.00 * $dN + 0.64 * $dO - 0.31 * $dQ1 + 0.18 * $dQ2 + 0.14 * $dQ3 - 1.01 * $dQ4;

$tecnico = 6.11 + 0.05 * $dA + 0.93 * $dB - 0.69 * $dC + 0.07 * $dE - 0.10 *$dF + 0.20 * $dG + 0.21 * $dH - 0.01 * $dI + 0.12 *$dL - 0.03 * $dM - 0.05 * $dN - 0.55 * $dO - 0.18 * $dQ1 - 0.19 * $dQ2 + 0.32 * $dQ3 - 0.11 * $dQ4;

?>