<!DOCTYPE html>
<html lang="en">
<?php 

require_once("config_1301174532.php");
session_start();

//INSERT CODE HERE
//NOTE: IF NIM AND PASSWORD IS RIGHT THEN REDIRECT TO "INPUT NILAI" PAGE. IF WRONG, REDIRECT BACK TO LOGIN MENU

if(isset($_POST["submit"])){
    $result = ('SELECT * FROM akun  WHERE nim ='.$_POST['nim'].' AND password ='. $_POST['password'].' ;');
    if(mysqli_num_rows($result) === 0){
            $_SESSION['nim'] = $_POST['nim'];
            header("Location: login_1301174532.php");
            exit;
    }else{
            header("Location: inputNilai_1301174532.php");
            exit;
    }   
}   
         
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Nilai - <?php echo $_SESSION['nim'] ?><!--ECHO NIM FROM DATABASE-->
    </title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="input">
            <h1>input nilai - <?php echo $_SESSION['nim'] ?> <!--ECHO NIM FROM DATABASE--></h1>
            <form action="insert_1301174532.php" method="POST">
                <input type="text" placeholder="NIM" name="nim" value= '<?php echo $_SESSION['nim'] ?>' readonly>
                <input type="text" placeholder="UTS" name="uts">
                <input type="text" placeholder="UAS" name="uas">
                <input type="text" placeholder="Kuis" name="kuis">
                <input type="text" placeholder="Tubes" name="tubes">
                <button type="submit" name='submit'>Input</button>
            </form>
        </div>
    </div>
</body>
</html>