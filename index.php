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
    <div class="panel panel-default">
        <div class="panel-body">
        <?php
        include('./page/module/mysql.php');
        include('./page/module/navbar.php');
        include('./page/module/pagehead.php');
        include('./page/module/carousel.php');
        ?>
        </div>
    </div>
    <?php
    //include('./module/footer.php');
    ?>
    </body>
</html>