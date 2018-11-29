<!-- HEADER -->
<?php
  include "header.php";
 ?>
<!-- START OF TRACKING PAGE-->

<div class="row mx-5 d-flex align-items-stretch" style="padding-top:70px">
    <div class="card shadow rounded border_color" style="width:100%">
      <div class="card-body buttonAlign">
        <h1 class="card-title">Tracking</h1>
      </div>
    </div>
</div>

<!-- TRACKING INPUT BAR -->
<div class="col-lg-6 trackingNumber2">
  <form>
    <div class="form-row py-4">
      <div class="col-9">
        <input type="tracking" class="form-control form-control-lg" id="trackingNumber2" placeholder="Tracking ID">
      </div>
        <button type="submit" class="btn btn-secondary buttonColor">Track</button>
    </div>
  </form>
</div>
<!-- FOOTER -->
<?php
include_once "footer.php";
?>
