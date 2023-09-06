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
</style>
<!--
2칸
1:11
2:10
~11:1
3칸
4칸
5칸
6칸
SSL php
-->
<?
// 단열 주석
/* 다열주석 */
// 변수 $변수명
// 문자열 합치기는 .이다
// 변수 형이 없다
// 반복문 for(증감변수초기화;증감변수조건;증감){코드블럭} while
for($i=1;$i<7;$i++){
    $a='h'.$i;
    print('<'.$a.'>'.$i.'안녕하세요</'.$a.'>');
}
?>
    </head>
    <body>

        
        <?php
        for($wkan=2;$wkan<7;$wkan++){
            //$wkan=3; // 나누고 싶은칸수

            $total=12; // 부트스트랩 전체컬럼수
            $cNo=($total/$wkan); // 클래스 숫자
            $cnt=$total/$cNo; // 반복숫자
            print('<div class="row">'."\n");
            for($i=0;$i<$cnt;$i++){
                $s='<div class="col-lg-'.$cNo.'"><h1>.col-md-'.$cNo.'</h1></div>'."\n";
                print($s);
            } //2nd for
            print('</div>'."\n");
        }//1st for
        ?>
        
       
    </body>
</html>