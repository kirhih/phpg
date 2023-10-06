<?
// CSRF 방어용 코드
if ($_POST['hash']!=md5('아시아경제')){
    echo '<meta charset="UTF-8">';
    echo '꺼져'; 
}else{
    $txt='<tr><td></td>';
    foreach($_POST as $k=>$v){ // 전송된 데이터 기반으로 키 밸류로 분리
        $txt=$txt.'<td>'.$v.'</td>';// 밸류값만 가져다 테이블 row 생성
    }
    $txt.='</tr>';
    print($txt);
}
?>