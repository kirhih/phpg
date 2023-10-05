<?
$txt='<tr><td></td>';
foreach($_POST as $k=>$v){ // 전송된 데이터 기반으로 키 밸류로 분리
    $txt=$txt.'<td>'.$v.'</td>';// 밸류값만 가져다 테이블 row 생성
}
$txt.='</tr>';
print($txt);
?>