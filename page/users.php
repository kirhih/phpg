        <?php
        // 처리부분
        print_r($_POST);
        print_r($_GET);
        $get=$_GET;
        $post=$_POST;
        switch($get['do']){
            case 'add':

                break;
            case 'edit':

                break;
            case 'delete':

                break;
        }
        $title=array('Users','사용자 리스트');
        include('./module/header.php');
        include('./module/mysql.php');
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
        <a href="/page/user.php" class="btn btn-primary">E</a>
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