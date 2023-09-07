<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>
    <?php
    $a = filter_input(INPUT_POST, "a");
    $b = filter_input(INPUT_POST, "b");
    $c = filter_input(INPUT_POST, "c");
    if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["c"])) {
        if ($a == 0) {
            if ($b == 0) {
                if ($c == 0) {
                    $total = "PT vô số nghiệm";
                } else {
                    $total = "PT vô  nghiệm";
                }
            } else {
                $total = -$c / $b;
            }
        } else {
            $delta = pow($b, 2) - 4 * $a * $c;
            if ($delta < 0) {
                $total = "PT vô  nghiệm";
            } elseif ($delta == 0) {

                $total = "X1=X2=".(-$b/(2 * $a));
            } else {
                $x1 = round(((sqrt($delta)) - $b )/ (2 * $a), 4);
                $x2 = round(((-sqrt($delta)) - $b) / (2 * $a), 4);
                $total = "X1=" . $x1 . "  X2=" . $x2;
            }
        }
    } else {
        $total = "ERROL";
    }
    ?>
    <form action="bai5.php" method="post">
        <table width="806" border="1">
            <tr>
                <td colspan="4" bgcolor="#336699"><strong>Giải phương trình bậc 2</strong></td>
            </tr>
            <tr>
                <td width="83">Phương trình </td>
                <td width="236">
                    <input name="a" type="text" value="<?php echo $a; ?>" />
                    X^2 +
                </td>
                <td width="218"><label for="textfield3"></label>
                    <input type="text" name="b" id="textfield3" value="<?php echo $b; ?>" />
                    X+
                </td>
                <td width="241"><label for="textfield"></label>
                    <input type="text" name="c" id="textfield" value="<?php echo $c; ?>" />
                    =0
                </td>
            </tr>
            <tr>
                <td colspan="4">
                    Nghiệm
                    <label for="textfield2"></label>
                    <input name="textfield" type="text" id="textfield2" width="400" value="<?php echo $total; ?>" />
            </tr>
            <tr>
                <td colspan="4" align="center" valign="middle"><input type="submit" name="chao" id="chao" value="Xuất" /></td>
            </tr>
        </table>
    </form>
</body>

</html>