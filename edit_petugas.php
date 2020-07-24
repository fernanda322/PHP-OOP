<?php 	
include('config.php');
$db = new db();
$id_petugas = $_GET['id_petugas'];
if(! is_null($id_petugas))
{
	$data_petugas = $db->get_by_id_petugas($id_petugas);
}
else
{
	header('location:petugas.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Update Data Petugas</h3>
<hr/>
<form method="post" action="action.php?action=updatepetugas">
<input type="hidden" name="id_petugas" value="<?php echo $data_petugas['id_petugas']; ?>"/>
<table>
	<tr>
		<td>Username Petugas</td>
		<td>:</td>
		<td><input type="text" name="username" value="<?php echo $data_petugas['username']; ?>"/></td>
	</tr>
    <tr>
		<td>Nama Petugas</td>
		<td>:</td>
		<td><input type="text" name="nama_petugas" value="<?php echo $data_petugas['nama_petugas']; ?>"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="text" name="password" value="<?php echo $data_petugas['password']; ?>"/></td>
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