<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    
    $a=filter_input(INPUT_POST,"in1");
    $b=filter_input(INPUT_POST,"in2");
    $c=filter_input(INPUT_POST,"in3");
    $total="missing information";
    if(isset($_POST["in1"])&&isset($_POST["in2"])&&isset($_POST["in3"])){ 
        if($a!=""&&$c!=""&&$b!=""){
            $total="TOTAL: ". $a*pow(1+$b/100, $c);    
        }
    }
?>
    <center>
        <h1>CACULATE</h1><br>
        <form action="ex2_1&2.php" method="post">
            <table border="1">
                <tr>
                    <td>Nhập số dư</td>
                    <td><input type="number" name="in1" </td>
                </tr>
                <tr>
                    <td>Nhập lãi suất</td>
                    <td><input type="number" name="in2" step="0.001"></td>
                </tr>
                <tr>
                    <td>Nhập số năm</td>
                    <td><input type="number" name="in3" ></td>
                </tr>
                <tr>
                    <td colspan="2"><center><button type="">CACULATE</button></center></td>
                </tr>
            </table>
        </form>
        <br><?php echo $total; ?><br>
        <h3></h3>
    </center>
</body>
</html>
