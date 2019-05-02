<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="stylesheet" type="text/css" href="css/locations.css">
	<title>Cerulean Locations</title>

</head>
<!--Header-->
<?php
include "header.php"
?>
<!--header end -->

 <!--contact page content-->
 <div class="align-items-center text-center">
    <div class="card py-3 border_color billboard2">
      <img class="card-img-top billboard" src="images/building_front.jpg" alt="Cerulean Logo">
      <h2 class="pading">How to Reach Us</h2>
      <p class="txtSize">Send us an email, give us a call, or mail us a letter to recive a prompt risponse.</p>
        <div class="container">
          <table class="table table-borderless table-light" align="center">
            <thead class="thead-cerulean">
              <tr>
                <th>Branch Office</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Address</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Cerulean HQ</td>
                <td>cerulean.support@cerulean.com</td>
                <td>1.800.464.1020</td>
                <td>600 East Brokaw <br> San Jose, CA 95112 USA</td>
              </tr>
            </tbody>
          </table>
          <div class="col-lg-6 row2"><!--location finder-->
            <form>
              <h2 class="">Find a location near you:</h2>
              <div class="form-row py-4">
                <div class="col-9">
                  <input type="text" id="areaCode" name="areaCode" placeholder="Area Code" required="" class="form-control form-control-lg center">
                </div>
                  <button class="btn btn-secondary buttonColor" type="Submit">Submit</button>
              </div>
            </form>
          </div><!--location finder end-->
        </div><!--container class end-->
    </div> <!--card claass end -->
  </div>
 <!--h2>end of contact page content-->

<?php
include "footer.php"
?>