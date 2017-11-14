<?php 

$Andi="";

if(isset($_POST['nilai'])){
  $Andi = $_POST['nilai'];
}

$p;


if($Andi>=0&&$Andi!=-0){

if ($Andi>+100){
  $p="CUR"; $b="CURANG"; $a="Andi";
}

elseif ($Andi>=90&&$Andi<=100){
    $p="A "; $b="lulus! Dengan nilai"; $a="SELAMAT, Andi";
  }

elseif ($Andi>=70&&$Andi<90){
    $p="B "; $b="lulus! Dengan nilai"; $a="SELAMAT, Andi";
  }
elseif ($Andi>=60&&$Andi<=69){
    $p="C "; $b="lulus! Dengan nilai"; $a="SELAMAT, Andi";
  }

elseif ($Andi>=50&&$Andi<=59){
    $p="D "; $b="tidak lulus! Dengan nilai"; $a="Maaf, Andi";
  }

elseif ($Andi>=0&&$Andi<=49){
    $p="E "; $b="tidak lulus! Dengan nilai"; $a="Maaf, Andi";
  }

}

else {
  $p="tidak mengikuti ujian"; $b=""; $a="Maaf, Andi";
}

?>

<html><body><CENTER>
<TABLE BORDER="5">


<form action="tugas2.php" method="POST">

<td><input type="text" name="nilai"  placeholder="masukkan nilai andi"><br><td>
<td><input type="submit"  value="proses"><br/><td>
<td><input type="text" readonly  value="<?php echo $a?> <?php echo $b?> <?php echo $p?>" style="width:250px;"/><td>
</TABLE>
</form>
</body>
</html>