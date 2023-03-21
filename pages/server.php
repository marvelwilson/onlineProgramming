<?php

//Data types

//   string $name = 'me'
//   integer $num = 1
//   float $float = 0.89
//   boolean Sbool = true or false
//   arrays $arrays = []

// define('username', 'Marvel Wilson');

// $username = "Marveltech";
// echo  $username. '  is also known as ' . username;

//Indexed array

$indexed = [60, 39, 4];

// print_r($indexed[2]);


// echo $indexed; //Error



//String Manipulation

// $username = "Marvel wilson";

// echo strlen($username); //String length
// echo "<br>";
// print_r(str_split($username, 1)); //String Split
// echo "<br>";
// echo str_shuffle($username); //String Shuffle
// echo "<br>";


// //Numbers

// $amount = 89388;
// $amount2 = '89388';

// echo number_format($amount); //Format number
// echo "<br>";
// echo is_int($amount); //Checking if is int
// echo "<br>";
// $newAmount =  (int)$amount2; // parse String to Integer
// echo is_int($newAmount); 
// echo "<br>";
// //Maths

// $num = 893.88;

// echo ceil($num); //Ceil
// echo "<br>";
// echo round($num); //Round
// echo "<br>";
// echo max($indexed);
// echo "<br>";

// echo "<br>";



// $num1 = 200;
// // $num2 = '200';
// const num2 = '200';
// // define('num2','200');
// // echo num2;
// if ($num1 == num2) {
//     $num2 = (int) num2;
// }
// if ($num1 === num2) {
//     echo true;
// }

// Arithmetic operators
//   * / + - 

// Assignment operators
//  = 

$num1='099';
// $num2 = 3;

// $total = $num1 += $num2;
// for ($i=0; $i <= 10; $i++) { 
//     echo $i."<br>";
// }

// echo $num1;
// $total = $num1 * $num2;

// echo $total;

// Comparison operators
// == ===

// !=
//  < >
//  <= >=

// if (isset($num1)) {
//    echo 'false';
// }

// Increment/Decrement operators

//++ //Increment
//-- //Decrement

//  $num1++;
//  $num1++;
//  $num1++;
//  $num1++;
//  $num1++;

//  ++$num1;
//  ++$num1;
//  ++$num1;
//  ++$num1;
//  ++$num1;

//  --$num1;
//  --$num1;
//  --$num1;
//  --$num1;

//  $num1--;
//  $num1--;
//  $num1--;
//  $num1--;


// Logical operators
// AND  // &&
// OR  // ||
// NOT // !


// if ($num1 xor 0=='0') {
//    echo 'found';
// }


// PHP Conditional Assignment Operators

// ??
// echo $num1 ?? 'default';


// switch conditions

// switch ($num1) {
//     case '199':
//        echo 'true';
//     case '0':
//         echo 'is true';
//         break;
//     default:
//         echo 'not true';
//         break;
// }


//Loops 

// for loop

// "" ''

// "''"

 $year = 2000;
 $currentYear = 2023;
 $_ = '';
  for ($year; $year <= $currentYear ; $year++) { 
     $_.= "
       <option>$year</option>
      ";
  }

  echo "<Select>
     <option disabled='disabled' selected='selected'>Select Year</option>
      $_
  </Select>";

const arrDatas = [3,'Ai', 'user'];

// foreach (arrDatas as $key) {
//     echo "$key <br>";
// }

 $i = 10;
// while ($i >= 1) {
//      echo "$i <br>";
//    $i--; 
// }

// do {
//     echo "$i <br>";
//     $i--; 
// } while ($i >= 1);

//Multi dimensional array
$datas = [
  'id'=>[
    1,2,3,4,5,6,7,8,9,10
  ],
  'fullname'=>[
    'Marvel Wilson', 'Saint Joel', 'lorem leo', 'Joy Paul', 'Theo Jades', 'Jack Roland', 'Queen Stone', 'Gabriel Jacks', 'Joseph Sunday', 'Mary Johnson'
  ],
  'email'=>[
    'text@text.com','text@text.com','text@text.com','text@text.com','text@text.com','text@text.com','text@text.com','text@text.com','text@text.com','text@text.com',
  ]
  ];

  print_r($datas);
  ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table Data</title>
  </head>
  <body>
    <table border='1' colspace='12'>
      <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
      </tr>
      <?php
      $a = 0;
       while ($a < count($datas['id'])):
      
      ?>
      <tr>
        <td><?php echo $datas['id'][$a]; ?></td>
        <td><?php echo $datas['fullname'][$a]; ?></td>
        <td><?php echo $datas['email'][$a]; ?></td>

      </tr>
       
      <?php
      $a++;
       endwhile;
      ?>
    </table>
  </body>
  </html>

