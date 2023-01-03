<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Giai PT</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            .submit {
                text-align: center;
            }
        </style>
    </head>
    <body>
        <?php
        $a = ""; $b = ""; $c = ""; $x1 = ""; $x2 = ""; $kq = "";
        if(isset($_GET["reset"])){
            $_GET["txtSo1"].clear();
            $_GET["txtSo2"].clear();
            $_GET["txtSo3"].clear();
            $kq.clear();
        }
        if(isset($_GET["submit"])){
            if(isset($_GET["txtSo1"], $_GET["txtSo2"], $_GET["txtSo3"]))
            {
                $a = $_GET["txtSo1"];
                $b = $_GET["txtSo2"];
                $c = $_GET["txtSo3"];
            }
            if ($a == "" || $a == 0){
                if ($b == "" || $b == 0){
                    if ($c == "" || $c == 0){
                        $kq = "Phương trình vô số nghiệm";
                    }
                    else
                        $kq = "Phương trình vô nghiệm";
                }
                else{
                    if(($c % $b) != 0)
                        $x1 = number_format(-($c / $b), 2);
                    else
                        $x1 = -($c / $b);
                    $kq = "Phương trình có một nghiệm kép là x = $x1";
                }
            }
            else{
                $delta = $b * $b - 4 * $a * $c;
                if ($delta > 0) {
                    $x1 = number_format((- $b + sqrt ( $delta )) / (2 * $a), 2);
                    $x2 = number_format((- $b - sqrt ( $delta )) / (2 * $a), 2);
                    $kq = "Phương trình có 2 nghiệm: x1 = $x1 và x2 = $x2";
                } else if ($delta == 0) {
                    if($b % (2 * $a) != 0)
                        $x1= number_format((- $b / (2 * $a)), 2);
                    else
                        $x1 = - $b / (2 * $a);
                    $kq = "Phương trình có một nghiệm kép là x = $x1";
                } else {
                    $kq = "Phương trình vô nghiệm";
                }

            }
        }
        ?>
        <form method="get" action="" ectype="multipart/form-data">
            <div class="container">
                <h2>Giải phương trình bậc II</h2>          
                <table class="table table-dark table-hover">
                    <thead>
                    <tr>
                        <th>Phương trình</th>
                        <th colspan="3">ax<sup>2</sup> + bx + c = 0</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Nhập</td>
                        <td>
                            <lable>a = </lable>
                            <input type="text" name="txtSo1" value="<?php echo $a ?>"><br>
                        </td>
                        <td>
                            <lable>b = </lable>
                            <input type="text" name="txtSo2" value="<?php echo $b ?>"><br>
                        </td>
                        <td>
                            <lable>c = </lable>
                            <input type="text" name="txtSo3" value="<?php echo $c ?>"><br>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">Kết quả</td>
                        <td colspan="2"><lable><?php echo $kq; ?></lable></td>
                    </tr>
                    <tr>
                        <td colspan="2" class="submit">
                            <button type="submit" name="submit" class="btn btn-success">Giải phương trình</button>
                        </td>
                        <td colspan="2" class="submit">
                            <button type="reset" name="reset" class="btn btn-success">Xóa</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </form>
    </body>
</html>