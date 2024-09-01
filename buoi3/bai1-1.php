<?php
    if(isset($_POST['submit'])){
        $name =  $_POST['nameBook'];
        echo $name;
        echo '<br/>';
        $nhaXuatBan =  $_POST['nxb'];
        echo  $nhaXuatBan;
        echo '<br/>';
        $namXuatBan =  $_POST['namxuatban'];
        echo $namXuatBan ;
    }
?>

<?php
    if(isset($_GET['submit'])){
        $name =  $_POST['nameBook'];
        echo $name;
        echo '<br/>';
        $nhaXuatBan =  $_POST['nxb'];
        echo  $nhaXuatBan;
        echo '<br/>';
        $namXuatBan =  $_POST['namxuatban'];
        echo $namXuatBan ;
    }
?>