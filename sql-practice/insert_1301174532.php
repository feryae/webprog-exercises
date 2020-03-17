<?php 
    require_once("config_1301174532.php");
    //INSERT CODE HERE TO INPUT TO DATABASE
    //NOTE: AFTER THE INPUT SUCCEED THEN REDIRECT TO "REKAP NILAI" PAGE
    $result = $conn->query('INSERT INTO nilai VALUES('.$_POST['nim'].','.$_POST['uts'].','.$_POST['uas'].','.$_POST['kuis'].','.$_POST['tubes'].');');
    if($result){
    	  header("Location: rekapNilai_1301174532.php");
          exit;
    }
?>