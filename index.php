<!DOCTYPE html>
<html>
<head>
	<title>Pixel</title>
	<link rel="stylesheet" href="/static/css/uikit.min.css" />
	<link rel="stylesheet" href="/static/css/style.css" />
	<script src="/static/js/uikit.min.js"></script>
	<script src="/static/js/uikit-icons.min.js"></script>
	<script src="static/js/jquery.js" type="text/javascript"></script>
	<meta charset="utf-8">
</head>
<body>

<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
	require 'static/php/dashboard.php';
}
else{
?>

<?php
if(isset($_GET['register'])){
?>


<div class="background-fixed">
    <div class="uk-flex uk-flex-center">
    <div class="login uk-animation-slide-bottom-medium uk-animation">

        <h1 id="logo">Pixel</h1>

        <hr>

        <h1 class="ui uk-animation-slide-bottom-medium uk-animation">Faça o registro</h1>

        <form>

    <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" id="emaill" type="text" placeholder="E-mail">
        </div>
    </div>

    <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" id="senhal" placeholder="Senha" type="password">
        </div>
    </div>

      <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" id="senhal" placeholder="Nome" type="text">
        </div>
    </div>

       <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
            <input class="uk-input" id="senhal" placeholder="Sobrenome" type="text">
        </div>
    </div>
    <br>
    <br>
    <button id="logar" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-animation-slide-bottom-medium uk-animation">Registrar</button>

</form>

<div id="resposta" class="uk-animation-slide-bottom-medium uk-animation"></div>

<h1 class="ui uk-animation-slide-bottom-medium uk-animation" style="bottom: 20px; position: relative;">Ou entre</h1>
<a href="/"><button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Entrar</button></a>

    </div>
</div>
</div>

<?php } else if(isset($_GET['errorlogin'])) { ?>

<div class="background-fixed">
    <div class="uk-flex uk-flex-center">
    <div class="login uk-animation-slide-bottom-medium uk-animation">
    <div class="error">
    <span>Ocorreu um erro, loga-se novamente</span>
    </div>
        <h1 id="logo">Pixel</h1>

        <hr>

        <h1 class="ui uk-animation-slide-bottom-medium uk-animation">Faça o login</h1>

        <form>

    <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" id="emaill" placeholder="E-mail" type="text">
        </div>
    </div>

    <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" id="senhal" placeholder="Senha" type="password">
        </div>
    </div>
    <br>
    <br>
    <button id="logar" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-animation-slide-bottom-medium uk-animation">Logar</button>

</form>

<div id="resposta" class="uk-animation-slide-bottom-medium uk-animation"></div>

<h1 class="ui uk-animation-slide-bottom-medium uk-animation" style="bottom: 20px; position: relative;">Ou cadastra-se</h1>
<a href="/?register=1"><button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Cadastrar</button></a>

    </div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("#logar").click(function() {
        var emaill = $("#emaill").val(); 
        var senhal = $("#senhal").val();
        $.post("/login", {emaill: emaill,senhal: senhal},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});
</script>


<?php } else{ ?>

<div class="background-fixed">
	<div class="uk-flex uk-flex-center">
	<div class="login uk-animation-slide-bottom-medium uk-animation">

		<h1 id="logo">Pixel</h1>

		<hr>

		<h1 class="ui uk-animation-slide-bottom-medium uk-animation">Faça o login</h1>

		<form>

    <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" id="emaill" placeholder="E-mail" type="text">
        </div>
    </div>

    <div class="uk-margin uk-animation-slide-bottom-medium uk-animation">
        <div class="uk-inline">
            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
            <input class="uk-input" id="senhal" placeholder="Senha" type="password">
        </div>
    </div>
    <br>
    <br>
    <button id="logar" class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom uk-animation-slide-bottom-medium uk-animation">Logar</button>

</form>

<div id="resposta" class="uk-animation-slide-bottom-medium uk-animation"></div>

<h1 class="ui uk-animation-slide-bottom-medium uk-animation" style="bottom: 20px; position: relative;">Ou cadastra-se</h1>
<a href="/?register=1"><button class="uk-button uk-button-primary uk-width-1-1 uk-margin-small-bottom">Cadastrar</button></a>

	</div>
</div>
</div>

<script type="text/javascript">
$(document).ready(function() {
    $("#logar").click(function() {
        var emaill = $("#emaill").val(); 
        var senhal = $("#senhal").val();
        $.post("/login", {emaill: emaill,senhal: senhal},
        function(data){
         $("#resposta").html(data);
         }
         , "html");
         return false;
    });
});
</script>


<?php }  }?>

</body>
</html>