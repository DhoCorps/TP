<?php
/*  TP DE GEOFFROY


    Créer un petit programme qui permet de saisir un prix HT
    et d'afficher le prix TTC correspondant


    // INFORMATIONS
    - Le prix HT, pour le moment, doit être renseigné directement sur le code, sur une variable

    - Vous allez faire le calcul et stocker le montant TTC sur une variable

    - Vous allez faire un echo affichant :
        Le prix HT est = (ajouter la variable du prixHT), le prix TTC est = (ajouter la variable du prix TTC), le montant total de la TVA est = (ajoutez le montant de la TVA)

    - Taux TVA = 20%

    // EXEMPLE
    Si le prix HT est 10, vous devez afficher :
    Le prix HT est = 10€, le prix TTC est = 12€, le montant total de la TVA est = 2€

*/
<!DOCTYPE html>
<html lg="fr">
<head>
<meta title="GET"/>
</head>    
    <body>
        <form action="#" method="get">
            <label for="prixHT">Veuillez entrer un prix HT SVP</label>
            <input type="text" id="prixHT" name="data"></input>
            <button type="submit"> Envoyer </button>
        </form>
        <? 
        
        if(!empty($_GET['data'])){

            $prixHT = $_GET['data'];
            $prixTTC = $prixHT * 1.2;
            $tva = $prixTTC - $prixHT;
                
            echo "<p>Le prix HT est = $prixHT, le prix TTC est = $prixTTC, le montant total de la TVA est = $tva</p>";
        }
        ?>
        
    </body>
</html>




