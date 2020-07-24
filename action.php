<?php

    include('config.php');
 
    $conn = new db();
    
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $check = $conn->login($_POST['user'], $_POST['username'], $_POST['password']);
        if($check) {
            if($_SESSION['level'] == "siswa"){
            ?><script>alert("Login Sukses !");
            window.location.href="home.php";</script><?php
            }
            else if($_SESSION['level'] == "petugas"){
            ?><script>alert("Login Sukses !");
            window.location.href="home.php";</script><?php
            }
            else if($_SESSION['level'] == "admin"){
                ?><script>alert("Login Sukses !");
                window.location.href="home.php";</script><?php
                }
        }
        else {
            ?><script>alert("Username Atau Password Salah !");
            window.location.href="login.php";</script><?php
        }

    }
    
   
    $action = $_GET['action'];
    //siswa 
    if($action == "add"){
        $conn ->tambah_data($_POST['nisn'],$_POST['nis'],$_POST['nama'],$_POST['id_kelas'],$_POST['alamat'],$_POST['no_telp'],$_POST['id_spp']);
        header('location:siswa.php');

    }else if($action == "update"){
        $conn ->update_data($_POST['nisn'],$_POST['nis'],$_POST['nama'],$_POST['id_kelas'],$_POST['alamat'],$_POST['no_telp'],$_POST['id_spp']);
        header('location:siswa.php');
        
    }else if($action == "delete"){
        $nisn = $_GET['nisn'];
	    $conn->delete_data($nisn);
	    header('location:siswa.php');
    }
    elseif($action == 'logout'){
        session_destroy();	
       
        header("location:login.php");
    }
    //petugas
    if($action == "addpetugas")
    {
        $conn->tambah_data_petugas($_POST['id_petugas'],$_POST['username'],$_POST['nama_petugas'],$_POST['password'],'petugas');
        header('location:petugas.php');
    }
    elseif($action=="updatepetugas")
    {
    	$conn->update_data_petugas($_POST['id_petugas'],$_POST['username'],$_POST['nama_petugas'],$_POST['password'],'petugas');
    	header('location:petugas.php');
    }
    elseif($action=="deletepetugas")
    {
    	$id_petugas = $_GET['id_petugas'];
    	$conn->delete_data_petugas($id_petugas);
    	header('location:petugas.php');
    }
    //spp
    if($action == "addspp")
    {
        $conn->tambah_data_spp($_POST['id_spp'],$_POST['tahun'],$_POST['nominal']);
        header('location:spp.php');
    }
    elseif($action=="updatespp")
    {
    	$conn->update_data_spp($_POST['id_spp'],$_POST['tahun'],$_POST['nominal']);
    	header('location:spp.php');
    }
    elseif($action=="deletespp")
    {
    	$id_spp = $_GET['id_spp'];
    	$conn->delete_data_spp($id_spp);
    	header('location:spp.php');
    }
    //kelas
    if($action == "addkelas")
    {
        $conn->tambah_data_kelas($_POST['id_kelas'],$_POST['nama_kelas'],$_POST['kompetensi_keahlian']);
        header('location:kelas.php');
    }
    elseif($action=="updatekelas")
    {
    	$conn->update_data_kelas($_POST['id_kelas'],$_POST['nama_kelas'],$_POST['kompetensi_keahlian']);
    	header('location:kelas.php');
    }
    elseif($action=="deletekelas")
    {
    	$id_kelas = $_GET['id_kelas'];
    	$conn->delete_data_kelas($id_kelas);
    	header('location:kelas.php');
    }

?>