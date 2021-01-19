<!DOCTYPE html>
<html lang="en">
<head>
    <title>Activity 1.1</title>
</head>
<style>
    #type {
        padding:8px;
        background-color:pink;
        border:solid black 1px;
    }
    .type{
        padding:8px;
    }
</style>

<h1>DECISION MAKING</h1>
<?php 
    function units($unit){
        if($unit <= 50 && $unit > 0){
            echo "Rs.3.50/unit";
        } else if ($unit <=150 && $unit > 50){
            echo "Rs.4.00/unit";
        } else if ($unit <=250 && $unit > 150){
            echo "Rs.5.20/unit";
        } else if ($unit > 250){
            echo "Rs.6.50/unit";
        }
    }
        units(350);
?>

<?php
$firstNum = (isset($_POST['firstNum']))?$_POST['firstNum']:"";
$secondNum = (isset($_POST['secondNum']))?$_POST['secondNum']:"";
$operator = (isset($_POST['operator']))?$_POST['operator']:"";
$result = '';
if (is_numeric($firstNum) && is_numeric($secondNum)){
switch ($operator) {
    case "Add":
        $result = $firstNum + $secondNum;
        break;
    case "Subtract":
        $result = $firstNum - $secondNum;
        break;
    case "Multiply":
        $result = $firstNum * $secondNum;
        break;
    case "Divide":
        $result = $firstNum /$secondNum;
    default:
        break;
}
}
?>

<body>
    <div id="page-wrap">
	<h1>Simple Calculator with PHP</h1>
	  <form action="" method="post">
            <p>
                <input type="number" class= type name="firstNum" id="firstNum" required="required" value="<?php echo $firstNum; ?>" /> <b>First Number</b>
            </p>
            <p>
                <input type="number" class=type name="secondNum" id="secondNum" required="required" value="<?php echo $secondNum; ?>" /> <b>Second Number</b>
            </p>
            <p>
                <input readonly="readonly" class=type name="result" value="<?php echo $result; ?>"> <b>Result</b>
            </p>
            <input type="submit" id=type name="operator" value="Add" />
            <input type="submit" id=type name="operator" value="Subtract" />
            <input type="submit" id=type name="operator" value="Multiply" />
            <input type="submit" id=type name="operator" value="Divide" />
	  </form>
    </div>
</body>
</html>