<<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$connect = mysqli_connect('localhost','root','');
$db = mysqli_select_db($connect,'login');
if(isset($entrar)){

    $verifica = msqli_query($connect,"SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if(mysqli_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('login e/ou senha incorretos');window.location.href='login.html'</script>";
        die();
    }else{
        setcoockie("login",$login);
        header("Location:index.php");
    }
}
?>