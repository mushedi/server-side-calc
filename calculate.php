<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <?php
/*
 * Name: Azul Lanas
 * Date: October 7th 2020
 * Purpose: To write a simple server side application for a calculator
 */

 if (!empty($_POST)) {
    if(!empty($_POST["num1"]) && !empty($_POST["num2"]) && !empty($_POST["oper"])){
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $oper = $_POST['oper'];
        

        trim($n1);
        trim($n2);
        trim($oper);

        if(!preg_match('/^[\d\.]+$/', $n1)){
            $n1 = 0;
        }

        if(!preg_match('/^[\d\.]+$/', $n2)){
            $n2 = 0;
        }

        $n1 = (float)$n1;
        $n2 = (float)$n2;

        if($oper !== 'add' && $oper !== 'sub' && $oper !== 'mul' && $oper !== 'div'){
            $oper = 'add';
        }
        switch($oper){
            case "add":
                $ans = $n1 + $n2;
                printf("%s + %s = %s", $n1, $n2, $ans);
                break;
            case "sub":
                $ans = $n1 - $n2;
                printf("%s - %s = %s", $n1, $n2, $ans);
                break;
            case "mul":
                $ans = $n1 * $n2;
                printf("%s * %s = %s", $n1, $n2, $ans);
                break;
            case "div":
                $ans = $n1 / $n2;
                printf("%s / %s = %s", $n1, $n2, $ans);
                break;
            default:
                printf("Please choose either ADD, SUBTRACT, MULTIPLY, or DIVIDE");
                break;
        }
    } else {
        printf("Please enter proper data into the Calculator.");
    }
} else {
    printf("Please enter proper data into the Calculator.");
}

?>
</body>
</html>
