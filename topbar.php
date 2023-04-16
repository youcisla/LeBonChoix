<!-- <style>
	.logo {
    margin: auto;
    font-size: 20px;
    background: white;
    padding: 7px 11px;
    border-radius: 50% 50%;
    color: #000000b3;
}
</style> -->

<nav class="navbar navbar-expand navbar-light fixed-top bg-dark">
  <!-- <div class="container-fluid mt-2 mb-2"> -->
  	<!-- <div class="col-lg-12"> -->
        <div class="navbar-header">
            <a class="navbar-brand text-white" href="index.php?page=home"><b>Un Titre Accrocheur</b></a>
        </div>
        <!-- <div class="col-md-4 float-left"> -->
            <form class="form-inline navbar-left" id="manage-search">
				<div class="input-group">
					<input type="text" placeholder="Recherche..." id="find" 
					class="form-control" value="<?php echo isset($_GET['keyword'])? $_GET['keyword'] :'' ?>">
					<div class="input-group-btn">
					<button class="btn btn-default text-white" type="submit">
						<i class="fas fa-search"></i>
					</button>
					</div>
				</div>
                <!-- <div class="form-group"></div> -->
                <!-- <button type="submit" class="btn btn-default">Submit</button> -->
            </form>
        <!-- </div> -->

      	<div class="navbar-nav">
            <a href="index.php?page=home" class="nav-item nav-link text-white">
              	<span class='icon-field'><i class="fa fa-home"></i></span>Acceuil
			</a>
            <a href="index.php?page=categories" class="nav-item nav-link text-white">
              	<span class='icon-field'><i class="fa fa-tags"></i></span>Categories
			</a>
            <a href="index.php?page=topics" class="nav-item nav-link text-white">
				<span class='icon-field'><i class="fa fa-comment"></i></span>Discussions
			</a>
            <!-- <?php// if($_SESSION['login_type'] == 1): ?>
              	<a href="index.php?page=users" class="nav-item nav-users">
                	<span class='icon-field'><i class="fa fa-users"></i></span>Utilisateurs
              	</a>
            <?php// endif; ?> -->
		</div>

	  	<div class="float-right">
        <div class=" dropdown mr-4">
            <a href="#" class="text-white dropdown-toggle"  id="account_settings" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fa-solid fa-user"></i> <?php echo $_SESSION['login_name'] ?> </a>
              <div class="dropdown-menu" aria-labelledby="account_settings" style="left: -2.5em;">
                <a class="dropdown-item" href="javascript:void(0)" id="manage_my_account"><i class="fa fa-cog"></i> Parametres</a>
                <a class="dropdown-item" href="ajax.php?action=logout"><i class="fa fa-power-off"></i> Deconnexion</a>
              </div>
        </div>
    <!-- </div> -->
  	<!-- </div> -->
  
</nav>

<script>
  $('#manage_my_account').click(function(){
    uni_modal("Manage Account","manage_user.php?id=<?php echo $_SESSION['login_id'] ?>&mtype=own")
  })
  $('#find').keypress(function(e){
    if(e.which == 13){
      $('#manage-search').submit()
    }
  })
  $('#manage-search').submit(function(e){
    e.preventDefault()
    location.href = "index.php?page=search&keyword="+$('#find').val()
  })
</script>