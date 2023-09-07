<?php
    $title=array('User','사용자');
    include('./module/header.php');
    include('./module/mysql.php');
    $qry='select id,name,uid,upw,uemail,status from users where id=1';
    $user=getData($qry);
    print_r($user);
    $udata=array(
        array('id','번호','txt'),
        array('name','이름','txt'),
        array('uid','아이디','txt'),
        array('upw','패스워드','txt'),
        array('uemail','이메일','txt'),
        array('status','상태','txt'),
    );
?>
<form action="/page/user_up.php">
    <?php foreach($udata as $u){
    ?>
    <div class="form-group">
        <label for="<?=$u[0]?>"><?=$u[1]?>:</label>
        <input type="<?=$u[2]?>" class="form-control" 
        id="<?=$u[0]?>" value="<?=$user[$u[0]]?>" >
    </div> 
    <?php
    }?>
  <button type="submit" class="btn btn-default">Submit</button>
</form>