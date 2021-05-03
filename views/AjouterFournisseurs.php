 <?PHP
include_once '../core/fournisseursC.php';
include_once '../entities/fournisseurs.php';


$user=0;
//var_dump($_POST);
if ( isset($_POST["Nom"]) && isset($_POST["Prenom"]) && isset($_POST["Code_Postal"])  &&  isset($_POST["Numero_tel"]) &&  isset($_POST["Email"]) &&  isset($_POST["Societe"]) ) {
    $annonce1= new fournisseurs (0,$_POST["Nom"],$_POST["Prenom"],$_POST["Code_Postal"],$_POST["Numero_tel"],   $_POST["Email"] , $_POST["Societe"] );

    $a = new fournisseursC();
    $a->Ajouterfournisseurs($annonce1);
    header('Location:Afficherfournisseurs.php?Message=Ajouter avec succès');

  
}

include 'header.php';
?>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">

  
<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">

        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Gestion des fournisseurs</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">

 <form action="" method="POST">
            <table border="1" align="center">

                <tr>
                    <td rowspan='6' colspan='1'>Informations du fournisseur</td>
                    
                    <td>
                        <label for="Nom">Nom:</label>
                    </td>
                    <td><input type="text" required class="input"  name="Nom" id="Nom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Prenom">Prenom:
                        </label>
                    </td>
                    <td><input type="text" required class="input"  name="Prenom" id="Prenom" maxlength="20"></td>
                </tr>
                <tr>
                    <td>
                        <label for="Code_Postal">Code_Postal: </label>
                    </td>
                    <td>
                       <input type="integer" class="input" required name="Code_Postal" id="Code_Postal" maxlength="20"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Numero_tel">Numero_tel: </label>
                    </td>
                    <td>
                       <input type="integer" class="input" required name="Numero_tel" id="Numero_tel" maxlength="20"></td>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="Email">Email:</label>
                    </td>
                    <td>
                       <input type="text" class="input" required name="Email" id="Email" maxlength="20"></td>
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <label for="Societe">Societe:</label>
                    </td>
                    <td>
                       <input type="text" class="input" required name="Societe" id="Societe" maxlength="20"></td>
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
        