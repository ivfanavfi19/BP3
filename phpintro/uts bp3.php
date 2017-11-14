<html>
<head>
<title> UTS bahasa pemrograman 3 praktikum</title>
</head>

<body>
<form action="" method="POST">

<p> 1. pertambahan <br>
    2. pengurangan <br>
    3. Pengalian   <br>
    4. Pembagian   </pr><br>


<td><input type="number" name="pil"  placeholder="pilihan"><br>
<td><input type="number" name="nil1" value="0"><br>
<td><input type="number" name="nil2" value="0"><br>
<br><input type="submit"  value="proses"><br/><th>
</form>
<?php

include_once 'uts.function.php';

$perhitungan = new perhitungan();

$pilihan="";
$nilai1;
$nilai2;
$ben="";

if(isset($_POST['pil'])){

    $pilihan    =$_POST ['pil'];
}


if(isset($_POST['nil1'])){
    
        $nilai1    =$_POST ['nil1'];
    }


if(isset($_POST['nil2'])){
        
        $nilai2    =$_POST ['nil2'];
        }

if(isset($_POST['ben'])){
            
        $ben    =$_POST ['ben'];
            }


switch($pilihan){

case '1';

$perhitungan->sum($nilai1,$nilai2);

echo "hasil dari $nilai1 + $nilai2 = ". $perhitungan->sum($nilai1,$nilai2);
break;

case '2';

$perhitungan->minus($nilai1,$nilai2);

echo "hasil dari $nilai1 - $nilai2 = ". $perhitungan->minus($nilai1,$nilai2);
break;

case '3';

$perhitungan->times($nilai1,$nilai2);

echo "hasil dari $nilai1 x $nilai2 = ". $perhitungan->times($nilai1,$nilai2);
break;

case '4';

$perhitungan->divide($nilai1,$nilai2);

echo "hasil dari $nilai1 : $nilai2 = ". $perhitungan->divide($nilai1,$nilai2);
break;

default:
echo "masukkan pilihan ";
break;
}
echo "<br><br>";


    for($i=0;$i<=5;$i++){
        echo "**********************************************<br>";
    }


?>
</body>
</html>