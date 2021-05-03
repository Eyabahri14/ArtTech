
 <?PHP
include_once '../core/ProduitsC.php';
include_once '../core/FournisseursC.php';
include_once '../entities/Produits.php';


$user=0;
if (isset($_POST["Reference"])&&  isset($_POST["Nom"]) && isset($_POST["Prix"]) && isset($_POST["ID_fournisseur"])  &&  isset($_POST["Type"]) &&  isset($_POST["Description"]) ) {
    $annonce1= new Produits ($_POST["Reference"],$_POST["Nom"],$_POST["Prix"],$_POST["ID_fournisseur"],$_POST["Type"],   $_POST["Description"]);

    $a = new produitsC();
    $a->ModifierProduits($annonce1);
    header('Location:AfficherProduits.php?Message=Modifier avec succès');
}
if (isset($_POST["Reference"])){
    $a = new produitsC();
    $produit=$a->ChercherProduits($_POST["Reference"]);
    $reference=$produit["Reference"];
    $nom=$produit["Nom"];
    $prix=$produit["Prix"];
    $id_fournisseur=$produit["ID_fournisseur"];
    $type=$produit["Type"];
    $description=$produit["Description"];
}

$f = new FournisseursC();
$listFrs = $f->AfficherFournisseurs();
include 'header.php';
?>


 <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='6' colspan='1'>Informations du produit</td>
                    <td>
                        <label for="Reference">Reference:</label>
                    </td>
                    <td><input type="text"  class="input" required  name="Reference" id="Reference" maxlength="20" value="<?php echo $reference; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom">Nom:</label>
                    </td>
                    <td><input type="text"  class="input" required  name="Nom" id="Nom" maxlength="20" value="<?php echo $nom; ?>" ></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Prix:</label>
                    </td>
                    <td><input type="integer"  class="input" required  name="Prix" id="Prix" maxlength="20" value="<?php echo $prix; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="ID_fournisseur">Fournisseur:</label>
                    </td>
                    <td>

                        <select name="ID_fournisseur" class="select">
                            <?php 
                                foreach($listFrs as $Frs){
                                    ?>
                                <option <?php if($id_fournisseur == $Frs['ID_fournisseur'] ) echo 'selected';?> value="<?php echo $Frs['ID_fournisseur'];?>"><?php echo $Frs['Nom'];?></option>
                                    <?php                                    
                                }
                             ?>
                        </select>

                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Type">Type:</label>
                    </td>
                    <td>
                        <select name="Type" id="Type"  class="select">
							<option <?php if($type == 'Bijoux') echo 'selected';?>>Bijoux</option>
							<option <?php if($type == 'Habillement') echo 'selected';?>>Habillement</option>
							<option <?php if($type == 'Poterie et céramique') echo 'selected';?>>Poterie et céramique</option>
							<option <?php if($type == 'Tapisserie') echo 'selected';?>>Tapisserie</option>
							<option <?php if($type == 'Maroquinerie') echo 'selected';?>>Maroquinerie</option>
							<option <?php if($type == 'Peinture') echo 'selected';?>>Peinture</option>
							<option <?php if($type == "Décoration d'intérieur") echo 'selected';?>>Décoration d'intérieur</option>
							<option <?php if($type == 'Nattes') echo 'selected';?>>Nattes</option>
						</select>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:</label>
                    </td>
                    <td>
                        <textarea class="textarea" name="Description" id="Description" cols="30" rows="10" ><?php echo $description; ?></textarea>
						
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