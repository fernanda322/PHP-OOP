
<?php
    include('config.php');
   
    $db = new db();
    $kelas = $db->tampil_data_kelas();
    session_start();

?>

<h3>Data Kelas</h3>
<a href="tambah_kelas.php">Tambah Data</a>
<b><a href="home.php">Back</a></b>
<table border="1">
		<tr>
			<th>No</th>
			<th>Nama Kelas</th>
			<th>Kompetisi Keahlian</th>
            <th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($kelas as $row){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $row['nama_kelas']; ?></td>
				<td><?php echo $row['kompetensi_keahlian']; ?></td>
				<td>
					<a href="edit_kelas.php?id_kelas=<?php echo $row['id_kelas']; ?>">Update</a>
					<a href="action.php?action=deletekelas&id_kelas=<?php echo $row['id_kelas']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>