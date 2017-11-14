<html>
<head>
<title>Tugas 1&3 pemrograman 3</title>
</head>

<body>
<form action="" method="POST">

<TABLE BORDER="1" align="center">

<p> 1. Menampilkan Bilangan prima <br>
    2. Menampilkan Bilangan Ganjil <br>
    3. Menampilkan Bilangan Genap </p></br>
<tr>
<td><input type="number" name="na"  placeholder="masukkan nilai awal"><br>
<br><input type="number" name="ba"  placeholder="masukkan batas akhir"><br>
<br><input type="number" name="pol"  placeholder="pilihan"><br>
<br><input type="submit"  value="proses"><br/><th>

</form>

<?php

    $nilaiawal="";
    $nilaiakhir="";
    $pil="";
if(isset($_POST['pol'])){
   
    $pil        = $_POST ['pol'];}

if(isset($_POST['ba'])){
    $nilaiakhir = $_POST ['ba'];
}

if(isset($_POST['na'])){
    $nilaiawal = $_POST ['na'];
}




    $j="";
    
    switch($pil){
    
        case '1':
    
        echo "Bilangan Prima </br> <br>";
        
        for($j=$nilaiawal; $j <= $nilaiakhir;){
    
            
    
            if ($j %$j == 0 
            && $j != 0 
            && $j != 1
            && $j%2 !=0 
            && $j%3 !=0 
            && $j%5 !=0 
            && $j%7 !=0 
            
            && $j <= 100){
                
                echo "$j <br>";
            }
$j++;
        }
        
        break;
        
        case '2':
    
        echo "Bilangan Ganjil </br> <br>";
    
        while ($j<=$nilaiakhir){
            
            if($j %2 == 1){
                echo "$j <br>";
		
            }$j++;
        }
    
        break;
    
        case '3':
    
        echo "Bilangan Genap </br> <br>";
    
        do {
            
                echo "$j <br>";
	$j+=2;
            }while ($j<=$nilaiakhir);
        
    
        break;
    
    
        default:
            echo "masukkan pilihan ";
            break;
    
    
    }

?>

</body>
</html>