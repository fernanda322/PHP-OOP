<?php 	
include('config.php');
$db = new db();
$id_kelas = $_GET['id_kelas'];
if(! is_null($id_kelas))
{
	$data_kelas = $db->get_by_id_kelas($id_kelas);
}
else
{
	header('location:kelas.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Kelas</h3>
<hr/>
<form method="post" action="action.php?action=updatekelas">
<input type="hidden" name="id_kelas" value="<?php echo $data_kelas['id_kelas']; ?>"/>
<table>
	<tr>
		<td>Nama Kelas</td>
		<td>:</td>
		<td><input type="text" name="nama_kelas" value="<?php echo $data_kelas['nama_kelas']; ?>"/></td>
	</tr>
	<tr>
		<td>Kompetisi Keahlian</td>
		<td>:</td>
		<td><input type="text" name="kompetensi_keahlian" value="<?php echo $data_kelas['kompetensi_keahlian']; ?>"/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Update"/></td>
	</tr>
</table>
</form>
</body>
</html>