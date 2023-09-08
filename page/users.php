        <?php
        // 처리부분
        include('./module/mysql.php');

        $get=$_GET;
        $post=$_POST;
        switch($get['do']){
            case 'add':

                break;
            case 'edit':
                //print_r($post);
                // update 테이블명 set 컬럼명=값,...where 조건절
                $qbody='';
                foreach($post as $k=>$v){
                    $qbody.=$k."='".$v."',";
                }
                $where=' where id='.$post['id'];
                $qry='update users set '.substr($qbody,0,-1).$where;
                //print($qry);
                $res=getData($qry,2);
                print($res);
                break;
            case 'delete':

                break;
        }
        $btn='<a href="/page/user.php?do=add" class="btn btn-primary">추가하기</a>';
        $title=array('Users','사용자 리스트'.$btn);
        include('./module/header.php');

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
        <a href="/page/user.php?do=edit" class="btn btn-primary">E</a>
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