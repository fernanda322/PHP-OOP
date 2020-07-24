<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h3>Tambah Data Petugas</h3>
<hr/>
<form method="post" action="action.php?action=addpetugas">
<table>
	<tr>
		<td>Username Petugas</td>
		<td>:</td>
		<td><input type="text" name="username"/></td>
	</tr>
	<tr>
		<td>Nama Petugas</td>
		<td>:</td>
		<td><input type="text" name="nama_petugas"/></td>
	</tr>
	<tr>
		<td>Password</td>
		<td>:</td>
		<td><input type="password" name="password"/></td>
	</tr>
    <tr>
		<td>Level</td>
		<td>:</td>
		<td><input type="text" name="level" value="petugas" readonly/></td>
	</tr>
	<tr>
		<td></td>
		<td></td>
		<td><input type="submit" name="tombol" value="Simpan"/></td>
	</tr>
</table>
</form>
</body>
</html>