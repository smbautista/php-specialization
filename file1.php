<!DOCTYPE html>
<html lang="en">
<head>
    <title>Arrays & Loops</title>
</head>
<body>
<!-- Arrays and Loops -->
    <?php 
//Numeric Array with Do While loop
    $numbers = [1,2,3,4,5]; 
    $index=0;
    do {
        echo $numbers[$index];
        $index++;
    }while ($numbers <=5);
    echo "<br>";

//Associative Array with while loop
    $fruits = array("Orange" => 10, "Apple" => 15, 'Banana' => 20);
    while (list($key, $value) = each($fruits)) {
       echo $key .'=>'.$value."<br>";
}
//Multidimensional Array with foreach loop
    $students = array(
        "student1" => array(
            "name" => "Sarah Mae",
            "email" => "sarah@gmail.com",
        ),
        "student2" => array(
            "name" => "Quency",
            "email" => "quency@gmail.com",
        ),
        "student3" => array(
            "name" => "Reina",
            "email" => "reina@mail.com",
        )
    );
     
// Printing all the keys and values one by one
    $keys = array_keys($students);
    for($i = 0; $i < count($students); $i++) {
        echo $keys[$i] . "{<br>";
        foreach($students[$keys[$i]] as $key => $value) {
            echo $key . " : " . $value . "<br>";
        }
        echo "}<br>";
    }
    
//For Loop
    for ($i = 0; $i <= 10; $i++) {
        echo "The number is: $i <br>";
      }
    ?>
    
</body>
</html>
