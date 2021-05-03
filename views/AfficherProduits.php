<?PHP
include "../core/ProduitsC.php";
$produitsC=new ProduitsC();
$Type= '';
$Ordre= '';
$Prix ='';
if(isset($_POST['Type'])){
    $Type = $_POST['Type'];
	$Ordre = $_POST['Ordre'];
	$Prix = $_POST['Prix'];
	$produits=$produitsC->AfficherProduitsType($_POST['Type'],$_POST['Prix'],$_POST['Ordre'] );
	
}
else
	$produits=$produitsC->AfficherProduits();


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
			<h3 class="card-title">Gestion des produits</h3>
		  </div>
		  <!-- /.card-header -->
		  <div class="card-body">


<td ><button type="button" style="padding: 5px;margin-left: 1000px;margin-block-start:-30px;" class="btn btn-pill btn-outline-light"><a href="ImpressionPdfArticle.php">Imprimer</a></button></td>
 

		<button><a href="AjouterProduits.php">Ajouter un produit</a></button>
		<form action="" method="post">
			<select name="Type" id="Type"  class="select">
				<option value="">Choisir  un type</option>
				<option <?php if($Type == 'Bijoux') echo 'selected';?>>Bijoux</option>
				<option <?php if($Type == 'Habillement') echo 'selected';?>>Habillement</option>
				<option <?php if($Type == 'Poterie et céramique') echo 'selected';?>>Poterie et céramique</option>
				<option <?php if($Type == 'Tapisserie') echo 'selected';?>>Tapisserie</option>
				<option <?php if($Type == 'Maroquinerie') echo 'selected';?>>Maroquinerie</option>
				<option <?php if($Type == 'Peinture') echo 'selected';?>>Peinture</option>
				<option <?php if($Type == 'Décoration') echo 'selected';?>>Décoration d'intérieur</option>
				<option <?php if($Type == 'Nattes') echo 'selected';?>>Nattes</option>
			</select>
			<select name="Prix" id="Prix" class="select">
				<option value="">Choisir le prix</option>
				<option value="200" <?php if($Prix == 200) echo 'selected';?>><= 200 </option>
				<option value="500" <?php if($Prix == 500) echo 'selected';?>><= 500 </option>
				<option value="1000" <?php if($Prix == 1000) echo 'selected';?>><= 1000 </option>
				<option value="2000" <?php if($Prix == 2000) echo 'selected';?>><= 2000 </option>
			</select>
			<select name="Ordre" id="Ordre"  class="select">
				<option value="">Trier par ...</option>
				<option <?php if($Ordre == 'Nom') echo 'selected';?> value="Nom">Tri par nom</option>
				<option <?php if($Ordre == 'Prix') echo 'selected';?> value="Prix">Tri par Prix</option>
				<option <?php if($Ordre == 'NomFrs') echo 'selected';?> value="NomFrs">Tri par Fournisseur</option>
				<option <?php if($Ordre == 'Type') echo 'selected';?> value="Type">Tri par Type</option>
			</select>
			<button type="submit">Filtrer</button>
		</form>
		<hr />
		<table id="example1" class="table table-bordered table-striped">
			
			<thead>
			<tr>
                <th scope="col">Reference</th>
                <th scope="col">Nom</th>
                <th scope="col">Prix</th>
                <th scope="col">Fournisseur</th>
				<th scope="col">Type</th>
				<th scope="col">Description</th>
				<th scope="col">Modifier</th>
				<th scope="col">Supprimer</th>

            </tr>
             </thead>


             <?PHP
				foreach($produits as $produit){
			?>

			<tr>
					<td><?PHP echo $produit['Reference']; ?></td>
					<td><?PHP echo $produit['Nom']; ?></td>
					<td><?PHP echo $produit['Prix']; ?></td>
					<td><?PHP echo $produit['NomFrs']; ?></td>
					<td><?PHP echo $produit['Type']; ?></td>
					<td><?PHP echo $produit['Description']; ?></td>
					<td>
						<form action="ModifierProduits.php" method="POST" >
							<input type="hidden" name="Reference" value=<?php echo $produit['Reference']; ?> >
							<button class="button is-warning">Modifier</button>
						</form>
					</td>
					<td>
						<form action="SupprimerProduits.php" method="POST" >
							<input type="hidden" name="Reference" value=<?php echo $produit['Reference']; ?> >
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