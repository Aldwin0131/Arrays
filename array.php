<!DOCTYPE html>
<html>
</html>
<body>

<?php
    
    $numbers = array(2,4,6,8,10);
    print_r($numbers);
    foreach($numbers as &$nuber){
        $number = $number * 2;
    }
    {
        echo "$array<br/>";
    }
    echo '<br />';
    unset($number);
    print_r($numbers);
    {
        echo "$numbers<br/>";
    }
    
    echo (array_product($numbers));
    
    
    

?>
   

</body>