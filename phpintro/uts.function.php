<?php

class perhitungan
{

public function sum($x="0", $y="0"){
    
        $z= $x+$y;

        $hsl=1;
        return $z;
       
    }
    
public function minus($x="0", $y="0"){
        
            $z= $x-$y;
            return $z;
        }
    
public function times($x="0", $y="0"){
            
                $z= $x*$y;
                return $z;
            }
    
public function divide($x, $y){
                if($y==0){
                    $z="tak terhingga";
                }
                else{
                    $z= $x/$y;
                }return $z;
                }


}

?>