<!DOCTYPE html>
<html lang="en">
<?php


require_once("config_1301174532.php");
session_start();
//INSERT CODE HERE
//GET NIM FROM DATABASE
$nim = $_SESSION['nim'];
//GET "NILAI" FROM DATABASE
$uts = $conn->query('SELECT uts FROM nilai  WHERE id ='.$_SESSION['nim'].' ;')->fetch_object()->uts;
$uas = $conn->query('SELECT uas FROM nilai  WHERE id ='.$_SESSION['nim'].' ;')->fetch_object()->uas;
$kuis = $conn->query('SELECT kuis FROM nilai  WHERE id ='.$_SESSION['nim'].' ;')->fetch_object()->kuis;
$tubes = $conn->query('SELECT tubes FROM nilai  WHERE id ='.$_SESSION['nim'].' ;')->fetch_object()->tubes;
$_SESSION['uts'] = $uts;
$_SESSION['uas'] = $uas;
$_SESSION['kuis'] = $kuis;
$_SESSION['tubes'] = $tubes;


/*MAKE A FUNCTION TO MAKE INDEX
    A if 80 < total <= 100, 
    AB if 70 < total <= 80, 
    B if 60 < total <= 70, 
    C if 50 < total <= 60 dan 
    D if 40 < total <= 50, 
    E if else

    WHERE total = uts*25% + uas*25% + kuis*15% + tubes*35%
*/
    function index($uts,$uas,$kuis,$tubes){
        $total = (0.25 * $uts) + (0.25 * $uas) + (0.15 * $kuis) + (0.35 * $tubes);
        $index = 'E';
        if ($total<40){
         //
        }else if(($total > 40) && ($total <=50)){
            $index = 'D';
        }else if (($total > 50) && ($total <=60)){
            $index = 'C';
        }else if (($total > 60) && ($total <=70)){
            $index = 'B';
        }else if (($total > 70) && ($total <=80)){
            $index = 'AB';
        }else if (($total > 80) && ($total <=100)){
            $index = 'A';
        }
        return $index;
    }
/*MAKE A FUNCTION TO MAKE DESCRIPTION
    Index A then description = Kece, 
    Index ABthen description = Mantap, 
    Index B then description = Ya,  
    Index C then description = Hm, 
    Index D then description = Aduh, 
    Index E then description = FILL IT BY YOURSELF
*/
    function description($index){
        $desc = '';
        switch ($index) {
            case 'A':
                $index = 'Kece';
                break;
            case 'AB':
                $index = 'Mantap';
                break;
            case 'B':
                $index = 'Ya';
                break;
            case 'C':
                $index = 'Hm';
                break;
            case 'D':
                $index = 'Aduh';
                break;
            default:
                $index = 'FILL IT BY YOURSELF';
                break;
        }
    }

    $index1 = index($uts,$uas,$kuis,$tubes);
    $desc1 = description($index1);

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekap Nilai - <?= $nim?>]</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
    <div class="content">
        <div class="show">
            <h1>rekap nilai <?= $nim?></h1>
            <table>
                <tr>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>Kuis</th>
                    <th>Tubes</th>
                    <th>Index</th>
                    <th>Keterangan</th>
                    <th>Aksi</th>
                </tr>

                <!-- MAKE A LOOP TO OUTPUT FROM SCORE THAT WAS TAKEN FROM DATABASE-->

                <tr>
                    <td><?php echo $uts  ?><!--ECHO SCORE UTS--></td>
                    <td><?php echo $uas  ?><!--ECHO SCORE UTS--></td>
                    <td><?php echo $kuis  ?><!--ECHO SCORE UTS--></td>
                    <td><?php echo $tubes  ?><!--ECHO SCORE UTS--></td>
                    <td><?php echo  $index1 ?><!--ECHO INDEX--></td>
                    <td><?php echo $desc1  ?><!--ECHO "KETERANGAN"--></td>
                    <td>
                        <?php echo " <a href='edit_1301174532.php'>edit</a>" ?>
                        <?php echo " <a href='hapus_1301174532.php'>Hapus</a>" ?>
                    </td>
                </tr>
            </table>
            <a href="logout_1301174532.php">Logout</a>
        </div>
    </div>
</body>
</html>