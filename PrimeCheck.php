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
            $modarray= [];
            array_walk($div,function($item) use($num,&$modarray) {
                $modarray[] =  $num/$item;
                return $modarray;
            });
            $result = [];
           array_walk($modarray,function($item) use(&$result){
               if(strpos($item,".") !== false){
                
                    $result[] = "false";
                
               }else{
                    $result[] = "true";
               }
                
                    return $result;
            });
           if(in_array("true",$result)){
               return false;
           }else{
               return true;
               
           }
        }
        
    }
    
    
}
?>


<?php

        $check = new PrimeCheck();
        // pass the number to check as an argument to the @isprime method 
        $bool =  $check->isprime(1231);
        if($bool){
           echo "true";
        }else{
           echo "false";
        }
?>

