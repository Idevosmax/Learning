<?php

// This piece of code checks whether a number is prime, returns true if the number is a prime number and false if otherwise without any loop;
class PrimeCheck 
{
    public $number;
    public $modarray= [];
    public $result = [];
    

    
    public function isprime($num)
    {
        
        if($num == 2 || $num == 3 || $num == 5 || $num == 7 ){
            return true;
        }else{
            $this->number = $num;
       
            $div = [2,3,4,5,6,7,8,9,10];
            array_walk($div,function($item){
               
                $this->modarray[] =  $this->number/$item;
                return $this->modarray;
            });
           
           array_walk($this->modarray,function($item){
               if(strpos($item,".") !== false){
                
                    $this->result[] = "false";
                
               }else{
                    $this->result[] = "true";
               }
                
                    return $this->result;
            });
           if(in_array("true",$this->result)){
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
        $bool =  $check->isprime(37);
        if($bool){
           echo "true";
        }else{
           echo "false";
        }
?>

