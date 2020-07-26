<?php
include('config.php');

$db = new db();
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Welcome SPK_SPP_Fernanda Ramadhan</title>
    </head>
    
    
        <a href="siswa.php">siswa</a>
        <?php if($_SESSION['level']=='admin'):?>
        <a href="petugas.php">petugas</a>
        <a href="spp.php">spp</a>
        <a href="kelas.php">kelas</a>
        <?php endif?>

        <?php if($_SESSION['level']=='petugas'):?>
        <a href="spp.php">spp</a>
        <?php endif?>
    <a href="action.php?action=logout">Logout</a>
<br>
<ul>
              
              </ul>