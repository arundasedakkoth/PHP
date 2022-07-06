<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            text-align: center;
            padding-top: 12rem;
        }
    </style>
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>

    <form id="calcform" action="" method="post">
        First Number: <input name="n1" value=""><br><br>
        Second Number: <input  name="n2" value=""><br><br>

        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/"><br><br>

    </form>
    
    <?php
        class Calculator {

            private $FNum, $SNum;
            
            public function __construct( $Val1, $Val2 ) {
                $this->FNum = $Val1;
                $this->SNum = $Val2;
            }
            public function Addition() {
                return $this->FNum + $this->SNum;
            }
            public function Subtraction() {
                return $this->FNum - $this->SNum;
            }
            public function Multiplication() {
                return $this->FNum * $this->SNum;
            }
            public function Division() {
                return $this->FNum / $this->SNum;
            }
        }
        
        
        if (isset($_POST['sub'])) {
            if (is_numeric($_POST['n1']) && is_numeric($_POST['n2'])) {
                $temp = new Calculator($_POST['n1'], $_POST['n2']);
                switch($_POST['sub']) {
                    case "+":
                        $ans = $temp -> Addition();
                        break;
                    case "-":
                        $ans = $temp -> Subtraction();
                        break;
                    case "x":
                        $ans = $temp -> Multiplication();
                        break;
                    case "/":
                        $ans = $temp -> Division();
                        break;
                    }
                    echo "Answer: <input type=\"text\" value=\"$ans\">";  
            }
            else {
                echo "Enter a Valid Number";
            }
        }

        ?>
    
</body>
</html>