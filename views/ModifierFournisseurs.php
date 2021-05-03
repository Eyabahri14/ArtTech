
 <?PHP
include_once '../core/fournisseursC.php';
include_once '../entities/fournisseurs.php';


$user=0;
if (isset($_POST["ID_fournisseur"])&& isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["Code_Postal"])  &&  isset($_POST["Numero_tel"]) &&  isset($_POST["Email"]) &&  isset($_POST["Societe"])) {
    $f= new fournisseurs ($_POST["ID_fournisseur"],$_POST["Nom"],$_POST["Prenom"],$_POST["Code_Postal"],$_POST["Numero_tel"],   $_POST["Email"],   $_POST["Societe"]);

    $a = new fournisseursC();
    $r=$a->Modifierfournisseurs($f);
    if($r)
        $Message='Modifier avec succès';
    else
        $Message='Echec de Modification !!';
    header("Location:Afficherfournisseurs.php?Message=$Message");
}
if (isset($_POST["ID_fournisseur"])){
    $a = new fournisseursC();
    $fournisseur=$a->ChercherFournisseurs($_POST["ID_fournisseur"]);
    $ID_fournisseur=$fournisseur["ID_fournisseur"];
    $nom=$fournisseur["Nom"];
    $Prenom=$fournisseur["Prenom"];
    $Code_Postal=$fournisseur["Code_Postal"];
    $Numero_tel=$fournisseur["Numero_tel"];
    $Email=$fournisseur["Email"];
    $Societe=$fournisseur["Societe"];
}
include 'header.php';
?>


 <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='7' colspan='1'>Informations du fournisseur</td>
                    <td>
                        <label for="ID_fournisseur">ID_fournisseur:</label>
                    </td>
                    <td><?php echo $ID_fournisseur; ?><input type="hidden"  class="input" required  name="ID_fournisseur" id="ID_fournisseur" maxlength="20" value="<?php echo $ID_fournisseur; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom">Nom:</label>
                    </td>
                    <td><input type="text"  class="input" required  name="Nom" id="Nom" maxlength="20" value="<?php echo $nom; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prenom">Prenom:</label>
                    </td>
                    <td><input type="text"  class="input" required  name="Prenom" id="Prenom" maxlength="20" value="<?php echo $Prenom; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Code_Postal">Code_Postal:</label>
                    </td>
                    <td>
                       <input type="int" class="input" required  name="Code_Postal" id="Code_Postal" maxlength="20" value="<?php echo $Code_Postal; ?>"></td>
                    </td>
                </tr>

                 <tr>
                    <td>
                        <label for="Numero_tel">Numero_tel:</label>
                    </td>
                    <td>
                       <input type="int" class="input" required  name="Numero_tel" id="Numero_tel" maxlength="20" value="<?php echo $Numero_tel; ?>"></td>
                    </td>
                </tr>

              <tr>
                    <td>
                        <label for="Email">Email:</label>
                    </td>
                    <td>
                       <input type="email" class="input" required  name="Email" id="Email" maxlength="20" value="<?php echo $Email; ?>"></td>
                    </td>
                </tr>

                <tr>
                    <td>
                        <label for="Societe">Societe:</label>
                    </td>
                    <td>
                       <input type="text" class="input" required  name="Societe" id="Societe" maxlength="20" value="<?php echo $Societe; ?>"></td>
                    </td>
                </tr>
              
               
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer"  class="button is-success"/> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler"  class="button is-info" />
                    </td>
                </tr>
            </table>
        </form>

    <?PHP
include 'footer.php';
?>     