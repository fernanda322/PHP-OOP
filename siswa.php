<?php
    include('config.php');
   
    $db = new db();
    $siswa = $db->tampil_data();
    session_start();

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Tampilan Admin</title>
    </head>
    <center>
    <h1> ---- Tampilan Admin ---- </h1>
    <body>
       
    <table border="1">
        <tr>
            <th>No</td>
            <th>NISN</th>
			<th>NIS</th>
			<th>Nama</th>
			<th>Id Kelas</th>
            <th>Alamat</th>
            <th>No. Telp</th>
            <th>Id SPP</th>
            <?php if($_SESSION['level']=='admin'):?>
            <th>Aksi</th>
            <?php endif ?>

        </tr>
        <?php
        $no = 1;
        foreach($siswa as $row)
        {

        ?>

            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['nisn']; ?></td>
                <td><?php echo $row['nis']; ?> </td>
                <td><?php echo $row['nama'];?></td>
                <td><?php echo $row['id_kelas'];?></td>
                <td><?php echo $row['alamat'];?></td>
                <td><?php echo $row['no_telp'];?></td>
                <td><?php echo $row['id_spp'];?></td>
                  <?php if($_SESSION['level']=='admin'):?>
                <td> 
                <a href="edit_siswa.php?nisn=<?php echo $row['nisn']; ?>">Update</a> | 
                <a href="action.php?action=delete&nisn=<?php echo $row['nisn']; ?>">Delete </a> |
               
                </td>
                <?php endif ?>
            </tr>
            <?php
             }
        ?>
       
</table>
<br>
    <a href="action.php?action=logout"><button type="button">Logout</button></a> |
    <a href="home.php"><button type="button">Back</button></a> |
    <?php if($_SESSION['level']=='admin'):?>
      <a href="tambah_data.php"><button type="button">Add Data</button></a>
      
    <?php endif ?>
 </body>
 </center>
</html>