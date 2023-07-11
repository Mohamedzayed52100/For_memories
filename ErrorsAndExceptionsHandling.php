<?php






try{

    var_dump($this);


}catch(Error $e){
    var_dump($e->getMessage());

}




/****************** */


 $num =5;
if($num ==5){
    throw new Exception("Number is 5");


}