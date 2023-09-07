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
    <div class="panel panel-default">
        <div class="panel-body">
        <?php
        include('./module/mysql.php');
        include('./module/navbar.php');
        include('./module/pagehead.php');
        $qry='select id,name,uid,uemail,status from users';
        $fall=getData($qry);
        //print_r($fall);
        $heads=array('id','이름','아이디','이메일','상태','관리');
        print('<table class="table table-bordered">');

        print('<tr>');
        foreach($heads as $head){
            print('<th>'.$head.'</th>');
        }
        print('</tr>');

        print('<tr>');
        foreach($fall as $k=>$v){
            print('<td>'.$v.'</td>');
        }
        $btns='<div class="btn-group">
        <a href="#" class="btn btn-primary">E</a>
        <button type="button" class="btn btn-warning">D</button>
      </div>';
        print('<td>'.$btns.'</td>');
        print('</tr>');
        print('</table>');
        ?>
        </div>
    </div>
    <?php
    //include('./module/footer.php');
    ?>
    </body>
</html>