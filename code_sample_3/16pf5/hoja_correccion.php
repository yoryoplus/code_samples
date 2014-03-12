<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Hoja correcci&oacute;n</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- Bootstrap -->
    <link href="css/style_tabla2.css" rel="stylesheet" type="text/css" />
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<?php include("query_dni.php"); ?> 

<div style="margin-top:80px;">
<table border="1" align="center" cellpadding="2">
  <tr>
    <td width="162" align="center" class="no_border">16 PF &ndash; 5</td>
    <td colspan="2" align="center">Dimensiones <span class="glyphicon glyphicon-arrow-right"></span></td>
    <td colspan="4" align="center" class="subr_col2" ><strong>Extraversi&oacute;n</strong></td>
    <td colspan="4" align="center" class="subr_col2" ><strong>Ansiedad</strong></td>
    <td colspan="4" align="center" class="subr_col2" ><strong>Dureza</strong></td>
    <td colspan="4" align="center" class="subr_col2" ><strong>Independencia</strong></td>
    <td colspan="4" align="center" class="subr_col2" ><strong>Autocontrol</strong></td>
  </tr>
  <tr >
    <td>Escalas primarias</td>
    <td width="65" align="center" class="border_right">P.Directa</td>
    <td width="85" align="center" class="border_right">Decatipo</td>
    <td colspan="2" align="center" class="subr"><strong>+</strong></td>
    <td colspan="2" align="center" class="subr"><strong>-</strong></td>
    <td colspan="2" align="center" class="subr"><strong>+</strong></td>
    <td colspan="2" align="center" class="subr"><strong>-</strong></td>
    <td colspan="2" align="center" class="subr"><strong>+</strong></td>
    <td colspan="2" align="center" class="subr"><strong>-</strong></td>
    <td colspan="2" align="center" class="subr"><strong>+</strong></td>
    <td colspan="2" align="center" class="subr"><strong>-</strong></td>
    <td colspan="2" align="center" class="subr"><strong>+</strong></td>
    <td colspan="2" align="center" class="subr"><strong>-</strong></td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>A</strong> Afabilidad</td>
    <td align="center"><? echo $rregs[A]?></td>
    <td align="center"><? echo $rregs[dA]?></td>
    <td width="15" align="center" class="no_border">5</td>
    <td width="21" align="center"><? $E[1]=(0.5*$rregs[dA]); echo 0.5*$rregs[dA]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">2</td>
    <td width="17" align="center" ><? echo $A[1]=0.2*$rregs[dA]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">2</td>
    <td width="19" align="center"><? echo $DD[1]=0.2*$rregs[dA]?></td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="22" align="center"><? echo $II[1]=0.1*$rregs[dA]?></td>
    <td width="15" align="center" class="no_border">3</td>
    <td width="24" align="center" ><? echo $U[1]=0.3*$rregs[dA]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>B</strong> Razonamiento</td>
    <td align="center"><? echo $rregs[B]?></td>
    <td align="center"><? echo $rregs[dB]?></td>
    <td align="center" class="no_border">1</td>
    <td align="center"><? $E[2] = 0.1*$rregs[dB]; echo 0.1*$rregs[dB]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">2</td>
    <td width="17" align="center" ><? echo $A[2]=0.2*$rregs[dB]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="19" align="center"><? echo $DD[2]=0.1*$rregs[dB]?></td>
    <td width="17" align="center" class="no_border">1</td>
    <td width="30" align="center" ><? echo $I[1]=0.1*$rregs[dB]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>C</strong> Estabilidad</td>
    <td align="center"><? echo $rregs[C]?></td>
    <td align="center"><? echo $rregs[dC]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">1</td>
    <td align="center"><? echo $EE[1]=0.1*$rregs[dC]; ?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="17" align="center" class="no_border" >&nbsp;</td>
    <td width="12" align="center" class="no_border">3</td>
    <td width="20" align="center"><? echo $AA[1]=0.3*$rregs[dC]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="19" align="center"><? echo $DD[3]=0.1*$rregs[dC]?></td>
    <td width="17" align="center" class="no_border">1</td>
    <td width="30" align="center" ><? echo $I[2]=0.1*$rregs[dC]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="20" align="center"><? echo $UU[1]=0.1*$rregs[dC]?></td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>E</strong> Dominancia</td>
    <td align="center"><? echo $rregs[E]?></td>
    <td align="center"><? echo $rregs[dE]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="17" align="center" ><? echo $A[3]=0.1*$rregs[dE]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="19" align="center"><? echo $DD[4]=0.1*$rregs[dE]?></td>
    <td width="17" align="center" class="no_border">7</td>
    <td width="30" align="center" ><? echo $I[3]= 0.7*$rregs[dE]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="24" align="center" ><? echo $U[2]=0.1*$rregs[dE]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>F</strong> Animaci&oacute;n</td>
    <td align="center"><? echo $rregs[F]?></td>
    <td align="center"><? echo $rregs[dF]?></td>
    <td align="center" class="no_border">3</td>
    <td align="center"><? $E[4]=0.3*$rregs[dF];echo 0.3*$rregs[dF]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="17" align="center" ><? echo $A[4]=0.1*$rregs[dF]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">3</td>
    <td width="28" align="center" ><? echo $D[5]=0.3*$rregs[dF]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">3</td>
    <td width="30" align="center" ><? echo $I[4]=0.3*$rregs[dF]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">3</td>
    <td width="20" align="center"><? echo $UU[2]=0.3*$rregs[dF]?></td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>G</strong> Atenci&oacute;n normas</td>
    <td align="center"><? echo $rregs[G]?></td>
    <td align="center"><? echo $rregs[dG]?></td>
    <td align="center" class="no_border">1</td>
    <td align="center"><? $E[5]=0.1*$rregs[dG]; echo 0.1*$rregs[dG]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="17" align="center" ><? echo $A[5]=0.1*$rregs[dG]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="22" align="center"><? echo $II[2]=0.1*$rregs[dG]?></td>
    <td width="15" align="center" class="no_border">5</td>
    <td width="24" align="center" ><? echo $U[3]=0.5*$rregs[dG]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>H</strong> Atrevimiento</td>
    <td align="center"><? echo $rregs[H]?></td>
    <td align="center"><? echo $rregs[dH]?></td>
    <td align="center" class="no_border">1</td>
    <td align="center"><? $E[6]=0.1*$rregs[dH]; echo 0.1*$rregs[dH]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="17" align="center" class="no_border" >&nbsp;</td>
    <td width="12" align="center" class="no_border">2</td>
    <td width="20" align="center"><? echo $AA[2]=0.2*$rregs[dH]?></td>
    <strong></strong>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">2</td>
    <td width="19" align="center"><? echo $DD[5]=0.2*$rregs[dH]?></td>
    <td width="17" align="center" class="no_border">2</td>
    <td width="30" align="center" ><? echo $I[5]=0.2*$rregs[dH]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="20" align="center"><? echo $UU[3]=0.1*$rregs[dH]?></td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>I</strong> Sensibilidad</td>
    <td align="center"><? echo $rregs[I]?></td>
    <td align="center"><? echo $rregs[dI]?></td>
    <td align="center" class="no_border">2</td>
    <td align="center"><? $E[7]=0.2*$rregs[dI]; echo 0.2*$rregs[dI]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="17" align="center" ><? echo $A[6]=0.1*$rregs[dI]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">3</td>
    <td width="19" align="center"><? echo $DD[6]=0.3*$rregs[dI]?></td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">2</td>
    <td width="22" align="center"><? echo $II[3]=0.2*$rregs[dI]?></td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="24" align="center" ><? echo $U[4]=0.1*$rregs[dI]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
    
  </tr>
  <tr>
    <td class="subr_col2"><strong>L</strong> Vigilancia</td>
    <td align="center"><? echo $rregs[L]?></td>
    <td align="center"><? echo $rregs[dL]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">3</td>
    <td width="17" align="center" ><? echo $A[7]=0.3*$rregs[dL]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">2</td>
    <td width="28" align="center" ><? echo $D[2]=0.2*$rregs[dL]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">3</td>
    <td width="30" align="center" ><? echo $I[6]=0.3*$rregs[dL]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>M</strong> Abstracci&oacute;n</td>
    <td align="center"><? echo $rregs[M]?></td>
    <td align="center"><? echo $rregs[dM]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="17" align="center" class="no_border" >&nbsp;</td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">3</td>
    <td width="19" align="center"><? echo $DD[7]=0.1*$rregs[dM]?></td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="20" align="center"><? echo $UU[4]=0.1*$rregs[dM]?></td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>N</strong> Privacidad</td>
    <td align="center"><? echo $rregs[N]?></td>
    <td align="center"><? echo $rregs[dN]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">3</td>
    <td align="center"><? echo $EE[2]=0.3*$rregs[dN]?></td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="17" align="center" ><? echo $A[8]=0.1*$rregs[dN]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="28" align="center" ><? echo $D[3]=0.1*$rregs[dN]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">2</td>
    <td width="30" align="center" ><? echo $I[7]=0.2*$rregs[dN]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>O</strong> Aprensi&oacute;n</td>
    <td align="center"><? echo $rregs[O];?></td>
    <td align="center"><? echo $rregs['dO'];?></td>
    <td align="center" class="no_border">2</td>
    <td align="center"><? $E[8]=0.2*$rregs['dO']; echo 0.2*$rregs['dO']?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">5</td>
    <td width="17" align="center" ><? echo $A[9]=0.5*$rregs['dO']?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">1</td>
    <td width="28" align="center" ><? echo $D[4]=0.1*$rregs['dO']?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">3</td>
    <td width="24" align="center" ><? echo $U[5]=0.1*$rregs['dO']?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>Q1</strong> Apertura al cambio</td>
    <td align="center"><? echo $rregs[Q1]?></td>
    <td align="center"><? echo $rregs[dQ1]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">2</td>
    <td align="center"><? echo $EE[3]=0.2*$rregs[dQ1]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="17" align="center" class="no_border" >&nbsp;</td>
    <td width="12" align="center" class="no_border">4</td>
    <td width="20" align="center"><? echo $AA[3]=0.4*$rregs[dQ1]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">8</td>
    <td width="19" align="center"><? echo $DD[8]=0.8*$rregs[dQ1]?></td>
    <td width="17" align="center" class="no_border">1</td>
    <td width="30" align="center" ><? echo $I[8]=0.1*$rregs[dQ1]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>Q2</strong> Autosuficiencia</td>
    <td align="center"><? echo $rregs[Q2]?></td>
    <td align="center"><? echo $rregs[dQ2]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="no_border">4</td>
    <td align="center"><? echo $EE[4]=0.4*$rregs[dQ2]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="17" align="center" class="no_border" >&nbsp;</td>
    <td width="12" align="center" class="no_border">2</td>
    <td width="20" align="center"><? echo $AA[4]=0.2*$rregs[dQ2]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">3</td>
    <td width="19" align="center"><? echo $DD[9]=0.3*$rregs[dQ2]?></td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>Q3</strong> Perfeccionismo</td>
    <td align="center"><? echo $rregs[Q3]?></td>
    <td align="center"><? echo $rregs[dQ3]?></td>
    <td align="center" class="no_border">1</td>
    <td align="center"><? $E[9]=0.1*$rregs[dQ3]; echo 0.1*$rregs[dQ3]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">3</td>
    <td width="17" align="center" ><? echo $A[10]=0.3*$rregs[dQ3]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">1</td>
    <td width="19" align="center"><? echo $DD[10]=0.1*$rregs[dQ3]?></td>
    <td width="17" align="center" class="no_border">1</td>
    <td width="30" align="center" ><? echo $I[9]=0.1*$rregs[dQ3]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">7</td>
    <td width="24" align="center" ><? echo $U[6]=0.7*$rregs[dQ3]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td class="subr_col2"><strong>Q4</strong> Tensi&oacute;n</td>
    <td align="center"><? echo $rregs[Q4]?></td>
    <td align="center"><? echo $rregs[dQ4]?></td>
    <td align="center" class="no_border">1</td>
    <td align="center"><? $E[10] = 0.1*$rregs[dQ4]; echo 0.1*$rregs[dQ4]?></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">4</td>
    <td width="17" align="center" ><? echo $A[11]=0.4*$rregs[dQ4]?></td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">3</td>
    <td width="28" align="center" ><? echo $D[5]=0.3*$rregs[Q4]?></td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">2</td>
    <td width="30" align="center" ><? echo $I[10]=0.2*$rregs[dQ4]?></td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center" class="no_border">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="3" align="right"><strong>Constantes</strong></td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center">1.6</td>
    <td align="center" class="no_border">&nbsp;</td>
    <td align="center" class="border_right">&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="17" align="center" class="no_border" >&nbsp;</td>
    <td width="12" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center">1.6</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="28" align="center" >13.8</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="19" align="center" class="border_right">&nbsp;</td>
    <td width="17" align="center" class="no_border">&nbsp;</td>
    <td width="30" align="center" class="no_border" >&nbsp;</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="22" align="center">5.0</td>
    <td width="15" align="center" class="no_border">&nbsp;</td>
    <td width="24" align="center" class="no_border" >&nbsp;</td>
    <td width="13" align="center" class="no_border">&nbsp;</td>
    <td width="20" align="center"><span class="no_border">2.2</span></td>

  </tr>
  <tr>
    <td colspan="3" align="right" class="border_right">Sumas</td>
    <td align="center" class="subr2">+</td>
    <td align="center" class="border_right">
	<?
	$s_ex1=1.6;
	for ($i=1;$i<=10;$i++){
		$s_ex1 += $E[$i];
		}
	echo $s_ex1;
	?>
    </td>
    <td align="center" class="subr2">-</td>
    <td align="center" class="border_right"><?
	$s_ex2=0;
	for ($i=1;$i<=4;$i++){
		$s_ex2 += $EE[$i];
		}
	echo $s_ex2;
	?></td>
    <td align="center" class="subr2">+</td>
    <td align="center" class="border_right"><?
	$s_ans1=0;
	for ($i=1;$i<=11;$i++){
		$s_ans1 += $A[$i];
		}
	echo $s_ans1;
	?></td>
    <td align="center" class="subr2">-</td>
    <td align="center" class="border_right"><?
	$s_ans2=1.6;
	for ($i=1;$i<=4;$i++){
		$s_ans2 += $AA[$i];
		}
	echo $s_ans2;
	?></td>
    <td align="center" class="subr2">+</td>
    <td align="center" class="border_right"><?
	$s_dur1=13.8;
	for ($i=1;$i<=5;$i++){
		$s_dur1 += $D[$i];
		}
	echo $s_dur1;
	?></td>
    <td align="center" class="subr2">-</td>
    <td align="center" class="border_right"><?
	$s_dur2=0;
	for ($i=1;$i<=10;$i++){
		$s_dur2 += $D[$i];
		}
	echo $s_dur2;
	?></td>
    <td align="center" class="subr2">+</td>
    <td align="center" class="border_right"><?
	$s_ind1=0;
	for ($i=1;$i<=10;$i++){
		$s_ind1 += $I[$i];
		}
	echo $s_ind1;
	?></td>
    <td align="center" class="subr2">-</td>
    <td align="center" class="border_right"><?
	$s_ind2=5;
	for ($i=1;$i<=3;$i++){
		$s_ind2 += $II[$i];
		}
	echo $s_ind2;
	?></td>
    <td align="center" class="subr2">+</td>
    <td align="center" class="border_right"><?
	$s_aut1=0;
	for ($i=1;$i<=6;$i++){
		$s_aut1 += $U[$i];
		}
	echo $s_aut1;
	?></td>
    <td align="center" class="subr2">-</td>
    <td align="center" class="no_border"><?
	$s_aut2=2.2;
	for ($i=1;$i<=4;$i++){
		$s_aut2 += $UU[$i];
		}
	echo $s_aut2;
	?></td>
  </tr>
  <tr class="subr">
    <td colspan="3" align="right">Decatipo  en la dimensi&oacute;n</td>
    <td colspan="4" align="center"><? echo $s_ex1-$s_ex2?></td>
    <td colspan="4" align="center"><? echo $s_ans1-$s_ans2?></td>
    <td colspan="4" align="center"><? echo $s_dur1-$s_dur2?></td>
    <td colspan="4" align="center"><? echo $s_ind1-$s_ind2?></td>
    <td colspan="4" align="center"><? echo $s_aut1-$s_aut2?></td>
  </tr>
  <tr>
    <td >EdR</td>
    <td colspan="2" class="subr_col"><strong>MI-</strong>P.dir: <? echo $rregs[MI]?> / Decat.: <? echo $rregs[dMI]?></td>
    <td colspan="12" align="center" class="subr_col"><strong>IN - </strong>P.directa: <? echo $rregs[fIN]?> / Decat: <? echo $rregs[dIN]?></td>
    <td colspan="8" align="center" class="subr_col"><strong>AQ</strong> - P.directa: <? echo $rregs[AQ]?> / Decat: <? echo $rregs[dAQ]?></td>
  </tr>
  <tr class="subr_col">
    <td colspan="2" >Potencial  de creatividad:<? echo $rregs[creat]?></td>
    <td colspan="5">P como  L&iacute;der Electo:<? echo $rregs[electo]?></td>
    <td colspan="8" align="center">P como  L&iacute;der Efectivo:<? echo $rregs[efectivo]?></td>
    <td colspan="8" align="center">P como  L&iacute;der T&eacute;cnico:<? echo $rregs[tecnico]?></td>
  </tr>
</table>
</div>
<p>&nbsp;</p>
<div align="center">
    <a href="http://pdfcrowd.com/url_to_pdf/?width=320mm&height=297mm">
    <button type="button" class="btn btn-primary">    
            <strong>CONVERTIR LOS RESULTADOS A PDF</strong>
    </button>
    </a>
</div>
</body>
</html>