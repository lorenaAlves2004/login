<<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$connect = mysql_connect('nome_do_servidor','nome_de_usuario','senha');
$db = mysql_select_db('nome_do_banco_de_dados');
if(isset($entrar)){

    $verifica = msql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if(mysql_num_rows($verifica)<=0){
        echo"<script language='javascript' type='text/javascript'>alert('login e/ou senha incorretos');window.location.href='login.html'</script>";
        die();
    }else{
        setcoockie("login",$login);
        header("Location:index.php");
    }
}
?>