<?php
if(isset($_COOKIE['iduser']) and (isset($_COOKIE['inisession'])) and (isset($_COOKIE['thecry']))){
    $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
    $thecry = DBEscape( strip_tags( trim( $_COOKIE['thecry'] ) ) );
    $user   = DBRead( 'user', "WHERE id = '{$iduser}' and thecry  = '{$thecry}'  LIMIT 1" );
    if (!$user){
    setcookie("iduser" , "");
    setcookie("inisession" , "");
    setcookie("thecry" , "");
    header("location: /");
    }
    else{
    $user = $user[0];
    $idcry = DBEscape( strip_tags(trim($_COOKIE['thecry']) ) );
    $usercry = DBRead('user', "WHERE thecry = '{$idcry}' LIMIT 1 ");
    $usercry = $usercry[0];
?>

<div class="header uk-animation-slide-top-small">
    <div class="uk-flex uk-flex-center">
    <div class="header-align"><h1>Pixel</h1></div>
    </div>
    <div class="uk-flex uk-flex-left">
        <div class="tabs">
        <div class="uk-flex uk-flex-center">
        <div class="header-align">
        <a><span uk-icon="home"></span>Ínicio</a>
        <a><span uk-icon="heart"></span>Favoritos</a>
        <a><span uk-icon="user"></span>Perfil</a>
        <a><span uk-icon="plus"></span>Nova Postagem</a>
        <a><span uk-icon="bell"></span> <span id="news">1</span></a>
        <a style="float: right;" href="/logout"><span uk-icon="sign-out"></span></a>
        </div>
        </div>
        </div>
    </div>
</div>

<?php } }?>