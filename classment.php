<?php 
include 'header.php';
include 'index.php';
?>
<?php

if (isset($_POST['premier_match_domicile']) AND isset($_POST['premier_match_exterieur'])){
if ($_POST['premier_match_domicile'] > $_POST['premier_match_exterieur']) {
	$resultat_md = 3;
	$resultat_mE = 0;
	$match_jouerD1 = 1;
	$match_jouerE1 = 1;
}
elseif ($_POST['premier_match_domicile'] == $_POST['premier_match_exterieur']) {
	$resultat_md = 1;
	$resultat_mE = 1;
	$match_jouerD1 = 1;
	$match_jouerE1 = 1;
}
else {
	$resultat_md = 0;
	$resultat_mE = 3;
	$match_jouerD1 = 1;
	$match_jouerE1 = 1;
}
}
?>
 
<?php 
if (isset($_POST['deuxieme_match_domicile']) AND isset($_POST['deuxieme_match_exterieur'])){
if ($_POST['deuxieme_match_domicile'] > $_POST['deuxieme_match_exterieur']) {
	$resultat_md2 = 3;
	$resultat_mE2 = 0;
	$match_jouerD2 = 1;
	$match_jouerE2 = 1;
}
elseif ($_POST['deuxieme_match_domicile'] == $_POST['deuxieme_match_exterieur']) {
	$resultat_md2 = 1;
	$resultat_mE2 = 1;
	$match_jouerD2 = 1;
	$match_jouerE2 = 1;
}
else {
	$resultat_md2 = 0;
	$resultat_mE2 = 3;
	$match_jouerD2 = 1;
	$match_jouerE2 = 1;
}
}
?>
<?php 
if (isset($_POST['troisieme_match_domicile']) AND isset($_POST['troisieme_match_exterieur'])){
if ($_POST['troisieme_match_domicile'] > $_POST['troisieme_match_exterieur']) {
	$resultat_md3 = $resultat_md + 3;
	$resultat_mE3 = $resultat_md2 + 0;
	$match_jouerD3 = $match_jouerD1 + 1;
	$match_jouerE3 = $match_jouerD2 + 1;
}
elseif ($_POST['troisieme_match_domicile'] == $_POST['troisieme_match_exterieur']) {
	$resultat_md3 = $resultat_md + 1;
	$resultat_mE3 = $resultat_md2 + 1;
	$match_jouerD3 = $match_jouerD1 + 1;
	$match_jouerE3 = $match_jouerD2 + 1;
}
else {
	$resultat_md3 = $resultat_md + 0;
	$resultat_mE3 = $resultat_md2 + 3;
	$match_jouerD3 = $match_jouerD1 + 1;
	$match_jouerE3 = $match_jouerD2 + 1;
}
 
}
?>


<?php 
if (isset($_POST['quatrieme_match_domicile']) AND isset($_POST['quatrieme_match_exterieur'])){
if ($_POST['quatrieme_match_domicile'] > $_POST['quatrieme_match_exterieur']) {
	$resultat_md4 = $resultat_mE + 3;
	$resultat_mE4 = $resultat_mE2 + 0;
	$match_jouerD4 = $match_jouerE1 + 1;
	$match_jouerE4 = $resultat_mE2 + 1;
}
elseif ($_POST['quatrieme_match_domicile'] == $_POST['quatrieme_match_exterieur']) {
	$resultat_md4 = $resultat_mE + 1;
	$resultat_mE4 = $resultat_mE2 + 1;
	$match_jouerD4 = $match_jouerE1 + 1;
	$match_jouerE4 = $resultat_mE2 + 1;
}
else {
	$resultat_md4 = $resultat_mE + 0;
	$resultat_mE4 = $resultat_mE2 + 3;
	$match_jouerD4 = $match_jouerE1 + 1;
	$match_jouerE4 = $resultat_mE2 + 1;
}
 
}
?>

<?php 
if (isset($_POST['cinquieme_match_domicile']) AND isset($_POST['cinquieme_match_exterieur'])){
if ($_POST['cinquieme_match_domicile'] > $_POST['cinquieme_match_exterieur']) {
	$resultat_md5 = $resultat_md3 + 3;
	$resultat_mE5 = $resultat_mE4 + 0;
	$match_jouerD5 = $match_jouerD3 + 1;
	$match_jouerE5 = $match_jouerE4 + 1;
}
elseif ($_POST['cinquieme_match_domicile'] == $_POST['cinquieme_match_exterieur']) {
	$resultat_md5 = $resultat_md3 + 1;
	$resultat_mE5 = $resultat_mE4 + 1;
	$match_jouerD5 = $match_jouerD3 + 1;
	$match_jouerE5 = $match_jouerE4 + 1;
}
else {
	$resultat_md5 = $resultat_md3 + 0;
	$resultat_mE5 = $resultat_mE4 + 3;
	$match_jouerD5 = $match_jouerD3 + 1;
	$match_jouerE5 = $match_jouerE4 + 1;
}
 
}
?>

<?php 
if (isset($_POST['sixieme_match_domicile']) AND isset($_POST['sixieme_match_exterieur'])){
if ($_POST['sixieme_match_domicile'] > $_POST['sixieme_match_exterieur']) {
	$resultat_md6 = $resultat_md4 + 3;
	$resultat_mE6 = $resultat_mE3 + 0;
	$match_jouerD6 = $match_jouerD4 + 1;
	$match_jouerE6 = $match_jouerE3 + 1;
}
elseif ($_POST['sixieme_match_domicile'] == $_POST['sixieme_match_exterieur']) {
	$resultat_md6 = $resultat_md4 + 1;
	$resultat_mE6 = $resultat_mE3 + 1;
	$match_jouerD6 = $match_jouerD4 + 1;
	$match_jouerE6 = $match_jouerE3 + 1;
}
else {
	$resultat_md6 = $resultat_md4 + 0;
	$resultat_mE6 = $resultat_mE3 + 3;
	$match_jouerD6 = $match_jouerD4 + 1;
	$match_jouerE6 = $match_jouerE3 + 1;
}
 
 
}
?>

<?php 
$point = [$resultat_md6, $resultat_mE6, $resultat_md5, $resultat_mE5];
sort($point);
?>

<?php
if ($point[0]==$resultat_md6)
{
	$equipe0 = $tab[1];
}
elseif ($point[0]== $resultat_mE6)
{
	$equipe0 = $tab[2];
}
elseif ($point[0]== $resultat_md5)
{
	$equipe0 = $tab[0];
}
else
{
	$equipe0 = $tab[3];
}
?>
<?php
if ($point[1]==$resultat_md6)
{
	$equipe1 = $tab[1];
}
elseif ($point[1]== $resultat_mE6)
{
	$equipe1 = $tab[2];
}
elseif ($point[1]== $resultat_md5)
{
	$equipe1 = $tab[0];
}
else
{
	$equipe1 = $tab[3];
}
?>
<?php
if ($point[2]==$resultat_md6)
{
	$equipe2 = $tab[1];
}
elseif ($point[2]== $resultat_mE6)
{
	$equipe2 = $tab[2];
}
elseif ($point[2]== $resultat_md5)
{
	$equipe2 = $tab[0];
}
else
{
	$equipe2 = $tab[3];
}
?>
<?php
if ($point[3]==$resultat_md6)
{
	$equipe3 = $tab[1];
}
elseif ($point[3]== $resultat_mE6)
{
	$equipe3 = $tab[2];
}
elseif ($point[3]== $resultat_md5)
{
	$equipe3 = $tab[0];
}
else
{
	$equipe3 = $tab[3];
}
?>

	
<?php
switch ($point[0])
{ 
case 9: 
$match_gagner0 = 3;
$match_perdu0 = 0 ;
$match_nul0 = 0 ;
break;

case 7:
$match_gagner0 = 2;
$match_perdu0 = 0 ;
$match_nul0 = 1 ;
break;

case 6:     
$match_gagner0 = 2;
$match_perdu0 = 1 ;
$match_nul0 = 0 ;
break;

case 5:
$match_gagner0 = 1;
$match_perdu0 = 0 ;
$match_nul0 = 2 ;
break;

case 4:
$match_gagner0 = 1;
$match_perdu0 = 1 ;
$match_nul0 = 1 ; 
break;

case 3:
if ($_POST['premier_match_domicile'] ==  $_POST['premier_match_exterieur'] AND
 $_POST['troisieme_match_domicile'] == $_POST['troisieme_match_exterieur'] AND $_POST['cinquieme_match_domicile'] == $_POST['cinquieme_match_exterieur'] ):
$match_gagner0 = 0;
$match_perdu0 = 0 ;
$match_nul0 = 3 ;
else :
$match_gagner0 = 1;
$match_perdu0 = 2 ;
$match_nul0 = 0 ;
 endif;
break;

case 3:
if ($_POST['premier_match_exterieur'] ==  $_POST['premier_match_domicile'] AND
 $_POST['quatrieme_match_domicile'] == $_POST['quatrieme_match_exterieur'] AND $_POST['sixieme_match_domicile'] == $_G_POSTET['sixieme_match_exterieur'] ):
$match_gagner0 = 0;
$match_perdu0 = 0 ;
$match_nul0 = 3 ;
else :
$match_gagner0 = 1;
$match_perdu0 = 2 ;
$match_nul0 = 0 ;
 endif;
break;

case 3:
if ($_POST['deuxieme_match_domicile'] ==  $_POST['deuxieme_match_exterieur'] AND
 $_POST['troisieme_match_exterieur'] == $_POST['troisieme_match_domicile'] AND $_POST['sixieme_match_exterieur'] == $_POST['sixieme_match_domicile'] ):
$match_gagner0 = 0;
$match_perdu0 = 0 ;
$match_nul0 = 3 ;
else :
$match_gagner0 = 1;
$match_perdu0 = 2 ;
$match_nul0 = 0 ;
 endif;
break;

case 3:
if ($_POST['deuxieme_match_exterieur'] ==  $_POST['deuxieme_match_domicile'] AND
 $_POST['quatrieme_match_exterieur'] == $_POST['quatrieme_match_domicile'] AND $_POST['cinquieme_match_exterieur'] == $_POST['cinquieme_match_domicile'] ) :
$match_gagner0 = 0;
$match_perdu0 = 0 ;
$match_nul0 = 3 ;
else :
$match_gagner0 = 1;
$match_perdu0 = 2 ;
$match_nul0 = 0 ;
 endif;
break;

case 2:
$match_gagner0 = 0;
$match_perdu0 = 1 ;
$match_nul0 = 2 ;
break;

case 1:
$match_gagner0 = 0;
$match_perdu0 = 2;
$match_nul0 = 1 ;
break;

case 0:

$match_gagner0 = 0;
$match_perdu0 = 3 ;
$match_nul0 = 0 ;
break;
}
?>

<?php
switch ($point[1])
{ 
case 9: 
$match_gagner1 = 3;
$match_perdu1 = 0 ;
$match_nul1 = 0 ;
break;

case 7:
$match_gagner1 = 2;
$match_perdu1 = 0 ;
$match_nul1 = 1 ;
break;

case 6:     
$match_gagner1 = 2;
$match_perdu1 = 1 ;
$match_nul1 = 0 ;
break;

case 5:
$match_gagner1 = 1;
$match_perdu1 = 0 ;
$match_nul1 = 2 ;
break;

case 4:
$match_gagner1 = 1;
$match_perdu1 = 1 ;
$match_nul1 = 1 ; 
break;

case 3:
if ($_POST['premier_match_domicile'] ==  $_POST['premier_match_exterieur'] AND
 $_POST['troisieme_match_domicile'] == $_POST['troisieme_match_exterieur'] AND $_POST['cinquieme_match_domicile'] == $_POST['cinquieme_match_exterieur'] ):
$match_gagner1 = 0;
$match_perdu1 = 0 ;
$match_nul1 = 3 ;
else :
$match_gagner1 = 1;
$match_perdu1 = 2 ;
$match_nul1 = 0 ;
endif;
break;

case 3:
if ($_POST['premier_match_exterieur'] ==  $_POST['premier_match_domicile'] AND
 $_POST['quatrieme_match_domicile'] == $_POST['quatrieme_match_exterieur'] AND $_POST['sixieme_match_domicile'] == $_POST['sixieme_match_exterieur'] ) :
$match_gagner1 = 0;
$match_perdu1 = 0 ;
$match_nul1 = 3 ;
else :
$match_gagner1 = 1;
$match_perdu1 = 2 ;
$match_nul1 = 0 ;
endif;
break;

case 3:
if ($_POST['deuxieme_match_domicile'] ==  $_POST['deuxieme_match_exterieur'] AND
 $_POST['troisieme_match_exterieur'] == $_POST['troisieme_match_domicile'] AND $_POST['sixieme_match_exterieur'] == $_POST['sixieme_match_domicile'] ) :
$match_gagner1 = 0;
$match_perdu1 = 0 ;
$match_nul1 = 3 ;
else :
$match_gagner1 = 1;
$match_perdu1 = 2 ;
$match_nul1 = 0 ;
endif;
break;

case 3:
if ($_POST['deuxieme_match_exterieur'] ==  $_POST['deuxieme_match_domicile'] AND
 $_POST['quatrieme_match_exterieur'] == $_POST['quatrieme_match_domicile'] AND $_POST['cinquieme_match_exterieur'] == $_POST['cinquieme_match_domicile'] ):
$match_gagner1 = 0;
$match_perdu1 = 0 ;
$match_nul1 = 3 ;
else :
$match_gagner1 = 1;
$match_perdu1 = 2 ;
$match_nul1 = 0 ;
endif;
break;

case 2:
$match_gagner1 = 0;
$match_perdu1 = 1 ;
$match_nul1 = 2 ;
break;

case 1:
$match_gagner1 = 0;
$match_perdu1 = 2;
$match_nul1 = 1 ;
break;

case 0 :
$match_gagner1 = 0;
$match_perdu1 = 3 ;
$match_nul1 = 0 ;
break;

default:

}
?>

<?php
switch ($point[2])
{ 
case 9: 
$match_gagner2 = 3;
$match_perdu2 = 0 ;
$match_nul2 = 0 ;
break;

case 7:
$match_gagner2 = 2;
$match_perdu2 = 0 ;
$match_nul2 = 1 ;
break;

case 6:     
$match_gagner2 = 2;
$match_perdu2 = 1 ;
$match_nul2 = 0 ;
break;

case 5:
$match_gagner2 = 1;
$match_perdu2 = 0 ;
$match_nul2 = 2 ;
break;

case 4:
$match_gagner2 = 1;
$match_perdu2 = 1 ;
$match_nul2 = 1 ; 
break;

case 3:
if ($_POST['premier_match_domicile'] ==  $_POST['premier_match_exterieur'] AND
 $_POST['troisieme_match_domicile'] == $_POST['troisieme_match_exterieur'] AND $_POST['cinquieme_match_domicile'] == $_POST['cinquieme_match_exterieur'] ) :
$match_gagner2 = 0;
$match_perdu2 = 0 ;
$match_nul2 = 3 ;
else :
$match_gagner2 = 1;
$match_perdu2 = 2 ;
$match_nul2 = 0 ;
endif;
break;

case 3:
if ($_POST['premier_match_exterieur'] ==  $_POST['premier_match_domicile'] AND
 $_POST['quatrieme_match_domicile'] == $_POST['quatrieme_match_exterieur'] AND $_POST['sixieme_match_domicile'] == $_POST['sixieme_match_exterieur'] ):
$match_gagner2 = 0;
$match_perdu2 = 0 ;
$match_nul2 = 3 ;
else :
$match_gagner2 = 1;
$match_perdu2 = 2 ;
$match_nul2 = 0 ;
endif;
break;

case 3:
if ($_POST['deuxieme_match_domicile'] ==  $_POST['deuxieme_match_exterieur'] AND
 $_POST['troisieme_match_exterieur'] == $_POST['troisieme_match_domicile'] AND $_POST['sixieme_match_exterieur'] == $_POST['sixieme_match_domicile'] ) :
$match_gagner2 = 0;
$match_perdu2 = 0 ;
$match_nul2 = 3 ;
else :
$match_gagner2 = 1;
$match_perdu2 = 2 ;
$match_nul2 = 0 ;
endif;
break;

case 3:
if ($_POST['deuxieme_match_exterieur'] ==  $_POST['deuxieme_match_domicile'] AND
 $_POST['quatrieme_match_exterieur'] == $_POST['quatrieme_match_domicile'] AND $_POST['cinquieme_match_exterieur'] == $_POST['cinquieme_match_domicile'] ) :
$match_gagner2 = 0;
$match_perdu2 = 0 ;
$match_nul2 = 3 ;
else :
$match_gagner2 = 1;
$match_perdu2 = 2 ;
$match_nul2 = 0 ;
endif;
break;

case 2:
$match_gagner2 = 0;
$match_perdu2 = 1 ;
$match_nul2 = 2 ;
break;

case 1:
$match_gagner2 = 0;
$match_perdu2 = 2;
$match_nul2 = 1 ;
break;

case 0:
$match_gagner2 = 0;
$match_perdu2 = 3 ;
$match_nul2 = 0 ;
break;

default:

}
?>

<?php
switch ($point[3])
{ 
case 9: 
$match_gagner3 = 3;
$match_perdu3 = 0 ;
$match_nul3 = 0 ;
break;

case 7:
$match_gagner3 = 2;
$match_perdu3 = 0 ;
$match_nul3 = 1 ;
break;

case 6:     
$match_gagner3 = 2;
$match_perdu3 = 1 ;
$match_nul3 = 0 ;
break;

case 5:
$match_gagner3 = 1;
$match_perdu3 = 0 ;
$match_nul3 = 2 ;
break;

case 4:
$match_gagner3 = 1;
$match_perdu3 = 1 ;
$match_nul3 = 1 ; 
break;

case 3:
if ($_POST['premier_match_domicile'] ==  $_POST['premier_match_exterieur'] AND
 $_POST['troisieme_match_domicile'] == $_POST['troisieme_match_exterieur'] AND $_POST['cinquieme_match_domicile'] == $_POST['cinquieme_match_exterieur'] ) :
$match_gagner3 = 0;
$match_perdu3 = 0 ;
$match_nul3 = 3 ;
else :
$match_gagner3 = 1;
$match_perdu3 = 2 ;
$match_nul3 = 0 ;
endif;
break;

case 3:
if ($_POST['premier_match_exterieur'] ==  $_POST['premier_match_domicile'] AND
 $_POST['quatrieme_match_domicile'] == $_POST['quatrieme_match_exterieur'] AND $_POST['sixieme_match_domicile'] == $_POST['sixieme_match_exterieur'] ):
$match_gagner3 = 0;
$match_perdu3 = 0 ;
$match_nul3 = 3 ;
else :
$match_gagner3 = 1;
$match_perdu3 = 2 ;
$match_nul3 = 0 ;
endif;
break;

case 3:
if ($_POST['deuxieme_match_domicile'] ==  $_POST['deuxieme_match_exterieur'] AND
 $_POST['troisieme_match_exterieur'] == $_POST['troisieme_match_domicile'] AND $_POST['sixieme_match_exterieur'] == $_POST['sixieme_match_domicile'] ) :
$match_gagner3 = 0;
$match_perdu3 = 0 ;
$match_nul3 = 3 ;
else :
$match_gagner3 = 1;
$match_perdu3 = 2 ;
$match_nul3 = 0 ;
endif;
break;

case 3:
if ($_POST['deuxieme_match_exterieur'] ==  $_POST['deuxieme_match_domicile'] AND
 $_POST['quatrieme_match_exterieur'] == $_POST['quatrieme_match_domicile'] AND $_POST['cinquieme_match_exterieur'] == $_POST['cinquieme_match_domicile'] ) :
$match_gagner3 = 0;
$match_perdu3 = 0 ;
$match_nul3 = 3 ;
else :
$match_gagner3 = 1;
$match_perdu3 = 2 ;
$match_nul3 = 0 ;
endif;
break;


case 2:
$match_gagner3 = 0;
$match_perdu3 = 1 ;
$match_nul3 = 2 ;
break;

case 1:
$match_gagner3 = 0;
$match_perdu3 = 2;
$match_nul3 = 1 ;
break;

case 0:
$match_gagner3 = 0;
$match_perdu3 = 3 ;
$match_nul3 = 0 ;
break;

default:
echo "";
}
?>


<?php
if ($point[0] == $resultat_md5 )
{
$but_pour0 = $_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[0] == $resultat_mE5 ) {
$but_pour0 = $_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[0] == $resultat_md6 )
{
$but_pour0 = $_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}
if ($point[0] == $resultat_mE6 )
{
$but_pour0 = $_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}	
?>
<?php
if ($point[1] == $resultat_md5 )
{
$but_pour1 = $_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[1] == $resultat_mE5 ) {
$but_pour1 = $_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[1] == $resultat_md6 )
{
$but_pour1 = $_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}
if ($point[1] == $resultat_mE6 )
{
$but_pour1 = $_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}	
?>
<?php
if ($point[2] == $resultat_md5 )
{
$but_pour2 = $_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[2] == $resultat_mE5 ) {
$but_pour2 = $_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[2] == $resultat_md6 )
{
$but_pour2 = $_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}
if ($point[2] == $resultat_mE6 )
{
$but_pour2 = $_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}	
?>
<?php
if ($point[3] == $resultat_md5 )
{
$but_pour3 = $_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[3] == $resultat_mE5 ) {
$but_pour3 = $_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[3] == $resultat_md6 )
{
$but_pour3 = $_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}
if ($point[3] == $resultat_mE6 )
{
$but_pour3 = $_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}	
?>
<!-- But contre des equipes -->

<?php
if ($point[0] == $resultat_md5 )
{
$but_contre0 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[0] == $resultat_mE5 ) {
$but_contre0 = $_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[0] == $resultat_md6 )
{
$but_contre0 = $_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}
if ($point[0] == $resultat_mE6 )
{
$but_contre0 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}	
?>
<?php
if ($point[1] == $resultat_md5 )
{
$but_contre1 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[1] == $resultat_mE5 ) {
$but_contre1 = $_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[1] == $resultat_md6 )
{
$but_contre1 = $_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}
if ($point[1] == $resultat_mE6 )
{
$but_contre1 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}	
?>
<?php
if ($point[2] == $resultat_md5 )
{
$but_contre2 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[2] == $resultat_mE5 ) {
$but_contre2 = $_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[2] == $resultat_md6 )
{
$but_contre2 = $_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}
if ($point[2] == $resultat_mE6 )
{
$but_contre2 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}	
?>
<?php
if ($point[3] == $resultat_md5 )
{
$but_contre3 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur'];
}
if ($point[3] == $resultat_mE5 ) {
$but_contre3 = $_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile'];
}
if ($point[3] == $resultat_md6 )
{
$but_contre3 = $_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur'];
}
if ($point[3] == $resultat_mE6 )
{
$but_contre3 = $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile'];
}	
?>

<!--Difference entre but marque et encaisse -->
<?php
if ($point[0] == $resultat_md5 )
{
$difference0 = (($_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile']) -( $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']));
}
if ($point[0] == $resultat_mE5 ) {
$difference0 = (($_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']) -($_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile']));
}
if ($point[0] == $resultat_md6 )
{
$difference0 = (($_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile']) - ($_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur']));
}
if ($point[0] == $resultat_mE6 )
{
$difference0 = (($_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur']) - ($_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile']));
}	
?>
<?php
if ($point[1] == $resultat_md5 )
{
$difference1 = (($_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile']) -( $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']));
}
if ($point[1] == $resultat_mE5 ) {
$difference1 = (($_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']) -($_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile']));
}
if ($point[1] == $resultat_md6 )
{
$difference1 = (($_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile']) - ($_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur']));
}
if ($point[1] == $resultat_mE6 )
{
$difference1 = (($_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur']) - ($_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile']));
}	
?>
<?php
if ($point[2] == $resultat_md5 )
{
$difference2 = (($_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile']) -( $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']));
}
if ($point[2] == $resultat_mE5 ) {
$difference2 = (($_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']) -($_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile']));
}
if ($point[2] == $resultat_md6 )
{
$difference2 = (($_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile']) - ($_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur']));
}
if ($point[2] == $resultat_mE6 )
{
$difference2 = (($_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur']) - ($_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile']));
}	
?>
<?php
if ($point[3] == $resultat_md5 )
{
$difference3 = (($_POST['premier_match_domicile'] + $_POST['troisieme_match_domicile'] + $_POST['cinquieme_match_domicile']) -( $_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']));
}
if ($point[3] == $resultat_mE5 ) {
$difference3 = (($_POST['deuxieme_match_exterieur'] + $_POST['quatrieme_match_exterieur'] + $_POST['cinquieme_match_exterieur']) -($_POST['deuxieme_match_domicile'] + $_POST['quatrieme_match_domicile'] + $_POST['cinquieme_match_domicile']));
}
if ($point[3] == $resultat_md6 )
{
$difference3 = (($_POST['premier_match_exterieur'] + $_POST['quatrieme_match_domicile'] + $_POST['sixieme_match_domicile']) - ($_POST['premier_match_domicile'] + $_POST['quatrieme_match_exterieur'] + $_POST['sixieme_match_exterieur']));
}
if ($point[3] == $resultat_mE6 )
{
$difference3 = (($_POST['deuxieme_match_domicile'] + $_POST['troisieme_match_exterieur'] + $_POST['sixieme_match_exterieur']) - ($_POST['deuxieme_match_exterieur'] + $_POST['troisieme_match_domicile'] + $_POST['sixieme_match_domicile']));
}	
?>
<br><br><br>
<table class="clas1">
<tr>
<th>Groupe A</th>
</tr>
<tr class="cl1">
<td></td>
<td><strong title="Match Joue">MJ</strong></td>
<td><strong title="Match Gagne">MG</strong></td>
<td><strong title="Match Nul">MN</strong></td>
<td><strong title="Match Perdu">MP</strong></td>
<td><strong title="But Pour">BP</strong></td>
<td><strong title="But Contre">BC</strong></td>
<td><strong title="Difference entre but marque et but encaisse">DIF</strong></td>
<td><strong title="">Point</strong></td>
</tr>
<td>  1 - <?=$equipe3 ?> </td>
<td><?php echo $match_jouerD5 ?></td>
<td> <?= $match_gagner3 ?> </td>
<td> <?= $match_nul3 ?> </td>
<td>  <?= $match_perdu3 ?> </td>
<td> <?=$but_pour3 ?> </td>
<td> <?=$but_contre3 ?> </td>
<td> <?= $difference3 ?> </td>
<td><?php echo $point[3] ?></td>
</tr>
<td> 2 - <?=$equipe2 ?></td>
<td> <?php echo $match_jouerD5 ?></td>
<td> <?= $match_gagner2 ?> </td>
<td> <?= $match_nul2 ?> </td>
<td>  <?= $match_perdu2 ?> </td>
<td> <?=$but_pour2 ?> </td>
<td> <?=$but_contre2 ?> </td>
<td> <?= $difference2 ?> </td>
<td><?php echo $point[2] ?></td>
</tr>
<td> 3 - <?=$equipe1 ?></td>
<td> <?php echo $match_jouerD5 ?></td>
<td> <?= $match_gagner1 ?> </td>
<td> <?= $match_nul1 ?> </td>
<td> <?= $match_perdu1 ?> </td>
<td> <?=$but_pour1 ?> </td>
<td> <?=$but_contre1 ?> </td>
<td> <?= $difference1 ?> </td>
<td><?php echo $point[1] ?></td>
</tr>
<td> 4 - <?=$equipe0 ?></td>
<td ><?php echo $match_jouerD5 ?></td>
<td><?=$match_gagner0 ?></td>
<td><?=$match_nul0 ?></td>
<td><?= $match_perdu0 ?></td>
<td> <?=$but_pour0 ?> </td>
<td> <?=$but_contre0 ?></td>
<td> <?= $difference0 ?> </td>
<td><?php echo $point[0] ?></td>
</tr>
</table><br><br>
 
 
 <!-- Classement du groupe B -->
 
<?php 
if (isset($_POST['septieme_match_domicile']) AND isset($_POST['septieme_match_exterieur'])){
if ($_POST['septieme_match_domicile'] > $_POST['septieme_match_exterieur']) {
	$resultatB_md = 3;
	$resultatB_mE = 0;
	$matchB_jouerD1 = 1;
	$matchB_jouerE1 = 1;
}
elseif ($_POST['septieme_match_domicile'] == $_POST['septieme_match_exterieur']) {
	$resultatB_md = 1;
	$resultatB_mE = 1;
	$matchB_jouerD1 = 1;
	$matchB_jouerE1 = 1;
}
else {
	$resultatB_md = 0;
	$resultatB_mE = 3;
	$matchB_jouerD1 = 1;
	$matchB_jouerE1 = 1;
}
}
?>
 
<?php 
if (isset($_POST['huitieme_match_domicile']) AND isset($_POST['huitieme_match_exterieur'])){
if ($_POST['huitieme_match_domicile'] > $_POST['huitieme_match_exterieur']) {
	$resultatB_md2 = 3;
	$resultatB_mE2 = 0;
	$matchB_jouerD2 = 1;
	$matchB_jouerE2 = 1;
}
elseif ($_POST['deuxieme_match_domicile'] == $_POST['deuxieme_match_exterieur']) {
	$resultatB_md2 = 1;
	$resultatB_mE2 = 1;
	$matchB_jouerD2 = 1;
	$matchB_jouerE2 = 1;
}
else {
	$resultatB_md2 = 0;
	$resultatB_mE2 = 3;
	$matchB_jouerD2 = 1;
	$matchB_jouerE2 = 1;
}
}
?>
<?php 
if (isset($_POST['neuvieme_match_domicile']) AND isset($_POST['neuvieme_match_exterieur'])){
if ($_POST['neuvieme_match_domicile'] > $_POST['neuvieme_match_exterieur']) {
	$resultatB_md3 = $resultatB_md + 3;
	$resultatB_mE3 = $resultatB_md2 + 0;
	$matchB_jouerD3 = $matchB_jouerD1 + 1;
	$matchB_jouerE3 = $matchB_jouerD2 + 1;
}
elseif ($_POST['neuvieme_match_domicile'] == $_POST['neuvieme_match_exterieur']) {
	$resultatB_md3 = $resultatB_md + 1;
	$resultatB_mE3 = $resultatB_md2 + 1;
	$matchB_jouerD3 = $matchB_jouerD1 + 1;
	$matchB_jouerE3 = $matchB_jouerD2 + 1;
}
else {
	$resultatB_md3 = $resultatB_md + 0;
	$resultatB_mE3 = $resultatB_md2 + 3;
	$matchB_jouerD3 = $matchB_jouerD1 + 1;
	$matchB_jouerE3 = $matchB_jouerD2 + 1;
}
 
}
?>


<?php 
if (isset($_POST['dixieme_match_domicile']) AND isset($_POST['dixieme_match_exterieur'])){
if ($_POST['dixieme_match_domicile'] > $_POST['dixieme_match_exterieur']) {
	$resultatB_md4 = $resultatB_mE + 3;
	$resultatB_mE4 = $resultatB_mE2 + 0;
	$matchB_jouerD4 = $matchB_jouerE1 + 1;
	$matchB_jouerE4 = $resultatB_mE2 + 1;
}
elseif ($_POST['dixieme_match_domicile'] == $_POST['dixieme_match_exterieur']) {
	$resultatB_md4 = $resultatB_mE + 1;
	$resultatB_mE4 = $resultatB_mE2 + 1;
	$matchB_jouerD4 = $matchB_jouerE1 + 1;
	$matchB_jouerE4 = $resultatB_mE2 + 1;
}
else {
	$resultatB_md4 = $resultatB_mE + 0;
	$resultatB_mE4 = $resultatB_mE2 + 3;
	$matchB_jouerD4 = $matchB_jouerE1 + 1;
	$matchB_jouerE4 = $resultatB_mE2 + 1;
}
 
}
?>

<?php 
if (isset($_POST['onzieme_match_domicile']) AND isset($_POST['onzieme_match_exterieur'])){
if ($_POST['onzieme_match_domicile'] > $_POST['onzieme_match_exterieur']) {
	$resultatB_md5 = $resultatB_md3 + 3;
	$resultatB_mE5 = $resultatB_mE4 + 0;
	$matchB_jouerD5 = $matchB_jouerD3 + 1;
	$matchB_jouerE5 = $matchB_jouerE4 + 1;
}
elseif ($_POST['onzieme_match_domicile'] == $_POST['onzieme_match_exterieur']) {
	$resultatB_md5 = $resultatB_md3 + 1;
	$resultatB_mE5 = $resultatB_mE4 + 1;
	$matchB_jouerD5 = $matchB_jouerD3 + 1;
	$matchB_jouerE5 = $matchB_jouerE4 + 1;
}
else {
	$resultatB_md5 = $resultatB_md3 + 0;
	$resultatB_mE5 = $resultatB_mE4 + 3;
	$matchB_jouerD5 = $matchB_jouerD3 + 1;
	$matchB_jouerE5 = $matchB_jouerE4 + 1;
}
 
}
?>

<?php 
if (isset($_POST['douzieme_match_domicile']) AND isset($_POST['douzieme_match_exterieur'])){
if ($_POST['douzieme_match_domicile'] > $_POST['douzieme_match_exterieur']) {
	$resultatB_md6 = $resultatB_md4 + 3;
	$resultatB_mE6 = $resultatB_mE3 + 0;
	$matchB_jouerD6 = $matchB_jouerD4 + 1;
	$matchB_jouerE6 = $matchB_jouerE3 + 1;
}
elseif ($_POST['douzieme_match_domicile'] == $_POST['douzieme_match_exterieur']) {
	$resultatB_md6 = $resultatB_md4 + 1;
	$resultatB_mE6 = $resultatB_mE3 + 1;
	$matchB_jouerD6 = $matchB_jouerD4 + 1;
	$matchB_jouerE6 = $matchB_jouerE3 + 1;
}
else {
	$resultatB_md6 = $resultatB_md4 + 0;
	$resultatB_mE6 = $resultatB_mE3 + 3;
	$matchB_jouerD6 = $matchB_jouerD4 + 1;
	$matchB_jouerE6 = $matchB_jouerE3 + 1;
}
 
 
}
?>

<?php 
$pointB = [$resultatB_md6, $resultatB_mE6, $resultatB_md5, $resultatB_mE5];
sort($pointB);

?>
<?php

	
?>
<?php
switch ($pointB[0])
{ 
case 9: 
$matchB_gagner0 = 3;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 0 ;
break;

case 7:
$matchB_gagner0 = 2;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 1 ;
break;

case 6:     
$matchB_gagner0 = 2;
$matchB_perdu0 = 1 ;
$matchB_nul0 = 0 ;
break;

case 5:
$matchB_gagner0 = 1;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 2 ;
break;

case 4:
$matchB_gagner0 = 1;
$matchB_perdu0 = 1 ;
$matchB_nul0 = 1 ; 
break;

case 3:
if ($_POST['septieme_match_domicile'] ==  $_POST['septieme_match_exterieur'] AND
 $_POST['neuvieme_match_domicile'] == $_POST['neuvieme_match_exterieur'] AND $_POST['onzieme_match_domicile'] == $_POST['onzieme_match_exterieur'] ):
$matchB_gagner0 = 0;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 3 ;
else :
$matchB_gagner0 = 1;
$matchB_perdu0 = 2 ;
$matchB_nul0 = 0 ;
 endif;
break;

case 3:
if ($_POST['septieme_match_exterieur'] ==  $_POST['septieme_match_domicile'] AND
 $_POST['dixieme_match_domicile'] == $_POST['dixieme_match_exterieur'] AND $_POST['douzieme_match_domicile'] == $_POST['douzieme_match_exterieur'] ):
$matchB_gagner0 = 0;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 3 ;
else :
$matchB_gagner0 = 1;
$matchB_perdu0 = 2 ;
$matchB_nul0 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_domicile'] ==  $_POST['huitieme_match_exterieur'] AND
 $_POST['neuvieme_match_exterieur'] == $_POST['neuvieme_match_domicile'] AND $_POST['douzieme_match_exterieur'] == $_POST['douzieme_match_domicile'] ):
$matchB_gagner0 = 0;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 3 ;
else :
$matchB_gagner0 = 1;
$matchB_perdu0 = 2 ;
$matchB_nul0 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_exterieur'] ==  $_POST['huitieme_match_domicile'] AND
 $_POST['dixieme_match_exterieur'] == $_POST['dixieme_match_domicile'] AND $_POST['onzieme_match_exterieur'] == $_POST['onzieme_match_domicile'] ) :
$matchB_gagner0 = 0;
$matchB_perdu0 = 0 ;
$matchB_nul0 = 3 ;
else :
$matchB_gagner0 = 1;
$matchB_perdu0 = 2 ;
$matchB_nul0 = 0 ;
 endif;
break;

case 2:
$matchB_gagner0 = 0;
$matchB_perdu0 = 1 ;
$matchB_nul0 = 2 ;
break;

case 1:
$matchB_gagner0 = 0;
$matchB_perdu0 = 2;
$matchB_nul0 = 1 ;
break;

case 0:

$matchB_gagner0 = 0;
$matchB_perdu0 = 3 ;
$matchB_nul0 = 0 ;
break;



}
?>

<?php
switch ($pointB[1])
{ 
case 9: 
$matchB_gagner1 = 3;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 0 ;
break;

case 7:
$matchB_gagner1 = 2;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 1 ;
break;

case 6:     
$matchB_gagner1 = 2;
$matchB_perdu1 = 1 ;
$matchB_nul1 = 0 ;
break;

case 5:
$matchB_gagner1 = 1;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 2 ;
break;

case 4:
$matchB_gagner1 = 1;
$matchB_perdu1 = 1 ;
$matchB_nul1 = 1 ; 
break;

case 3:
if ($_POST['septieme_match_domicile'] ==  $_POST['septieme_match_exterieur'] AND
 $_POST['neuvieme_match_domicile'] == $_POST['neuvieme_match_exterieur'] AND $_POST['onzieme_match_domicile'] == $_POST['onzieme_match_exterieur'] ):
$matchB_gagner1 = 0;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 3 ;
else :
$matchB_gagner1 = 1;
$matchB_perdu1 = 2 ;
$matchB_nul1 = 0 ;
 endif;
break;

case 3:
if ($_POST['septieme_match_exterieur'] ==  $_POST['septieme_match_domicile'] AND
 $_POST['dixieme_match_domicile'] == $_POST['dixieme_match_exterieur'] AND $_POST['douzieme_match_domicile'] == $_POST['douzieme_match_exterieur'] ):
$matchB_gagner1 = 0;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 3 ;
else :
$matchB_gagner1 = 1;
$matchB_perdu1 = 2 ;
$matchB_nul1 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_domicile'] ==  $_POST['huitieme_match_exterieur'] AND
 $_POST['neuvieme_match_exterieur'] == $_POST['neuvieme_match_domicile'] AND $_POST['douzieme_match_exterieur'] == $_POST['douzieme_match_domicile'] ):
$matchB_gagner1 = 0;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 3 ;
else :
$matchB_gagner1 = 1;
$matchB_perdu1 = 2 ;
$matchB_nul1 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_exterieur'] ==  $_POST['huitieme_match_domicile'] AND
 $_POST['dixieme_match_exterieur'] == $_POST['dixieme_match_domicile'] AND $_POST['onzieme_match_exterieur'] == $_POST['onzieme_match_domicile'] ) :
$matchB_gagner1 = 0;
$matchB_perdu1 = 0 ;
$matchB_nul1 = 3 ;
else :
$matchB_gagner1 = 1;
$matchB_perdu1 = 2 ;
$matchB_nul1 = 0 ;
 endif;
break;

case 2:
$matchB_gagner1 = 0;
$matchB_perdu1 = 1 ;
$matchB_nul1 = 2 ;
break;

case 1:
$matchB_gagner1 = 0;
$matchB_perdu1 = 2;
$matchB_nul1 = 1 ;
break;

case 0 :
$matchB_gagner1 = 0;
$matchB_perdu1 = 3 ;
$matchB_nul1 = 0 ;
break;

default:

}
?>

<?php
switch ($pointB[2])
{ 
case 9: 
$matchB_gagner2 = 3;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 0 ;
break;

case 7:
$matchB_gagner2 = 2;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 1 ;
break;

case 6:     
$matchB_gagner2 = 2;
$matchB_perdu2 = 1 ;
$matchB_nul2 = 0 ;
break;

case 5:
$matchB_gagner2 = 1;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 2 ;
break;

case 4:
$matchB_gagner2 = 1;
$matchB_perdu2 = 1 ;
$matchB_nul2 = 1 ; 
break;

case 3:
if ($_POST['septieme_match_domicile'] ==  $_POST['septieme_match_exterieur'] AND
 $_POST['neuvieme_match_domicile'] == $_POST['neuvieme_match_exterieur'] AND $_POST['onzieme_match_domicile'] == $_POST['onzieme_match_exterieur'] ):
$matchB_gagner2 = 0;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 3 ;
else :
$matchB_gagner2 = 1;
$matchB_perdu2 = 2 ;
$matchB_nul2 = 0 ;
 endif;
break;

case 3:
if ($_POST['septieme_match_exterieur'] ==  $_POST['septieme_match_domicile'] AND
 $_POST['dixieme_match_domicile'] == $_POST['dixieme_match_exterieur'] AND $_POST['douzieme_match_domicile'] == $_POST['douzieme_match_exterieur'] ):
$matchB_gagner2 = 0;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 3 ;
else :
$matchB_gagner2 = 1;
$matchB_perdu2 = 2 ;
$matchB_nul2 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_domicile'] ==  $_POST['huitieme_match_exterieur'] AND
 $_POST['neuvieme_match_exterieur'] == $_POST['neuvieme_match_domicile'] AND $_POST['douzieme_match_exterieur'] == $_POST['douzieme_match_domicile'] ):
$matchB_gagner2 = 0;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 3 ;
else :
$matchB_gagner2 = 1;
$matchB_perdu2 = 2 ;
$matchB_nul2 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_exterieur'] ==  $_POST['huitieme_match_domicile'] AND
 $_POST['dixieme_match_exterieur'] == $_POST['dixieme_match_domicile'] AND $_POST['onzieme_match_exterieur'] == $_POST['onzieme_match_domicile'] ) :
$matchB_gagner2 = 0;
$matchB_perdu2 = 0 ;
$matchB_nul2 = 3 ;
else :
$matchB_gagner2 = 1;
$matchB_perdu2 = 2 ;
$matchB_nul2 = 0 ;
 endif;
break;

case 2:
$matchB_gagner2 = 0;
$matchB_perdu2 = 1 ;
$matchB_nul2 = 2 ;
break;

case 1:
$matchB_gagner2 = 0;
$matchB_perdu2 = 2;
$matchB_nul2 = 1 ;
break;

case 0 :
$matchB_gagner2 = 0;
$matchB_perdu2 = 3 ;
$matchB_nul2 = 0 ;
break;

default:

}
?>
<?php
switch ($pointB[3])
{ 
case 9: 
$matchB_gagner3 = 3;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 0 ;
break;

case 7:
$matchB_gagner3 = 2;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 1 ;
break;

case 6:     
$matchB_gagner3 = 2;
$matchB_perdu3 = 1 ;
$matchB_nul3 = 0 ;
break;

case 5:
$matchB_gagner3 = 1;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 2 ;
break;

case 4:
$matchB_gagner3 = 1;
$matchB_perdu3 = 1 ;
$matchB_nul3 = 1 ; 
break;

case 3:
if ($_POST['septieme_match_domicile'] ==  $_POST['septieme_match_exterieur'] AND
 $_POST['neuvieme_match_domicile'] == $_POST['neuvieme_match_exterieur'] AND $_POST['onzieme_match_domicile'] == $_POST['onzieme_match_exterieur'] ):
$matchB_gagner3 = 0;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 3 ;
else :
$matchB_gagner3 = 1;
$matchB_perdu3 = 2 ;
$matchB_nul3 = 0 ;
 endif;
break;

case 3:
if ($_POST['septieme_match_exterieur'] ==  $_POST['septieme_match_domicile'] AND
 $_POST['dixieme_match_domicile'] == $_POST['dixieme_match_exterieur'] AND $_POST['douzieme_match_domicile'] == $_POST['douzieme_match_exterieur'] ):
$matchB_gagner3 = 0;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 3 ;
else :
$matchB_gagner3 = 1;
$matchB_perdu3 = 2 ;
$matchB_nul3 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_domicile'] ==  $_POST['huitieme_match_exterieur'] AND
 $_POST['neuvieme_match_exterieur'] == $_POST['neuvieme_match_domicile'] AND $_POST['douzieme_match_exterieur'] == $_POST['douzieme_match_domicile'] ):
$matchB_gagner3 = 0;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 3 ;
else :
$matchB_gagner3 = 1;
$matchB_perdu3 = 2 ;
$matchB_nul3 = 0 ;
 endif;
break;

case 3:
if ($_POST['huitieme_match_exterieur'] ==  $_POST['huitieme_match_domicile'] AND
 $_POST['dixieme_match_exterieur'] == $_POST['dixieme_match_domicile'] AND $_POST['onzieme_match_exterieur'] == $_POST['onzieme_match_domicile'] ) :
$matchB_gagner3 = 0;
$matchB_perdu3 = 0 ;
$matchB_nul3 = 3 ;
else :
$matchB_gagner3 = 1;
$matchB_perdu3 = 2 ;
$matchB_nul3 = 0 ;
 endif;
break;

case 2:
$matchB_gagner3 = 0;
$matchB_perdu3 = 1 ;
$matchB_nul3 = 2 ;
break;

case 1:
$matchB_gagner3 = 0;
$matchB_perdu3 = 2;
$matchB_nul3 = 1 ;
break;

case 0 :
$matchB_gagner3 = 0;
$matchB_perdu3 = 3 ;
$matchB_nul3 = 0 ;
break;

default:

}
?>

<?php
if ($pointB[0] == $resultatB_md5 )
{
$butB_pour0 = $_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[0] == $resultatB_mE5 ) {
$butB_pour0 = $_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[0] == $resultatB_md6 )
{
$butB_pour0 = $_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}
if ($pointB[0] == $resultatB_mE6 )
{
$butB_pour0 = $_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}	
?>
<?php
if ($pointB[1] == $resultatB_md5 )
{
$butB_pour1 = $_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[1] == $resultatB_mE5 ) {
$butB_pour1 = $_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[1] == $resultatB_md6 )
{
$butB_pour1 = $_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}
if ($pointB[1] == $resultatB_mE6 )
{
$butB_pour1 = $_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}	
?>
<?php
if ($pointB[2] == $resultatB_md5 )
{
$butB_pour2 = $_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[2] == $resultatB_mE5 ) {
$butB_pour2 = $_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[2] == $resultatB_md6 )
{
$butB_pour2 = $_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}
if ($pointB[2] == $resultatB_mE6 )
{
$butB_pour2 = $_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}	
?>
<?php
if ($pointB[3] == $resultatB_md5 )
{
$butB_pour3 = $_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[3] == $resultatB_mE5 ) {
$butB_pour3 = $_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[3] == $resultatB_md6 )
{
$butB_pour3 = $_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}
if ($pointB[3] == $resultatB_mE6 )
{
$butB_pour3 = $_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}	
?>
<!-- But contre les equipes -->

<?php
if ($pointB[0] == $resultatB_md5 )
{
$butB_contre0 = $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[0] == $resultatB_mE5 ) {
$butB_contre0 = $_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[0] == $resultatB_md6 )
{
$butB_contre0 = $_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}
if ($pointB[0] == $resultatB_mE6 )
{
$butB_contre0 = $_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}	
?>
<?php
if ($pointB[1] == $resultatB_md5 )
{
$butB_contre1 = $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[1] == $resultatB_mE5 ) {
$butB_contre1 = $_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[1] == $resultatB_md6 )
{
$butB_contre1 = $_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}
if ($pointB[1] == $resultatB_mE6 )
{
$butB_contre1 = $_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}	
?>
<?php
if ($pointB[2] == $resultatB_md5 )
{
$butB_contre2 = $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[2] == $resultatB_mE5 ) {
$butB_contre2 = $_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[2] == $resultatB_md6 )
{
$butB_contre2 = $_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}
if ($pointB[2] == $resultatB_mE6 )
{
$butB_contre2 = $_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}	
?>
<?php
if ($pointB[3] == $resultatB_md5 )
{
$butB_contre3 = $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur'];
}
if ($pointB[3] == $resultatB_mE5 ) {
$butB_contre3 = $_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile'];
}
if ($pointB[3] == $resultatB_md6 )
{
$butB_contre3 = $_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur'];
}
if ($pointB[3] == $resultatB_mE6 )
{
$butB_contre3 = $_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile'];
}	
?>

<!--Difference entre but marque et encaisse -->
<?php
if ($pointB[0] == $resultatB_md5 )
{
$differenceB0 = (($_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile']) -( $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur']));
}
if ($pointB[0] == $resultatB_mE5 ) {
$differenceB0 = (($_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur']) -($_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile']));
}
if ($pointB[0] == $resultatB_md6 )
{
$differenceB0 = (($_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile']) - ($_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur']));
}
if ($pointB[0] == $resultatB_mE6 )
{
$differenceB0 = (($_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur']) - ($_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile']));
}	
?>
<?php
if ($pointB[1] == $resultatB_md5 )
{
$differenceB1 = (($_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile']) -( $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur']));
}
if ($pointB[1] == $resultatB_mE5 ) {
$differenceB1 = (($_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur']) -($_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile']));
}
if ($pointB[1] == $resultatB_md6 )
{
$differenceB1 = (($_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile']) - ($_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur']));
}
if ($pointB[1] == $resultatB_mE6 )
{
$differenceB1 = (($_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur']) - ($_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile']));
}	
?>
<?php
if ($pointB[2] == $resultatB_md5 )
{
$differenceB2 = (($_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile']) -( $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur']));
}
if ($pointB[2] == $resultatB_mE5 ) {
$differenceB2 = (($_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur']) -($_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile']));
}
if ($pointB[2] == $resultatB_md6 )
{
$differenceB2 = (($_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile']) - ($_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur']));
}
if ($pointB[2] == $resultatB_mE6 )
{
$differenceB2 = (($_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur']) - ($_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile']));
}	
?>
<?php
if ($pointB[3] == $resultatB_md5 )
{
$differenceB3 = (($_POST['septieme_match_domicile'] + $_POST['neuvieme_match_domicile'] + $_POST['onzieme_match_domicile']) -( $_POST['septieme_match_exterieur'] + $_POST['neuvieme_match_exterieur'] + $_POST['onzieme_match_exterieur']));
}
if ($pointB[3] == $resultatB_mE5 ) {
$differenceB3 = (($_POST['huitieme_match_exterieur'] + $_POST['dixieme_match_exterieur'] + $_POST['onzieme_match_exterieur']) -($_POST['huitieme_match_domicile'] + $_POST['dixieme_match_domicile'] + $_POST['onzieme_match_domicile']));
}
if ($pointB[3] == $resultatB_md6 )
{
$differenceB3 = (($_POST['septieme_match_exterieur'] + $_POST['dixieme_match_domicile'] + $_POST['douzieme_match_domicile']) - ($_POST['septieme_match_domicile'] + $_POST['dixieme_match_exterieur'] + $_POST['douzieme_match_exterieur']));
}
if ($pointB[3] == $resultatB_mE6 )
{
$differenceB3 = (($_POST['huitieme_match_domicile'] + $_POST['neuvieme_match_exterieur'] + $_POST['douzieme_match_exterieur']) - ($_POST['huitieme_match_exterieur'] + $_POST['neuvieme_match_domicile'] + $_POST['douzieme_match_domicile']));
}	
?>

<?php
if ($pointB[0]==$resultatB_md6)
{
	$equipeB0 = $tablo[1];
}
elseif ($pointB[0]== $resultatB_mE6)
{
	$equipeB0 = $tablo[2];
}
elseif ($pointB[0]== $resultatB_md5)
{
	$equipeB0 = $tablo[0];
}
else
{
	$equipeB0 = $tablo[3];
}
?>
<?php
if ($pointB[1]==$resultatB_md6)
{
	$equipeB1 = $tablo[1];
}
elseif ($pointB[1]== $resultatB_mE6)
{
	$equipeB1 = $tablo[2];
}
elseif ($pointB[1]== $resultatB_md5)
{
	$equipeB1 = $tablo[0];
}
else
{
	$equipeB1 = $tablo[3];
}
?>
<?php
if ($pointB[2]==$resultatB_md6)
{
	$equipeB2 = $tablo[1];
}
elseif ($pointB[2]== $resultatB_mE6)
{
	$equipeB2 = $tablo[2];
}
elseif ($pointB[2]== $resultatB_md5)
{
	$equipeB2 = $tablo[0];
}
else
{
	$equipeB2 = $tablo[3];
}
?>
<?php
if ($pointB[3]==$resultatB_md6)
{
	$equipeB3 = $tablo[1];
}
elseif ($pointB[3]== $resultatB_mE6)
{
	$equipeB3 = $tablo[2];
}
elseif ($pointB[3]== $resultatB_md5)
{
	$equipeB3 = $tablo[0];
}
else
{
	$equipeB3 = $tablo[3];
}
?>


<table class="clas1">
<tr>
<th>Groupe B</th>
</tr>
<tr class="cl1">
<td></td>
<td><strong title="Match Joue">MJ</strong></td>
<td><strong title="Match Gagne">MG</strong></td>
<td><strong title="Match Nul">MN</strong></td>
<td><strong title="Match Perdu">MP</strong></td>
<td><strong title="But Pour">BP</strong></td>
<td><strong title="But Contre">BC</strong></td>
<td><strong title="Difference entre but marque et but encaisse">DIF</strong></td>
<td><strong title="">Point</strong></td>
</tr>
<td> 1 - <?=$equipeB3 ?></td>
<td><?php echo $matchB_jouerD5 ?></td>
<td> <?= $matchB_gagner3 ?> </td>
<td> <?= $matchB_nul3 ?> </td>
<td>  <?= $matchB_perdu3 ?> </td>
<td> <?=$butB_pour3 ?> </td>
<td> <?=$butB_contre3 ?> </td>
<td> <?= $differenceB3 ?> </td>
<td><?php echo $pointB[3] ?></td>
</tr>
<td> 2 - <?=$equipeB2 ?></td>
<td> <?php echo $matchB_jouerD5 ?></td>
<td> <?= $matchB_gagner2 ?> </td>
<td> <?= $matchB_nul2 ?> </td>
<td>  <?= $matchB_perdu2 ?> </td>
<td> <?=$butB_pour2 ?> </td>
<td> <?=$butB_contre2 ?> </td>
<td> <?= $differenceB2 ?> </td>
<td><?php echo $pointB[2] ?></td>
</tr>
<td> 3 - <?=$equipeB1 ?></td>
<td> <?php echo $matchB_jouerD5 ?></td>
<td> <?= $matchB_gagner1 ?> </td>
<td> <?= $matchB_nul1 ?> </td>
<td> <?= $matchB_perdu1 ?> </td>
<td> <?=$butB_pour1 ?> </td>
<td> <?=$butB_contre1 ?> </td>
<td> <?= $differenceB1 ?> </td>
<td><?php echo $pointB[1] ?></td>
</tr>
<td> 4 - <?=$equipeB0 ?></td>
<td ><?php echo $matchB_jouerD5 ?></td>
<td><?=$matchB_gagner0 ?></td>
<td><?=$matchB_nul0 ?></td>
<td><?= $matchB_perdu0 ?></td>
<td> <?=$butB_pour0 ?> </td>
<td> <?=$butB_contre0 ?></td>
<td> <?= $differenceB0 ?> </td>
<td><?php echo $pointB[0] ?></td>
</tr>
</table>
<?php
if ($point[2]==$resultat_md6)
{
	$demi_final2 = $tab[1];
}
elseif ($point[2]== $resultat_mE6)
{
	$demi_final2 = $tab[2];
}
elseif ($point[2]== $resultat_md5)
{
	$demi_final2 = $tab[0];
}
else
{
	$demi_final2 = $tab[3];
}
?>
<?php
if ($point[3]==$resultat_md6)
{
	$demi_final3 = $tab[1];
}
elseif ($point[3]== $resultat_mE6)
{
	$demi_final3 = $tab[2];
}
elseif ($point[3]== $resultat_md5)
{
	$demi_final3 = $tab[0];
}
else
{
	$demi_final3 = $tab[3];
}
?>
<?php
if ($pointB[2]==$resultatB_md6)
{
	$demi_finalB2 = $tablo[1];
}
elseif ($pointB[2]== $resultatB_mE6)
{
	$demi_finalB2 = $tablo[2];
}
elseif ($pointB[2]== $resultatB_md5)
{
	$demi_finalB2 = $tablo[0];
}
else
{
	$demi_finalB2 = $tablo[3];
}
?>
<?php
if ($pointB[3]==$resultatB_md6)
{
	$demi_finalB3 = $tablo[1];
}
elseif ($pointB[3]== $resultatB_mE6)
{
	$demi_finalB3 = $tablo[2];
}
elseif ($pointB[3]== $resultatB_md5)
{
	$demi_finalB3 = $tablo[0];
}
else
{
	$demi_finalB3 = $tablo[3];
}
?>
<table class="demi">
<tr>
<th> Demi-finale </th>
<th> Affiche </th>
</tr>
<tr>
<td >Match 13 </td>
<td>
<form action ="finale.php" method = "POST" class="indemi">
<label for ="td"><?=$demi_final3 ?></label>
<input ="number" name="treizieme_match_domicile" id="td" size="1" maxlength="2" value = "<?php if (isset($_POST['treizieme_match_domicile'])){ echo $_POST['treizieme_match_domicile'];}?> " required />  
VS 
<input ="number" name="treizieme_match_exterieur" id="2td" size="1" maxlength="2" value = "<?php if (isset($_POST['treizieme_match_exterieur'])){ echo $_POST['treizieme_match_exterieur'];}?>" required /> 
<label for ="2td"><?=$demi_finalB2;?></label> 
</td>
</tr>

<tr>
	
	<td >Match 14 </td>
<td>
<label for ="3td"><?=$demi_finalB3?></label>
<input ="number"  name="quatorzieme_match_domicile" id="3td" size="1" maxlength="2" value = "<?php if (isset($_POST['quatorzieme_match_domicile'])){ echo $_POST['quatorzieme_match_domicile'];}?>" required />  
VS 
<input ="number" name="quatorzieme_match_exterieur" id="4td" size="1" maxlength="2" value = "<?php if (isset($_POST['quatorzieme_match_exterieur'])){ echo $_POST['quatorzieme_match_exterieur'];}?>" required /> 
<label for ="4td"><?=$demi_final2;?></label><br><br> 
<input type="submit" value = "Envoyer"/> 
</form>

</td>

</tr>
</table>

