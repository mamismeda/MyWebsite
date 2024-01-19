<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="number" name="num01" placeholder="Number one">
    <select name="operator">
      <option value="add">+</option>
      <option value="subtract">-</option>
      <option value="multiply">*</option>
      <option value="divide">/</option>
    </select>
    <input type="number" name="num02" placeholder="Number two">
    <button>Calculate</button>
</form>
    
  <?php 
  //  if($_SERVER["REQUEST_METHOD"] == "POST"){
  //   // Grab data from inputs
  //     $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
  //     $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
  //     $operator = htmlspecialchars($_POST["operator"]);
      

  //     // Error handlers
  //     $errors = false;

  //     if (empty($num01) || empty($num02) || empty($operator)) {
  //        echo "fill in all fields";
  //        $errors = true;
  //     }

  //     if(!is_numeric($num01) || !is_numeric($num02)) {
  //         echo "only write numbers";
  //         $erros = true;
  //     }

  //     // Calculate the numbers if no errors
  //     if(!$errors){
  //       $value = 0;

  //         switch ($operator) {
  //           case "add":
  //             $value = $num01 + $num02;
  //              break;
  //           case "subtract":
  //             $value = $num01 - $num02;
  //                break;

  //           case "multiply":
  //             $value = $num01 * $num02;
  //                  break;

  //           case "divide":
  //               $value = $num01 / $num02;
  //                    break;
  //           default : 
  //            echo "Something went wrong!";
  //         }

  //         echo "Result = " . $value . "";      
  //       }

  //  }

  // for ($i = 0; $i <= 10; $i++) {
  //   echo "This is iteration n umber " . $i . "<br>";
  // }

  // $test = 10;
  // do {
  //   echo $test;
  //   $test ++;

  // } while ($test <10);
  
  $fruits = array("apple", "banana", "orange");
  
  foreach ($fruits as $fruit) {
    echo "this is a " . $fruit . "<br>";
  }
  ?>

</body>
</html>