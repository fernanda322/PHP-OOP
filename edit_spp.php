<?php 	
include('config.php');
$db = new db();
$id_spp = $_GET['id_spp'];
if(! is_null($id_spp))
{
	$data_spp = $db->get_by_id_spp($id_spp);
}
else
{
	header('location:spp.php');
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
<form method="post" action="action.php?action=updatespp">
<input type="hidden" name="id_spp" value="<?php echo $data_spp['id_spp']; ?>"/>
<table>
	<tr>
		<td>Nama Kelas</td>
		<td>:</td>
		<td><input type="text" name="tahun" value="<?php echo $data_spp['tahun']; ?>"/></td>
	</tr>
	<tr>
		<td>Kompetisi Keahlian</td>
		<td>:</td>
		<td><input type="text" name="nominal" value="<?php echo $data_spp['nominal']; ?>"/></td>
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