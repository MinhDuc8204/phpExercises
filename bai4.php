<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Untitled Document</title>
</head>

<body>

    <?php
        $st=filter_input(INPUT_POST, "so_dau");
        $en=filter_input(INPUT_POST, "so_cuoi");
        $tong=0;    $tich=1;    $tongc=0;   $tongl=0;
        if(isset($_POST["so_dau"])&&isset($_POST["so_cuoi"])){
            for($i=$st;$i<=$en;$i++){
                $tong+=$i;
                $tich*=$i;
                if($i%2==0){
                    $tongc+=$i;
                }else{
                    $tongl+=$i;
                }
            }
        }
    ?>
    <form action="bai4.php" method="post">
        <table width="728" border="1">
            <tr>
                <td width="122">&nbsp;</td>
                <td width="76">Số bắt đầu</td>
                <td width="169"><label for="textfield"></label>
                    <input type="text" name="so_dau" id="textfield" value="<?php echo $st; ?>" />
                </td>
                <td width="152">Số kết thúc</td>
                <td width="175"><label for="textfield2"></label>
                    <input type="text" name="so_cuoi" id="textfield2" value="<?php echo $en; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5">Kết quả
                    <label for="textfield3"></label>
                </td>
            </tr>
            <tr>
                <td>Tổng các số</td>
                <td colspan="4"><label for="textfield4"></label>
                    <input type="text" name="tong" id="textfield4" value="<?php echo $tong; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tích các số</td>
                <td colspan="4"><label for="textfield5"></label>
                    <input type="text" name="tich" id="textfield5" value="<?php echo $tich; ?>" />
                </td>
            </tr>
            <tr>
                <td>Tổng các số chẵn</td>
                <td colspan="4"><label for="textfield6"></label>
                    <input type="text" name="tong_chan" id="textfield6" value="<?php echo $tongc; ?> " />
                </td>
            </tr>
            <tr>
                <td>Tổng các số lẻ</td>
                <td colspan="4"><label for="textfield7"></label>
                    <input type="text" name="tong_le" id="textfield7" value="<?php echo $tongl; ?>" />
                </td>
            </tr>
            <tr>
                <td colspan="5"><input type="submit" name="button" id="button" value="Tính toán" /></td>
            </tr>
        </table>
    </form>
</body>

</html>