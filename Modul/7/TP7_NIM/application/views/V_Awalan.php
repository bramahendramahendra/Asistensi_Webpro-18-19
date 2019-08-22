<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data->nim ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
	<br>
<div class="container">
	
	<div class="row">
	<div class="col-md-4 d-block mx-auto">
	  <h2>Data Diri</h2>
	  <p>Data diri ini menggunakan card dari bootstrap 4.</p>
	  <div class="card" >
	    <img class="card-img-top " src="https://cdn.idntimes.com/content-images/post/20190204/img-20190203-235941-16c3a8a0cf0a39303830e8e107fd60d6.JPG" alt="Card image" style="width:100%">
	    <div class="card-body">
	      <h4 class="card-title"><?php echo $data->nama ?> - <?php echo $data->nim ?></h4>

	      <p class="card-text">Bang Jali adalah seorang yang baik hati dan sederhana.</p>
	     <center><a href="<?php echo base_url('Awalan/table') ?>" class="btn btn-primary">DAFTAR TEMAN</a></center>
	    </div>
	  </div>
	</div>

	
</div>

</div>
</body>
</html>