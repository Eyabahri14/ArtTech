<?PHP
include "../core/FournisseursC.php";
$fournisseursC=new FournisseursC();
$Societe  = '';
$Ordre = '';
$Cp='';
if(isset($_POST['Societe'])){
	$Societe  = $_POST['Societe'];
	$Ordre = $_POST['Ordre'];
	$Cp=$_POST['Cp'];
	$fournisseurs=$fournisseursC->AfficherFournisseursFiltre($Societe, $Cp, $Ordre);
}
else
	$fournisseurs=$fournisseursC->AfficherFournisseurs();


$Cpfournisseurs=$fournisseursC->CpFournisseurs();

include 'header.php';
if(isset($_GET['Message'])){
?>
<div class="alert alert-success" role="alert">
  <?php 
  echo $_GET['Message'];?>
</div>
<?php
}?>

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

<td ><button type="button" style="padding: 5px;margin-left: 1000px;margin-block-start:-30px;" class="btn btn-pill btn-outline-light"><a href="ImpressionPdfFournisseurs.php">Imprimer</a></button></td>

		<button><a href="AjouterFournisseurs.php">Ajouter un fournisseur</a></button>
		<hr />
		<form action="" method="post">
			<input class="input" type="text" name="Societe" value="<?=$Societe?>" placeholder="Recherche par societe" />
			<select name="Cp" class="select">
				<option value="">Choisir CP</option>
				<?php
				foreach($Cpfournisseurs as $CpFrs){
				?>
				<option <?php if($Cp == $CpFrs['Code_Postal']) echo 'selected';?> ><?php echo $CpFrs['Code_Postal'];?></option>
				<?php
				}?>
			</select>
			<select name="Ordre" id="Ordre" class="select">
				<option value="">Trier par ...</option>
				<option <?php if($Ordre == 'Nom') echo 'selected';?> value="Nom">Tri par nom</option>
				<option <?php if($Ordre == 'Prenom') echo 'selected';?> value="Prenom">Tri par prenom</option>
				<option <?php if($Ordre == 'Societe') echo 'selected';?> value="Societe">Tri par societe</option>
			</select>
			<button type="submit">Filtrer</button>
		</form>
		<hr />
		<table class="table table-bordered">
			
			<thead>
			<tr>
                <th scope="col">ID_fournisseur</th>
                <th scope="col">Nom</th>
                <th scope="col">Prenom</th>
                <th scope="col">Code postal</th>
				<th scope="col">Numero_tel</th>
				<th scope="col">Email</th>
				<th scope="col">Societe</th>
				<th scope="col">Modifier</th>
				<th scope="col">Supprimer</th>

            </tr>
             </thead>

             <?PHP
				foreach($fournisseurs as $fournisseur){
			?>
			<tr>

					<td><?PHP echo $fournisseur['ID_fournisseur']; ?></td>
					<td><?PHP echo $fournisseur['Nom']; ?></td>
					<td><?PHP echo $fournisseur['Prenom']; ?></td>
					<td><?PHP echo $fournisseur['Code_Postal']; ?></td>
					<td><?PHP echo $fournisseur['Numero_tel']; ?></td>
					<td><?PHP echo $fournisseur['Email']; ?></td>
					<td><?PHP echo $fournisseur['Societe']; ?></td>

					<td>
						<form action="Modifierfournisseurs.php" method="POST" >
							<input type="hidden" name="ID_fournisseur" value=<?php echo $fournisseur['ID_fournisseur']; ?> >
							<button class="button is-warning">Modifier</button>
						</form>
					</td>
					<td>
						<form action="Supprimerfournisseurs.php" method="POST" >
							<input type="hidden" name="ID_fournisseur" value=<?php echo $fournisseur['ID_fournisseur']; ?> >
							<button class="button is-danger">Supprimer</button>
						</form>
					</td>
			</tr>
             <?PHP

}
			?>

			</table>
			</div>
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