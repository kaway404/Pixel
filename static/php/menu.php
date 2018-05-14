<div class="uk-flex uk-flex-center">
<div class="main">
    <div class="uk-flex uk-flex-left">
        <div class="status-p uk-animation-slide-top-medium">
            <a href="/profile.php?id=<?php echo $user['id'];?>"><li><img src="/img/avatar/avatar.png" class="wtf">
            <span><?php echo $user['nome'];?></span>
            </li></a>
            <li><a href="#sejapremium" id="get" uk-toggle uk-tooltip="Ao ser Premium você tem vantangens!">Seja premium</a></li>
            <li><a href="#" id="linksn">Meu perfil</a></li>
            <li><a href="#" id="linksn">Seguindo</a></li>
            <li><a href="#" id="linksn">Seguidores</a></li>
            <hr>
            <li><a href="#" id="linksn">Configurações</a></li>
        </div>
    </div>

     <div class="uk-flex uk-flex-right">
        <div class="status-p uk-animation-slide-top-medium">
            <li><a href="#" id="linksn">Seguindo</a></li>
            <li><a href="#" id="linksn">Seguidores</a></li>
        </div>
    </div>

<div id="sejapremium" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Premium</h2>
        <p>Ao ser premium você tem a suas imagens para todos verem.</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Fechar</button>
            <button class="uk-button uk-button-primary" type="button">Compre</button>
        </p>
    </div>
</div>

<div id="publish" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Publique seu projeto</h2>
        <p class="uk-text-right">
    <div class="uk-inline" style="width: 100%;">
    <div class="js-upload uk-placeholder uk-text-center">
    <span uk-icon="icon: cloud-upload"></span>
    <span class="uk-text-middle">Faça upload do seu desenho/design</span>
        <form method="POST" enctype="multipart/form-data">
    <div class="js-upload" uk-form-custom>
        <input type="file" name="file" multiple>
        <span class="uk-link" tabindex="-1">Selecione um</span>
        <br>
        <span>Obs: Selecione o arquivo e clique em publicar.</span>
    </div>
    </div>


            <textarea name="about" class="uk-input" id="senha" placeholder="Sobre o projeto" type="text" style="resize: none; height: 150px;"></textarea>
            </div>
            <br>
            <br>
            <br>
            <div style="float: right;">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Fechar</button>
            <input class="uk-button uk-button-default uk-button-primary" type="submit" id="btn2" value="Publicar" name="save" />
            </form>
            </div>
        </p>
    </div>
</div>

<?php
if (isset($_POST['save'])) {
        if ($_FILES["file"]["error"]>0) {
            echo "<script language='javascript' type='text/javascript'>alert('Tens de escolher uma foto...');</script>";
        }else{
            $n = rand (0, 10000000);
            $img = preg_replace('/[^\w\._]+/', '', $_FILES["file"]["name"]);

            move_uploaded_file($_FILES['file']['tmp_name'], "img/desenhos/".$img);

            $iduser = DBEscape( strip_tags(trim($_COOKIE['iduser']) ) );
                $form['destaque'] = 0;
                $form['iduser'] = $user['id'];
                $form['photo'] = $img;
                $form['sobre'] = $_POST['about'];
                if( DBCreate( 'desenhos', $form ) ){
                    header("Location: /");
        }
        else{
            echo "<script language='javascript' type='text/javascript'>alert('Erro...');</script>";
        }
    }
}
?>


    <div class="uk-flex uk-flex-center">
        <div class="feed uk-animation-slide-top-medium">
            <div class="news">
                <p>Info</p>
                <li><a>Nova função</a><span>sistema de logout</span></li>
                <li><a>Nova função</a><span>sistema de logout</span></li>
            </div>

            <?php
                $desenhos = DBRead( 'desenhos', "WHERE id and destaque = 1 ORDER BY id DESC LIMIT 1" );
                if (!$desenhos)
                echo '';    
                else  
                    foreach ($desenhos as $desenho):   
                ?>


            <div class="news uk-animation-slide-top-medium" id="nt">
                <p>Desenhos da equipe</p>
                <div class="uk-position-relative uk-visible-toggle uk-light" uk-slider>

    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <?php
                $desenhos = DBRead( 'desenhos', "WHERE id and destaque = 1 ORDER BY id DESC LIMIT 7" );
                if (!$desenhos)
                echo '';    
                else  
                    foreach ($desenhos as $desenho):   
                ?>
                <?php
                $eu = $desenho['iduser'];
                $eudesenheis = DBRead( 'user', "WHERE id = $eu ORDER BY id DESC LIMIT 1" );
                if (!$eudesenheis)
                echo '';    
                else  
                    foreach ($eudesenheis as $eudesenhei):   
                ?>
                <li uk-tooltip="Feito por <?php echo $eudesenhei['nome']; ?> <?php echo $eudesenhei['sobrenome']; ?> <br> <?php echo $desenho['sobre']; ?>  ">
                    <img src="/img/desenhos/<?php echo $desenho['photo'];?>">
                    <div id="bottom-news">
                        <span uk-tooltip="Curtir" uk-icon="heart" style="color: #555; float: right"></span>
                         <span uk-tooltip="Ver mais" uk-icon="more" style="color: #555; float: right"></span> 
                    </div>
                 </li>
             <?php endforeach; endforeach;?>
    </ul>

    <a class="what uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="what uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
            </div>
        <?php endforeach;?>

            <div class="news uk-animation-slide-top-medium" id="nt">
                <p>Sugestão de usuarios</p>
                <div class="uk-position-relative uk-visible-toggle uk-light" style="height: 50px;" uk-slider>

         <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
            <?php
                $eu = $user['id'];
                $peoples = DBRead( 'user', "WHERE id <> $eu ORDER BY id DESC LIMIT 7" );
                if (!$peoples)
                echo '';    
                else  
                    foreach ($peoples as $people):   
                ?>
                  <a class="nani" title="<?php echo $people['nome'];?>" uk-tooltip="<?php echo $people['nome'];?> <?php echo $people['sobrenome'];?>">
                <li class="user-s">
                    <img src="/img/avatar/avatar.png">
                </li>
                </a>
            <?php endforeach;?>
        </ul>

    <a class="what uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="what uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>


            </div>
                            <!-- 
                <?php
                $desenhos = DBRead( 'desenhos', "WHERE id and destaque = 1 ORDER BY id DESC LIMIT 1" );
                if (!$desenhos)
                echo '';    
                else  
                    foreach ($desenhos as $desenho):   
                ?>
                <!-- 
<div class="news slider">
<p>Desenhos da equipe</p>
<div class="uk-position-relative uk-visible-toggle uk-light" style="height: 90px;" uk-slider>
<div class="uk-child-width-1-3@m" uk-grid uk-lightbox="animation: slide">
    <ul class="uk-slider-items uk-child-width-1-2 uk-child-width-1-3@s uk-child-width-1-4@m">
                <?php
                $desenhos = DBRead( 'desenhos', "WHERE id and destaque = 1 ORDER BY id DESC LIMIT 7" );
                if (!$desenhos)
                echo '';    
                else  
                    foreach ($desenhos as $desenho):   
                ?>
                <?php
                $eu = $desenho['iduser'];
                $eudesenheis = DBRead( 'user', "WHERE id = $eu ORDER BY id DESC LIMIT 1" );
                if (!$eudesenheis)
                echo '';    
                else  
                    foreach ($eudesenheis as $eudesenhei):   
                ?>
    <div id="photoho">
        <a class="uk-inline" href="/img/desenhos/<?php echo $desenho['photo'];?>" data-caption="Feito por <?php echo $eudesenhei['nome'];?> <?php echo $eudesenhei['sobrenome'];?>">
            <img src="/img/desenhos/<?php echo $desenho['photo'];?>" alt="">
        </a>
    </div>

            <?php endforeach; endforeach?>
        </ul>

   
</div>

 <a class="what uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
 <a class="what uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>


</div>



        </div>
         -->

    <?php endforeach; ?>

 <?php
                $desenhos = DBRead( 'desenhos', "WHERE id ORDER BY id DESC LIMIT 7" );
                if (!$desenhos)
                echo '';    
                else  
                    foreach ($desenhos as $desenho):   
                ?>
                <?php
                $eu = $desenho['iduser'];
                $eudesenheis = DBRead( 'user', "WHERE id = $eu ORDER BY id DESC LIMIT 1" );
                if (!$eudesenheis)
                echo '';    
                else  
                    foreach ($eudesenheis as $eudesenhei):   
                ?>
<div class="newst">
<article class="uk-comment">
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <img uk-tooltip="<?php echo $eudesenhei['nome'];?> <?php echo $eudesenhei['sobrenome'];?>" class="uk-comment-avatar" src="
            /img/avatar/avatar.png" style="border-radius: 50%; left: 10px; position: relative; top: 10px;" width="50" height="50" alt="">
        </div>
        <div class="uk-width-expand">
            <h4 style="position: relative; top: 10px;" class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo $eudesenhei['nome'];?> <?php echo $eudesenhei['sobrenome'];?></a></h4>
        </div>
    </header>
    <hr>
    <div class="uk-comment-body">
        <p style="padding: 5px;"><?php echo $desenho['sobre'];?>
            <img src="img/desenhos/<?php echo $desenho['photo'];?>" style="width: 100%; max-height: 300px;"/>
        </p>
    </div>
</article>
</div>
<?php endforeach; endforeach ; ?>


    </div>





</div>


</div>
</div>