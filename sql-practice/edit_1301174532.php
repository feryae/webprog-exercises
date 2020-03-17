<!DOCTYPE html>
<html lang="en">
<?php 

require_once("config_1301174532.php");
session_start();
//INSERT CODE HERE
//INSERT QUERY TO GET THE VALUE THAT WILL BE UPDATED
$nim = $_SESSION['nim'];
if(isset($_POST["submit"])){
    $result = $conn->query('UPDATE nilai SET uts ='.$_POST['uts'].' , uas ='.$_POST['uas'].' , kuis = '.$_POST['kuis'].
                ' , tubes ='.$_POST['tubes'].' WHERE nim = '.$_POST['nim'].' ; ');
    if($result){
        header("Location: rekapNilai_1301174532.php");
        exit;
    }else{
        header("Location: rekapNilai_1301174532.php");
        exit;
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai-<?= $nim?></title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="input">
            <h1>input nilai - <?= $nim?></h1>
			<!-- MAKE A LOOP TO OUTPUT THE RESULT OF THE VALUES THAT WAS TAKEN FROM DATABASE -->
            <form action="rekapNilai_1301174532.php" method="POST"><!--CHANGE THE ID-->
                <input type="text" placeholder="NIM" name="nim" value='<?php echo $_SESSION['nim'] ?>' readonly><!--CHANGE VALUE TO NIM-->
                <input type="text" placeholder="UTS" name="uts" value='<?php echo $_SESSION['uts'] ?>'><!--CHANGE VALUE TO VALUE UTS-->
                <input type="text" placeholder="UAS" name="uas" value='<?php echo $_SESSION['uas'] ?>'><!--CHANGE VALUE TO VALUE UAS-->
                <input type="text" placeholder="Kuis" name="kuis"value='<?php echo $_SESSION['kuis'] ?>'><!--CHANGE VALUE TO VALUE KUIS-->
                <input type="text" placeholder="Tubes" name="tubes" value='<?php echo $_SESSION['tubes'] ?>'><!--CHANGE VALUE TO VALUE TUBES-->
                <button type="submit" name='submit'>Edit</button>
            </form>
        </div>
    </div>
</body>
</html>