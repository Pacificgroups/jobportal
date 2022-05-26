    <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Company</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Company</h1>
          </div>
        </div>
      </div>
    </div>



    <section id="content">
        <div class="container content">     
        <!-- Service Blcoks -->  
        <div class="row">
            <?php
$sql = "SELECT * FROM `tblcompany`";
$mydb->setQuery($sql);
$comp = $mydb->loadResultList();

foreach ($comp as $company) {
?>
                    <div class="col-sm-4 info-blocks">
                        <i class="icon-info-blocks fa fa-building-o"></i>
                        <div class="info-blocks-in">
                            <h3><?php echo '<a href="' . web_root . 'index.php?q=hiring&search=' . $company->COMPANYNAME . '">' . $company->COMPANYNAME . '</a>'; ?></h3>
                            <!-- <p><?php echo $company->COMPANYMISSION; ?></p> -->
                            <p>Address :<?php echo $company->COMPANYADDRESS; ?></p>
                            <p>Contact No. :<?php echo $company->COMPANYCONTACTNO; ?></p>
                        </div>
                    </div>

            <?php
}?>

 
 
         </div> 
        </div>
    </section>
   