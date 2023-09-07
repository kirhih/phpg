<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
<style type="text/css">
    .row div{border:1px solid grey}
    .redbox{background-color: red;}
</style>
    </head>
    <body>
        <?php
        // http://127.0.0.1/myadmin/ root apmsetup
        // 데이터베이스생성
        // 데이터베이스 연결
        $host = 'localhost';
        $user = 'root';
        $pass = 'apmsetup';
        $dbase = 'myshop';
        $conn=mysqli_connect($host,$user,$pass,$dbase);
        $qry='select * from users';
        
        mysqli_query($conn,'SET NAMES utf8');
        $res=mysqli_query($conn,$qry);
        //print_r($res);
        //$fall=mysqli_fetch_array($res);// 다나옴
        //$fall=mysqli_fetch_row($res);// 순서대로
        $fall=mysqli_fetch_assoc($res);// 연관배열로
        //print_r($fall);
        print('<table class="table table-bordered">');
        print('<tr>');
        foreach($fall as $k=>$v){
            print('<td>'.$v.'</td>');
        }
        print('</tr>');
        print('</table>');
        ?>
    </body>
</html>