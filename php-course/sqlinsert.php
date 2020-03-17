
<?php

  $conn = mysqli_connect('localhost','root','','coursephp');
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $tgl = $_POST['tanggal'];
  $tinggal = $_POST['opsi'];
  $alamat = htmlspecialchars($_POST['alamat']);
  $kelamin = 'No';
  $hobi = 'No';
  if(isset($_POST['laki'])){
    $kelamin = 'L';

  }else{
    $kelamin = 'P';

  }
  if(isset($_POST['radio1'])){
     $hobi = $_POST['radio1'];
  }

  if(isset($_POST['submit'])){
    $query = mysqli_query($conn, "INSERT INTO studentdata VALUES ($nim,'$nama','$tgl','$kelamin','$alamat','$tinggal','$hobi')");
    if($query){
        echo 'Insert success <br><br>';
    }
  }else{
      echo mysqli_error($conn);
  }

 ?>
