<style>
	.logo {
    margin: auto;
    font-size: 14px;
    background: white;
    padding: 5px 10px;
    border-radius: 50% 50%;
    color: black;
    display: block;
    text-align:center;
    object-fit:contain;
    
}
</style>

<nav class="navbar navbar-light fixed-top bg-primary" style="padding:0;">
  <div class="container-fluid mt-2 mb-2">
  	<div class="col-lg-12">
  		<div class="col-md-1 float-left" style="display: flex;">
  			<div class="logo">
        <large><b>Expedia</b></large>
  				<span class="fa fa-plane-departure" ></span>
  			</div>
  		</div>
      <div class="col-md-4 float-left text-white">
        <large><b>Online Flight Booking System</b></large>
      </div>
	  	<div class="col-md-2 float-right text-white">
	  		<a href="ajax.php?action=logout" class="text-white"><?php echo $_SESSION['login_name'] ?> <i class="fa fa-power-off"></i></a>
	    </div>
    </div>
  </div>
  
</nav>