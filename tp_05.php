<!DOCTYPE html>
<html lang=""fr">
    <head>
        <meta title="TP Cookies" />
    </head>
    <body>
        <form action="#" method="post">
            <label for="nom">Entrez votre nom : </label>
                <input type="text" id="nom" name="name">
                <? if (!empty($_POST['name'])){
                    $_COOKIE['nom'] = $_POST['name'];
                }
                    elseif (!empty($_COOKIE['nom'])){
                        echo $_COOKIE['nom'];
                    }
                    else{
                        echo "<span>Ce champ ne doit pas etre vide</span>";
                    }
                }
                </input>
            <label for="prenom">Entrez votre prénom : </label>
            <input type="text" id="prenom" name="lastname">
            <? if (!empty($_POST['lastname'])){
                $_COOKIE['prenom'] = $_POST['lastname'];
            }
                elseif (!empty($_COOKIE['prenom'])){
                    echo $_COOKIE['prenom'];
                }
                else{
                    echo "<span>Ce champ ne doit pas etre vide</span>";
                }
            }
            ?>
            </input>
            <label for="age">Entrez votre age : </label>
            <input type="text" id="age" name="old"><? if (!empty($_POST['old'])){
                $_COOKIE['age'] = $_POST['old'];
            }
                elseif (!empty($_COOKIE['age'])){
                    echo $_COOKIE['age'];
                }
                else{
                    echo "<span>Ce champ ne doit pas etre vide</span>";
                }
            }
            </input>
            <button type="submit">Valider</button>
        </form>
        <? if (!empty($_COOKIE[nom]) and !empty($_COOKIE[prenom]) and !empty($_COOKIE[age])){
            echo <? "<span> Vous êtes $_COOKIE['nom'] $_COOKIE['prenom'] et vous avez $_COOKIE['age']</span>";
        }
        ?>
    </body>
</html>