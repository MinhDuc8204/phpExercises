<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Xuất số thành chữ</title>
</head>

<body>

    <?php

    if (isset($_POST["button"])) {
        $n = filter_input(INPUT_POST, "so");
        switch ($n) {
            case 0:
                $ans = "Không";
                break;
            case 1:
                $ans = "Một";
                break;
            case 2:
                $ans = "Hai";
                break;
            case 3:
                $ans = "Ba";
                break;
            case 4:
                $ans = "Bốn";
                break;
            case 5:
                $ans = "Năm";
                break;
            case 6:
                $ans = "Sáu";
                break;
            case 7:
                $ans = "Bảy";
                break;
            case 8:
                $ans = "Tám";
                break;
            case 9:
                $ans = "Chín";
                break;
            default:
                $ans = "ERROL";
        }
    }else{
        $ans = "ERROL";
    }

    ?>

    <form action="bai3.php" method="POST">
        <table width="519" border="1">
            <tr>
                <td colspan="3">Đọc số</td>
            </tr>
            <tr>
                <td>Nhập số (0-9)</td>
                <td width="69" rowspan="2"><input type="submit" name="button" id="button" value="Submit" /></td>
                <td> Bằng chữ</td>
            </tr>
            <tr>
                <td width="177">
                    <p>
                        <label for="textfield"></label>
                        <input type="text" name="so" id="textfield" />
                    </p>
                </td>
                <td width="232"><label for="textfield2"></label>
                    <input type="text" name="chu" id="textfield2" value=" <?php echo $ans; ?> " />
                </td>
            </tr>
        </table>
    </form>
</body>

</html>