<?php 
include 'header.php';
?>
<?php
      $tabl = [
            '1e tete de serie(TDS)',
            '2e tete de serie(TDS)',
            '3e tete de serie(TDS)',
            '4e tete de serie(TDS)'
      ];
      $tab = [
            'Bresil',
            'France',
            'Espagne',
            'Portugal'
    ];

     $tablo = [
            'Argentine',
            'Italie',
            'Allemagne',
            'Haiti'
      ]; 

srand((float)microtime()*1000000); //generateur
shuffle($tab);//tirage groupeA
shuffle($tablo);//tirage groupeB
?>
<?php 
$demi_final3 = $tab[0];
$demi_finalB2 =$tablo[0];
$demi_finalB3 = $tablo[1];
$demi_final2 = $tab[1];
?>
<?php 
if (isset($_POST['treizieme_match_domicile']) AND isset($_POST['treizieme_match_exterieur']))
{
	if (($_POST['treizieme_match_domicile'] > $_POST['treizieme_match_exterieur'] OR $_POST['treizieme_match_domicile'] == $_POST['treizieme_match_exterieur'])) :
		$equipe_final1 = $demi_final3;
		$equipe_petit_final1 = $demi_finalB2;
		else:
		$equipe_final1 = $demi_finalB2;
		$equipe_petit_final1 =$demi_final3;
		endif;
}

if (isset($_POST['quatorzieme_match_domicile']) AND isset($_POST['quatorzieme_match_exterieur']))
{
	if (($_POST['quatorzieme_match_domicile'] > $_POST['quatorzieme_match_exterieur'] OR $_POST['quatorzieme_match_domicile'] == $_POST['quatorzieme_match_exterieur'])) :
		$equipe_final2 = $demi_finalB3;
		$equipe_petit_final2 = $demi_final2;
		else:
		$equipe_final2 = $demi_final2;
		$equipe_petit_final2 =$demi_finalB3;
		endif;
	
}
?>

<table class="demi">
<tr class="cl1">
<th> Troisieme place </th>
<th> Affiche </th>
</tr>
<tr>
<td > Match 15 </td>
<td>
<form action ="finale.php" method = "POST" class="indemi">
<label for ="td"><?= $equipe_petit_final1 ?></label> 
<input ="number" name="quinze_match_domicile" id="td" size="1" maxlength="2" value = "<?php if (isset($_POST['quinze_match_domicile'])){ echo $_POST['quinze_match_domicile'];}?> " required /> 
 VS 
 <input ="number" name="quinze_match_exterieur" id="2td" size="1" maxlength="2" value = "<?php if (isset($_POST['quinze_match_exterieur'])){ echo $_POST['quinze_match_exterieur'];}?>" required /> 
<label for ="2td"><?=$equipe_petit_final2;?></label> 
</td>
</tr><br>
<tr class="fin">
<th> Finale </th>
<th> Affiche </th>
</tr>
<tr>
<td >Match 16 </td>
<td>
<label for ="3td"><?=$equipe_final1?></label> 
<input ="number" name="seize_match_domicile" id="3td" size="1" maxlength="2" value = "<?php if (isset($_POST['seize_match_domicile'])){ echo $_POST['seize_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="seize_match_exterieur" id="4td" size="1" maxlength="2" value = "<?php if (isset($_POST['seize_match_exterieur'])){ echo $_POST['seize_match_exterieur'];}?>" required /> 
<label for ="4td"><?=$equipe_final2;?></label><br><br>
</form>
</td>
</tr>
</table>