<?PHP
include "../core/FournisseursC.php";
$fournisseursC=new FournisseursC();
$NbrFrs=$fournisseursC->Count();

include "../core/ProduitsC.php";
$produitsC=new ProduitsC();
$NbrPdt = $produitsC->count();

include 'header.php';
if(isset($_GET['Message'])){
?>
<div class="alert alert-success" role="alert">
  <?php 
  echo $_GET['Message'];?>
</div>
<?php
}?>

  <!-- Body Content Wrapper -->
    <div class="ms-content-wrapper">
      <div class="row">

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-success ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Fournisseurs</h6>
                <p class="ms-card-change"> <i class="material-icons">arrow_upward</i> <?php echo $NbrFrs;?></p>
                <!--p class="fs-12">48% From Last 24 Hours</p-->
              </div>
            </div>
            <i class="fas fa-user-tie"></i>
          </div>
        </div>

        <div class="col-xl-3 col-md-6">
          <div class="ms-card card-gradient-secondary ms-widget ms-infographics-widget">
            <div class="ms-card-body media">
              <div class="media-body">
                <h6>Total Produits</h6>
                <p class="ms-card-change"> <?php echo $NbrPdt;?></p>
                <!--p class="fs-12">2% Decreased from last day</p-->
              </div>
            </div>
            <i class="flaticon-supermarket"></i>
          </div>
        </div>


	  
	  </div>
    </div>

<?php
include 'footer.php';
?>