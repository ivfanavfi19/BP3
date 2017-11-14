<?php




$nila="";
$batak="";
$j="";

if(isset($_POST['pil'],$_post['b1'])){
  $nila = $_POST['na'];
  $batak=$_post['ba'];
  
  
}

?>

<html><body><CENTER>


<form action="tugas3.php" method="POST">

<TABLE BORDER="1">

<Tr><p> Menampilkan bilangan Ganjil & Bilangan Genap</p></br>

<Td><input type="number" name="na" value="<?php echo $pilihan?>" placeholder="masukkan nilai awal">
<br><input type="number" name="ba"  placeholder="masukkan batas akhir">
<td><input type="submit"  value="proses"><br/><TD>
Ganjil<input type="text" readonly  
        
        value="<?php 
        
        for ($j=$nila; $j<=$batak; $j+=2){

          if($j%3==1){
            echo $j;
          }
        }

        
                
                ?>" style="width:250px;"/>


<br>


Genap<input type="text" readonly  value="<?php ?>" style="width:250px;"/>
</TABLE>
</form>
</body>
</html>