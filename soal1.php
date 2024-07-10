
<?php
  //number type array for sum
    $input = "1,2,3,4,5,6,7";
  //give zero output for sum
    $output = 0;
  //foreach to each all number in input variable
    foreach(explode(',',$input) as $val)
         $output +=intval($val);
    echo $output; //28
?>




<?php 
//second type

$input = ['1,2,3,4,5,6,7'];
$output = array_sum(explode(',',$input));

?>
