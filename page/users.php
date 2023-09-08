        <?php
        // 처리부분
        include('./module/mysql.php');

        $get=$_GET;
        $post=$_POST;
        switch($get['do']){
            case 'add':
                //print_r($post);
                unset($post['id']);// 자동완성컬럼이므로 삭제
                print('추가하는중...');
                if(empty($post['name'])){// 필수항목인 사람이름이 있는지 체크
                    print('사람 이름이 없습니다');
                }else{
                    // insert into 테이블명 (컬럼들ks) values (값들vs)
                    $ks='';
                    $vs='';
                    foreach($post as $k=>$v){
                        $ks.=$k.',';
                        $vs.='"'.$v.'",';
                    }
                    $qry='insert into users ('.substr($ks,0,-1).') values('.substr($vs,0,-1).')';
                    print($qry);
                    $res=getData($qry,2);
                }
                break;
            case 'edit':
                //
                // update 테이블명 set 컬럼명=값,...where 조건절
                $qbody='';
                foreach($post as $k=>$v){
                    $qbody.=$k."='".$v."',";
                }
                $where=' where id='.$post['id'];
                $qry='update users set '.substr($qbody,0,-1).$where;
                $res=getData($qry,2);
                break;
            case 'delete':

                break;
        }
        $btn='<a href="/page/user.php?do=add" class="btn btn-primary">추가하기</a>';
        $title=array('Users','사용자 리스트'.$btn);
        include('./module/header.php');

        $qry='select id,name,uid,uemail,status from users';
        $resArr=getData($qry);
        //print_r($resArr);
        $heads=array('id','이름','아이디','이메일','상태','관리');
        print('<table class="table table-bordered">');
        print('<tr>');
        foreach($heads as $head){
            print('<th>'.$head.'</th>');
        }
        print('</tr>');
        $row='';// 반복문 밖에서 항상 초기화에 신경쓴다.
        foreach($resArr as $fall){
            $row.='<tr>';
            foreach($fall as $k=>$v){
                $row.='<td>'.$v.'</td>';
            }
            $no=$fall['id'];// 개별 고유키를 기반으로 열리는 페이지에 데이터 전송
            $btns='<div class="btn-group">
            <a href="/page/user.php?do=edit&id='.$no.'" class="btn btn-primary">E</a>
            <button type="button" class="btn btn-warning">D</button>
        </div>';
            $row.='<td>'.$btns.'</td>';
            $row.='</tr>';
        }
        print($row);
        print('</table>');
        ?>
        </div>
    </div>
    <?php
    //include('./module/footer.php');
    ?>
    </body>
</html>