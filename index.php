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
        // def 함수명():
        //선언 function 함수명( 매개변수){코드블럭;return 변수명}
        function makeBcol($wkan=3){
            //$wkan=3; // 나누고 싶은칸수
            $total=12; // 부트스트랩 전체컬럼수
            /* php 수학 내장함수  */
            //$cNo=ceil($total/$wkan); // 올림 클래스 숫자
            //$cNo=floor($total/$wkan); // 내림

            $cNo=round($total/$wkan); // 내림
            $cnt=$total/$cNo; // 반복숫자
            print('<div class="row">'."\n");
            for($i=0;$i<$cnt;$i++){
                if($i %2==1){
                    $addClass='redbox';
                }else{
                    $addClass='';
                }
                $s='<div class="col-lg-'.$cNo.' '.$addClass.'"><h1>.col-md-'.$cNo.'('.$cnt.')</h1></div>'."\n";
                print($s);
            } //2nd for
            print('</div>'."\n");
        }

        for($kan=2;$kan<7;$kan++){
            makeBcol($kan);
        }//1st for
        
        function makeHr($title="개별처리"){
            print('<hr>');
            print('<h1>'.$title.'</h1>');
            print('<hr>');
        }
        makeHr();

        makeBcol(2);
        makeBcol(3);
        makeBcol(4);
        makeBcol(3);
        makeHr('사다리만들기');
        $kn=1;
        function grid1($cNo=1,$addClass='redbox'){
            $other=12-$cNo;
            $s='<div class="row">';
            $s.='<div class="col-lg-'.$cNo.' "><h1>.col-md-'.$cNo.'</h1></div>'."\n";
            $s.='<div class="col-lg-'.$other.' '.$addClass.'"><h1>.col-md-'.$other.'</h1></div>'."\n";
            $s.='</div>';
            print($s);
        }
        for ($i=11;$i>0;$i--){
            grid1($i);
        }
        makeHr('단순배열');
        /* 단순 배열 */
        $arr=array(1,2,'국어','수학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }
        foreach($arr as $a){
            print('<li>'.$a.'</li>');
        }
        makeHr('연관배열');
        /* 연관 배열 key - value */
        $arr=array(1=>'국어',2=>'수학',5=>'영어','6'=>'과학');
        for($i=0;$i<count($arr);$i++){
            print('<li>인덱스('.$i.'):'.$arr[$i].'</li>');
        }
        foreach($arr as $k=>$v){
            print('<li>'.$k.':'.$v.'</li>');
        }
        $score=75;
        $score=10*floor($score/10);
        print($score);
        switch($score){
            case 90:
                print('수');
                break;
            case 80:
                print('우');
                break;
            case 70:
                print('미');
                break;
            default:
                print('낙제');             
        }

        ?>
        
       
    </body>
</html>