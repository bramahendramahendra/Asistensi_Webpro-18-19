  <div class="container">
  	<div class="box">
      <h2>Data Mahasiswa</h2>
      <p>Tabel Data Mahasiswa Telkom Univerity</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>nim</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Fakultas</th>
            <th class="text-center">Foto</th>
          </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($data as $d ) {?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $d->nim?></td>
            <td><?php echo $d->nama ?></td>
            <td><?php echo $d->kelas ?></td>
            <td><?php echo $d->nama_jurusan ?></td>
            <td><?php echo $d->fakultas ?></td>
            <td>
            	<img class="img-thumbnail center-block" src="<?php echo base_url('assets/foto/').$d->foto ?>" width="100px">
            </td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
