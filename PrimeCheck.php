<?php

// This piece of code checks whether a number is prime, returns true if the number is a prime number and false if otherwise without any loop;
class PrimeCheck 
{
    public function isprime($num)
    {
        if($num == 2 || $num == 3 || $num == 5 || $num == 7 ){
            return true;
        }else{
            $div = [2,3,4,5,6,7,8,9,10];
            $modarray = array_map(
                function($item) use ($num) { return $num/$item; }, 
                $div
            );
            $result = array_map(function($item) {
               if(is_float($item)){
                    return "false";
               }else{
                    return "true";
               }
            }, $modarray);
           return !in_array("true",$result);
        }
    }
}

$check = new PrimeCheck();
// pass the number to check as an argument to the @isprime method 
$bool =  $check->isprime(12);
if($bool){
   echo "true";
}else{
   echo "false";
}
