<?php
    include('config.php');
   
    $db = new db();
    $data_spp = $db->tampil_data_spp();
    session_start();

?>


<h3>Data SPP</h3>
<a href="tambah_spp.php">Tambah Data</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b><a href="home.php">Back</a></b>
<table border="1">
		<tr>
			<th>No</th>
			<th>Tahun</th>
			<th>Nominal</th>
            <th>Aksi</th>
		</tr>
		<?php 
		$no = 1;
		foreach($data_spp as $spp){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $spp['tahun']; ?></td>
				<td><?php echo $spp['nominal']; ?></td>
				<td>
					<a href="edit_spp.php?id_spp=<?php echo $spp['id_spp']; ?>">Update</a>
					<a href="action.php?action=deletespp&id_spp=<?php echo $spp['id_spp']; ?>">Delete</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>