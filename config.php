<?php

    class db{

        var $host = "localhost";
        var $username = "root";
        var $password = "";
        var $database = "db_spp";
        var $koneksi = "";

        
        function __construct(){
            $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
            if(mysqli_connect_errno())
            {
                echo" Koneksi database gagal : ".mysqli_connect_error();
            }
        }
        //siswa
        function tampil_data()
        {
            $data = mysqli_query($this->koneksi,"select * from siswa");
            while($row = mysqli_fetch_array($data)){
                $hasil[] = $row;
            }
            return $hasil;
        }
        
    function tampil_data_spp(){
		$data = mysqli_query($this->koneksi, "SELECT * FROM spp");
        while($row = mysqli_fetch_array($data)){
            $hasil[]=$row;
        }
        if(!isset($hasil)){
            $hasil=[];
        }
        return $hasil;
    }
    
    //DATA SPP
    function get_by_id_spp($id_spp)
	{
		$query = mysqli_query($this->koneksi,"select * from spp where id_spp='$id_spp'");
		return $query->fetch_array();
    }

    function update_data_spp($id_spp, $tahun, $nominal)
	{
		$query = mysqli_query($this->koneksi,"update spp set tahun = '$tahun', nominal = '$nominal' where id_spp='$id_spp'");
    }
    
    function delete_data_spp($id_spp)
	{
		$query = mysqli_query($this->koneksi,"delete from spp where id_spp='$id_spp'");
    }

    function tambah_data_spp($id_spp, $tahun, $nominal)
	{
		mysqli_query($this->koneksi,"insert into spp values ('', '$tahun', '$nominal')");
    }
    
    //kelas
    function tampil_data_kelas(){
		$data = mysqli_query($this->koneksi,"select * from kelas");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
        }
        if(!isset($hasil)){
            $hasil=[];
        }
		return $hasil;
    }
    function get_by_id_kelas($id_kelas)
	{
		$query = mysqli_query($this->koneksi,"select * from kelas where id_kelas='$id_kelas'");
		return $query->fetch_array();
    }

    function update_data_kelas($id_kelas, $nama_kelas, $kompetensi_keahlian)
	{
		$query = mysqli_query($this->koneksi,"update kelas set nama_kelas = '$nama_kelas', kompetensi_keahlian = '$kompetensi_keahlian' where id_kelas='$id_kelas'");
    }
    
    function delete_data_kelas($id_kelas)
	{
		$query = mysqli_query($this->koneksi,"delete from kelas where id_kelas='$id_kelas'");
    }

    function tambah_data_kelas($id_kelas, $nama_kelas, $kompetensi_keahlian)
	{
		mysqli_query($this->koneksi,"insert into kelas values ('', '$nama_kelas', '$kompetensi_keahlian')");
    }

        //petugas    
        
         function tampil_data_petugas(){
	        	$data = mysqli_query($this->koneksi,"select * from petugas where level='petugas'");
	        	while($row = mysqli_fetch_array($data)){
	        		$hasil[] = $row;
             }
             if(!isset($hasil)){
                 $hasil=[];
             }
	        	return $hasil;
         }
         function get_by_id_petugas($id_petugas)
	    {
	    	$query = mysqli_query($this->koneksi,"select * from petugas where id_petugas='$id_petugas'");
	    	return $query->fetch_array();
        }
    
        function update_data_petugas($id_petugas, $username, $nama_petugas, $password, $level)
	    {
	    	$query = mysqli_query($this->koneksi,"update petugas set username = '$username', nama_petugas = '$nama_petugas', password = '$password', level = '$level' where id_petugas='$id_petugas'");
        }
        
        function delete_data_petugas($id_petugas)
	    {
	    	$query = mysqli_query($this->koneksi,"delete from petugas where id_petugas='$id_petugas'");
        }
    
        function tambah_data_petugas($id_petugas, $username, $nama_petugas, $password, $level)
	    {
	    	mysqli_query($this->koneksi,"insert into petugas values ('$id_petugas', '$username', '$nama_petugas', '$password', '$level')");
        }


        function tambah_data($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
        {
            mysqli_query($this->koneksi,"INSERT INTO siswa values('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp','$id_spp')");
        }


        function get_by_id($nisn)
        {
            $query = mysqli_query($this->koneksi,"SELECT * FROM siswa WHERE nisn='$nisn'");
            return $query->fetch_array();
        }

        
        function update_data($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
        {
            $query = mysqli_query($this->koneksi, "UPDATE siswa SET nisn='$nisn',nis='$nis',nama='$nama',id_kelas='$id_kelas',alamat='$alamat',no_telp='$no_telp',id_spp='$id_spp' WHERE nisn='$nisn'");
        }

        function delete_data($nisn)
        {
            $query = mysqli_query($this->koneksi, "DELETE FROM siswa WHERE nisn='$nisn'");
        }

        function login($user, $username, $pass) {
            if($user == "siswa") {
                $query = mysqli_query($this->koneksi, "SELECT * FROM siswa WHERE nisn='$username' AND nis='$pass'");
                if($query->num_rows > 0) {
                    session_start();
                    $_SESSION['level'] = "siswa";
                    $_SESSION['username'] = "$username";
                    return TRUE;
                }
                else {
                    return FALSE;
                }
            }
            else if($user == "admin") {
                $query = mysqli_query($this->koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$pass'");
                if($query->num_rows > 0) {
                    session_start();
                    $_SESSION['level'] = "admin";
                    $_SESSION['username'] = "$username";
                    return TRUE;
                }
                else {
                    return FALSE;
                }
            }

            else if($user == "petugas") {
                $query = mysqli_query($this->koneksi, "SELECT * FROM petugas WHERE username='$username' AND password='$pass'");
                if($query->num_rows > 0) {
                    session_start();
                    $_SESSION['level'] = "petugas";
                    $_SESSION['username'] = "$username";
                    return TRUE;
                }
                else {
                    return FALSE;
                }
            }

        }


    }
    

     
?>