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
        // function 함수명( 매개변수){코드블럭;return 변수명}
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