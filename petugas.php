<?php
    include('config.php');
   
    $db = new db();
    $petugas = $db->tampil_data_petugas();
    session_start();

?>

<h3>Data Petugas</h3>
<a href="tambah_petugas.php">Tambah Data</a>
<a href="home.php">Kembali</a>
<table border="1">
		<tr>
			<th>No</th>
			<th>Username</th>
			<th>Nama Petugas</th>
            <?php if($_SESSION['level']=='admin'):?>
            <th>Aksi</th>
            <?php endif ?>
		</tr>
		<?php 
		$no = 1;
		foreach($petugas as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['username']; ?></td>
				<td><?php echo $row['nama_petugas']; ?></td>
                <?php if($_SESSION['level']=='admin'):?>
				<td>
					<a href="edit_petugas.php?id_petugas=<?php echo $row['id_petugas']; ?>">Update</a>
					<a href="action.php?action=deletepetugas&id_petugas=<?php echo $row['id_petugas']; ?>">Delete</a>
				</td>
                <?php endif ?>
			</tr>
			<?php 
		}
		?>
	</table>
