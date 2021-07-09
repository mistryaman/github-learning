<?php
//sum of number
$num = 52;  
$sum=0; $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
 {  
   $rem=$num%10;  
   $sum = $sum + $rem;  
   $num=$num/10;  
  }  
 echo "Sum of digits 52 is $sum <br>";  

//odd or even

$number = 12;
if ($number%2 == 0) {
    echo "Number $number is Even <br>";
}else {
    echo "Number $number is odd <br>";
}

//table of given number

define ('x', 8);

for ($i=1; $i<=10; $i++) { 
    echo $i*x;
    echo "<br>";
}

//factorial

$num = 4;
$factorial = 1;
for ($i=$num; $i>=1 ; $i--) { 
        $factorial = $factorial*$i;
}
echo "Factorial of $num is $factorial.";

//palindrome
function palindrome($n){
    $number = $n;
    $sum =0;
    while (floor($number)){
        $rem = $number%10;
        $sum = $sum*10+$rem;
        $number=$number/10;
    }
    return $sum;
}
$input=1235321;
$num = palindrome($input);
if ($input==$num) {
    echo "number $input is palindrom<br>";
}else {
    echo "number $input is not palindrome<br>";
}


class MyClass {
    public $str = 'A';
    }
    $obj1 = new MyClass();
    $obj2 = $obj1;
    $obj3 = $obj2;
    $obj4 = $obj1;
    $obj1->prop = 'B';
    $obj2->prop = 'C';
    $obj3->prop = 'D';
    $obj4->prop = 'E';
    echo $obj1->prop;


    class MyClass {
        public $arr;
        public function __construct(array $arr) { $this->arr = $arr; }
        }
        $arr = array();
        $obj1 = new MyClass($arr);
        $obj2 = $obj1;
        $obj3 = $obj2;
        $obj4 = $obj1;
        $obj1->arr[] = 'B';
        $obj2->arr[] = 'C';
        $obj3->arr[] = 'D';
        $obj4->arr[] = 'E';
        echo count($arr);
        
        
?>

