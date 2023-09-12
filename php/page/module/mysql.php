<?php
// http://127.0.0.1/myadmin/ root apmsetup
        // 데이터베이스생성
        // 데이터베이스 연결
    //$fall=mysqli_fetch_array($res);// 다나옴
    //$fall=mysqli_fetch_row($res);// 순서대로
function getConn(){
    $host = 'localhost';
    $user = 'root';
    $pass = 'apmsetup';
    $dbase = 'myshop';
    $conn=mysqli_connect($host,$user,$pass,$dbase);
    mysqli_query($conn,'SET NAMES utf8');
    return $conn;
}
function getData($qry='select * from users',$type=1){
    $conn=getConn();
    $res=mysqli_query($conn,$qry);
    $resArr=array();// 데이터 초기화
    if($type==1){// select 라면
        // 묵시적 불린 T/F 0==F 0> T
        while($data=mysqli_fetch_assoc($res)){// 조건이 참인동안 반복
            array_push($resArr,$data);
        }// 연관배열로
    }else{
        $resArr=$res;
    }
    return $resArr;
}
?>