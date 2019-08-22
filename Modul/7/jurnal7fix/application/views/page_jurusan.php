  <div class="container">
	  <div class="box">
      <h2>Data Jurusan</h2>
      <p>Tabel Data Jurusan Telkom Univerity</p>            
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama Jurusan</th>
            <th>Nama Fakultas</th>
            <th>Akreditasi</th>
            <th>Jumlah Mahasiswa</th>
          </tr>
        </thead>
        <tbody>
        	<?php $no=1; foreach ($data as $d ) {?>
          <tr>
            <td><?php echo $no++?></td>
            <td><?php echo $d->nama_jurusan?></td>
            <td><?php echo $d->fakultas ?></td>
            <td><?php echo $d->akreditasi ?></td>
            <td><?php echo $d->jumlah_mahasiswa ?></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</body>
</html>
