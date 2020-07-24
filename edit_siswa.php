<?php

    include('config.php');
   
    $db = new db();
     $nisn = $_GET['nisn'];

     if(! is_null($nisn))
    {
        $siswa = $db->get_by_id($nisn);
    }else{
        header('location:siswa.php');
    } 
    
?>

<!DOCTYPE html>
<html>
<head>
	<title>Update Data Siswa</title>
</head>
<body>

<hr/>
    <form method="POST" action="action.php?action=update">

    <input type="hidden" name="nisn" value="<?php echo $siswa['nisn']; ?>"/> 

    <table>
        <tr>
            <td>NISN</td>
            <td>:</td>
            <td><input type="text" name="" disabled  value="<?php echo $siswa['nisn']; ?>"/> </td>
        </tr>   

        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" name="nis" value="<?php echo $siswa['nis']; ?>"/> </td>
        </tr>   

        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" value="<?php echo $siswa['nama']; ?>"/> </td>
        </tr>   

        <tr>
            <td>Id_Kelas</td>
            <td>:</td>
            <td><input type="text" name="id_kelas" value="<?php echo $siswa['id_kelas']; ?>"/> </td>
        </tr>   

        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" value="<?php echo $siswa['alamat']; ?>"/> </td>
        </tr>   

        <tr>
            <td>No.Telp</td>
            <td>:</td>
            <td><input type="text" name="no_telp" value="<?php echo $siswa['no_telp']; ?>"/> </td>
        </tr>   

        <tr>
            <td>Id_SPP</td>
            <td>:</td>
            <td><input type="text" name="id_spp" value="<?php echo $siswa['id_spp']; ?>"/> </td>
        </tr>   

        <tr>
            <td></td>
            <td></td>
            <td><input type="submit" name="tombol" value="Update"/> </td>
        </tr>

    </table>
</form>
</body>
</html>