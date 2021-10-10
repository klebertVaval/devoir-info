<?php include 'header.php' ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" /> 
<title>Titre</title>
</head>
</body>
<div class="tab">
            <h2>Liste des Equipes</h2> 
<!-- table presentant les equipes -->
            <table>
                <tr class="tab1">
                    <th>Lot# 1</th>
                    <th>Lot# 2</th>
                    <th>Lot# 3</th>
                    <th>Lot# 4</th>
                </tr>

                <tr>
                    <td>Bresil <img src="\test\imaj\brazil.svg"></td>
                    <td>France <img src="\test\imaj\france.svg"></td>
                    <td>Espagne <img src="\test\imaj\spain.svg"></td>
                    <td>Portugal <img src="\test\imaj\portugal.svg"></td>
                </tr>
                
                <tr>
                    <td>Argentine <img src="\test\imaj\argentina.svg"></td>
                    <td>Italie <img src="\test\imaj\italy.svg"></td>
                    <td>Allemagne <img src="\test\imaj\germany.svg"></td>
                    <td>Haiti <img src="\test\imaj\haiti.svg"></td>
                </tr> 
            </table>
        </div>
<div class="tab"> 
            <table>
                <tr class="xy">
                    <th></th>
                    <th>Groupe A</th>
                    <th>Groupe B</th>
                </tr>
            </table>
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

$nbcol = 1;  // nombre de colonnes 
      echo '<table border="1" class="tds">';
      $nb=count($tabl); 
    
      for($i=0;$i<$nb;$i++)
      { 
      //les valeurs à afficher
      $val=$tabl[$i];   
      if($i%$nbcol==0)
       echo '<tr>';
       echo '<td>',$val,'</td>';
        
      if($i%$nbcol==($nbcol))
       echo '</tr>';
      }
      echo '</table>'; 

$nbcol = 1;  // nombre de colonnes 
      echo '<table border="1" class="td1">';
      $nb=count($tab); 
    
      for($i=0;$i<$nb;$i++)
      { 
      //les valeurs à afficher
      $valeur=$tab[$i];   
      if($i%$nbcol==0)
       echo '<tr>';
       echo '<td>',$valeur,'</td>';
        
      if($i%$nbcol==($nbcol))
       echo '</tr>';
      }
      echo '</table>'; 

$nbcol = 1;  // nombre de colonnes 
      echo '<table border="1" class="td2">';
      $nb=count($tablo); 
    
      for($i=0;$i<$nb;$i++)
      { 
      //les valeurs à afficher
      $valeur1=$tablo[$i];   
      if($i%$nbcol==0)
       echo '<tr>';
        echo '<td>',$valeur1,'</td>';
        
      if($i%$nbcol==($nbcol))
       echo '</tr>';
      }
      echo '</table>'; 
?> 
<a href ="index.php" class="tirage"> TIRAGE </a>

<!-- Les affichages du premier tour-->
<!-- Groupe A -->
<div class="g1">
<table>
<tr class="xxy">
<th class="group"> Groupe A </th>
<th class="affich"> Affiche </th>
</tr>
<tr>
<td >Match 1 </td>
<td>
<form action ="classment.php" method = "POST">
<label for ="td"><?=$tab[0] ?></label> 
<input ="number" name="premier_match_domicile" id="td" size="1" maxlength="2" value = "<?php if (isset($_POST['premier_match_domicile'])){ echo $_POST['premier_match_domicile'];}?> " required /> 
 VS 
 <input ="number" name="premier_match_exterieur" id="2td" size="1" maxlength="2" value = "<?php if (isset($_POST['premier_match_exterieur'])){ echo $_POST['premier_match_exterieur'];}?>" required /> 
<label for ="2td"><?=$tab[1];?></label> 
</td>
</tr>
<tr>
<td >Match 2 </td>
<td>
<label for ="3td"><?=$tab[2];?></label> 
<input ="number" name="deuxieme_match_domicile" id="3td" size="1" maxlength="2" value = "<?php if (isset($_POST['deuxieme_match_domicile'])){ echo $_POST['deuxieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="deuxieme_match_exterieur" id="4td" size="1" maxlength="2" value = "<?php if (isset($_POST['deuxieme_match_exterieur'])){ echo $_POST['deuxieme_match_exterieur'];}?>" required /> 
<label for ="4td"><?=$tab[3];?></label> 
</td>
</tr>
<tr>
<td >Match 3 </td>
<td>
<label for ="5td"><?=$tab[0];?></label> 
<input ="number" name="troisieme_match_domicile" id="5td" size="1" maxlength="2" value = "<?php if (isset($_POST['troisieme_match_domicile'])){ echo $_POST['troisieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="troisieme_match_exterieur" id="6td" size="1" maxlength="2" value = "<?php if (isset($_POST['troisieme_match_exterieur'])){ echo $_POST['troisieme_match_exterieur'];}?>" required /> 
<label for ="6td"><?=$tab[2];?></label> 
</td>
</tr>
<tr>
<td >Match 4 </td>
<td>
<label for ="7td"><?=$tab[1];?></label> 
<input ="number" name="quatrieme_match_domicile" id="7td" size="1" maxlength="2" value = "<?php if (isset($_POST['quatrieme_match_domicile'])){ echo $_POST['quatrieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="quatrieme_match_exterieur" id="8td" size="1" maxlength="2" value = "<?php if (isset($_POST['quatrieme_match_exterieur'])){ echo $_POST['quatrieme_match_exterieur'];}?>" required /> 
<label for ="8td"><?=$tab[3];?></label> 
</td>
</tr>
<tr>
<td >Match 5 </td>
<td>
<label for ="9td"><?=$tab[0];?></label> 
<input ="number" name="cinquieme_match_domicile" id="9td" size="1" maxlength="2" value = "<?php if (isset($_POST['cinquieme_match_domicile'])){ echo $_POST['cinquieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="cinquieme_match_exterieur" id="0td" size="1" maxlength="2" value = "<?php if (isset($_POST['cinquieme_match_exterieur'])){ echo $_POST['cinquieme_match_exterieur'];}?>" required /> 
<label for ="0td"><?=$tab[3];?></label> 
</td>
</tr>
<tr>
<td >Match 6 </td>
<td>
<label for ="01td"><?=$tab[1];?></label> 
<input ="number" name="sixieme_match_domicile" id="01td" size="1" maxlength="2" value = "<?php if (isset($_POST['sixieme_match_domicile'])){ echo $_POST['sixieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="sixieme_match_exterieur" id="02td" size="1" maxlength="2" value = "<?php if (isset($_POST['sixieme_match_exterieur'])){ echo $_POST['sixieme_match_exterieur'];}?>" required /> 
<label for ="02td"><?=$tab[2];?></label>
</td>
</tr>
</table><br><br><br>
    </div>

<!-- Groupe B -->
<div class="g1">
<table>
<tr class="xxy">
<th class="groupa"> Groupe B </th>
<th class="affich"> Affiche </th>
</tr>
<tr>
<td >Match 7 </td>
<td>
<label for ="td"><?=$tablo[0] ?></label> 
<input ="number" name="septieme_match_domicile" id="td" size="1" maxlength="2" value = "<?php if (isset($_POST['septieme_match_domicile'])){ echo $_POST['septieme_match_domicile'];}?> " required /> 
 VS 
 <input ="number" name="septieme_match_exterieur" id="2td" size="1" maxlength="2" value = "<?php if (isset($_POST['septieme_match_exterieur'])){ echo $_POST['septieme_match_exterieur'];}?>" required /> 
<label for ="2td"><?=$tablo[1];?></label> 
</td>
</tr>
<tr>
<td >Match 8 </td>
<td>
<label for ="3td"><?=$tablo[2];?></label> 
<input ="number" name="huitieme_match_domicile" id="3td" size="1" maxlength="2" value = "<?php if (isset($_POST['huitieme_match_domicile'])){ echo $_POST['huitieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="huitieme_match_exterieur" id="4td" size="1" maxlength="2" value = "<?php if (isset($_POST['huitieme_match_exterieur'])){ echo $_POST['huitieme_match_exterieur'];}?>" required /> 
<label for ="4td"><?=$tablo[3];?></label> 
</td>
</tr>
<tr>
<td >Match 9 </td>
<td>
<label for ="5td"><?=$tablo[0];?></label> 
<input ="number" name="neuvieme_match_domicile" id="5td" size="1" maxlength="2" value = "<?php if (isset($_POST['neuvieme_match_domicile'])){ echo $_POST['neuvieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="neuvieme_match_exterieur" id="6td" size="1" maxlength="2" value = "<?php if (isset($_POST['neuvieme_match_exterieur'])){ echo $_POST['neuvieme_match_exterieur'];}?>" required /> 
<label for ="6td"><?=$tablo[2];?></label> 
</td>
</tr>
<tr>
<td >Match 10 </td>
<td>
<label for ="7td"><?=$tablo[1];?></label> 
<input ="number" name="dixieme_match_domicile" id="7td" size="1" maxlength="2" value = "<?php if (isset($_POST['dixieme_match_domicile'])){ echo $_POST['dixieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="dixieme_match_exterieur" id="8td" size="1" maxlength="2" value = "<?php if (isset($_POST['dixieme_match_exterieurB'])){ echo $_POST['dixieme_match_exterieur'];}?>" required /> 
<label for ="8td"><?=$tablo[3];?></label> 
</td>
</tr>
<tr>
<td >Match 11 </td>
<td>
<label for ="9td"><?=$tablo[0];?></label> 
<input ="number" name="onzieme_match_domicile" id="9td" size="1" maxlength="2" value = "<?php if (isset($_POST['onzieme_match_domicile'])){ echo $_POST['onzieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="onzieme_match_exterieur" id="0td" size="1" maxlength="2" value = "<?php if (isset($_POST['onzieme_match_exterieur'])){ echo $_POST['onzieme_match_exterieur'];}?>" required /> 
<label for ="0td"><?=$tablo[3];?></label> 
</td>
</tr>
<tr>
<td >Match 12 </td>
<td>
<label for ="01td"><?=$tablo[1];?></label> 
<input ="number" name="douzieme_match_domicile" id="01td" size="1" maxlength="2" value = "<?php if (isset($_POST['douzieme_match_domicile'])){ echo $_POST['douzieme_match_domicile'];}?>" required /> 
 VS 
 <input ="number" name="douzieme_match_exterieur" id="02td" size="1" maxlength="2" value = "<?php if (isset($_POST['douzieme_match_exterieur'])){ echo $_POST['douzieme_match_exterieur'];}?>" required /> 
<label for ="02td"><?=$tablo[2];?></label><br><br>
<input type="submit" class=""value = "Envoyer"/> 
</form>
</td>
</tr>
</table>
    </div>
</body>

</html>