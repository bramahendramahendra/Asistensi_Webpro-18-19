<!DOCTYPE html>
<html>
<head>
	<title><?php echo $data->nim ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


</head>
<body>
<div class="container">

	<div class="row text-center" style="margin-top: 50px;">

	<div class="col-md-6 d-block mx-auto">
 <h2>Daftar Teman Bang Jali</h2>
  <p>Bang jali orangnya pelupa maka dia sering mencatat namanya dan menampilkan menggunakan perulangan.</p>            
  <table class="table table-striped">
    <thead>
      <tr>
        <th>NAMA</th>
        <th>PANGGILAN</th>
        <th>EMAIL</th>
      </tr>
    </thead>
    <tbody>
      
<?php
  	 foreach ($data2 as $c ) { ?>
    <tr>
      <th scope="row"><?=$c->nama?></th>
      <td><?=$c->panggilan?></td>
      <td><?php echo $c->email ?></td>
    </tr>
<?php } ?>

    </tbody>
  
  </table>
<center><a href="<?php echo base_url('Awalan/index') ?>" class="btn btn-primary">DATA DIRI</a></center>		
	</div>
</div>
</div>
</body>
</html>