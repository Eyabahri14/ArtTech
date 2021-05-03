 <?PHP
include_once '../core/ProduitsC.php';
include_once '../core/FournisseursC.php';
include_once '../entities/Produits.php';


$user=0;
if (isset($_POST["Reference"])&&  isset($_POST["Nom"]) && isset($_POST["Prix"]) && isset($_POST["ID_fournisseur"])  &&  isset($_POST["Type"]) &&  isset($_POST["Description"]) ) {
    $annonce1= new Produits ($_POST["Reference"],$_POST["Nom"],$_POST["Prix"],$_POST["ID_fournisseur"],$_POST["Type"],   $_POST["Description"]);

    $a = new produitsC();
    $a->AjouterProduits($annonce1);
    header('Location:AfficherProduits.php?Message=Ajouter avec succès');

  
}
$f = new FournisseursC();
$listFrs = $f->AfficherFournisseurs();
include 'header.php';
?>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Gestion des produits</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

 <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='6' colspan='1'>Informations du produit</td>
                    <td>
                        <label for="Reference">Reference:
                        </label>
                    </td>
                    <td><input type="text" required class="input"  name="Reference" id="Reference" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Nom">Nom:</label>
                    </td>
                    <td><input type="text" required class="input"  name="Nom" id="Nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prix">Prix:
                        </label>
                    </td>
                    <td><input type="integer" required class="input"  name="Prix" id="Prix" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="ID_fournisseur">Fournisseur: </label>
                    </td>
                    <td>
                        <select name="ID_fournisseur" class="select">
                            <?php 
                                foreach($listFrs as $Frs){
                                    ?>
                                <option value="<?php echo $Frs['ID_fournisseur'];?>"><?php echo $Frs['Nom'];?></option>
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
							<option>Bijoux</option>
							<option>Habillement</option>
							<option>Poterie et céramique</option>
							<option>Tapisserie</option>
							<option>Maroquinerie</option>
							<option>Peinture</option>
							<option>Décoration d'intérieur</option>
							<option>Nattes</option>
						</select>
						
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Description">Description:</label>
                    </td>
                    <td>
                        <textarea name="Description" id="Description" cols="30" rows="10"></textarea>
                    </td>
                </tr>
               
                
                
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="Envoyer" class="button is-success"> 
                    </td>
                    <td>
                        <input type="reset" value="Annuler"  class="button is-info" >
                    </td>
                </tr>
            </table>
        </form>

 <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
              
       
       
<?php
include 'footer.php';
?>
        