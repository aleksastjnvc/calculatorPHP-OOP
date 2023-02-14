<?php

       declare(strict_types = 1);
       include 'autoloader.inc.php';

       if(isset($_POST['submit'])) {
       $oper = $_POST['oper'];
       $num1 = $_POST['num1'];
       $num2 = $_POST['num2'];

?>
    <h4>Result:</h4>
<?php
       $calc = new Calc($oper, (int)$num1, (int)$num2);

       try {
            echo $calc->calculator();
       } catch (TypeError $e) {
            echo "Error! : " . $e->getMessage();
       }

    }
       
?>

<title>Result</title>