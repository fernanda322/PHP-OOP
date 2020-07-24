<!DOCTYPE HTML>
<html>
 <head>
     <title>Tambah Data</title>
 </head>
 <body>
 <center>
    <h3>Tambah Data </h3>
    

    <form method="POST" action="action.php?action=add">
        <table border=1>

            <tr>
                <td>NISN</td>
                <td>:</td>
                <td><input type="text" name="nisn"></td>
            </tr>

             
            <tr>
                <td>NIS</td>
                <td>:</td>
                <td><input type="text" name="nis"></td>
            </tr>

             
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>

             
            <tr>
                <td>Id Kelas</td>
                <td>:</td>
                <td><input type="text" name="id_kelas"></td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td>No.Telp</td>
                <td>:</td>
                <td><input type="text" name="no_telp"></td>
            </tr>


            <tr>
                <td>Id_SPP</td>
                <td>:</td>
                <td><input type="text" name="id_spp"></td>
            </tr>

            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="tombol" value="Simpan"></td>
            </tr>

        </table>
    </form>
 </body>
</html>