<div class="uk-flex uk-flex-center">
<div class="main">
    <div class="uk-flex uk-flex-left">
        <div class="status-p uk-animation-slide-top-medium">
            <a href="/profile.php?id=<?php echo $user['id'];?>"><li><img src="/img/avatar/avatar.png" class="wtf">
            <span><?php echo $user['nome'];?></span>
            </li></a>
            <li><a href="#" id="get">Ser premium</a></li>
            <li><a href="#" id="linksn">Seguindo</a></li>
            <li><a href="#" id="linksn">Seguidores</a></li>
            <hr>
            <li><a href="#" id="linksn">Grupos</a></li>
            <li><a href="#" id="linksn">Eventos</a></li>
        </div>
    </div>

    <div class="uk-flex uk-flex-center">
        <div class="feed uk-animation-slide-top-medium">
            <div class="news">
                <p>Info</p>
                <li><a>Nova função</a><span>sistema de logout</span></li>
                <li><a>Nova função</a><span>sistema de logout</span></li>
            </div>


            <div class="news uk-animation-slide-top-medium" id="nt">
                <p>Desenhos populares</p>
                <li>
                    <img src="/img/img.jpg">
                    <div id="bottom-news">
                        <span uk-icon="heart" style="color: #555; float: right"></span>
                         <span uk-icon="more" style="color: #555; float: right"></span> 
                    </div>
                </li>
            </div>

            <div class="news uk-animation-slide-top-medium" id="nt">
                <p>Sugestão de usuarios</p>
                <?php
                $comentiduser = $coment['iduser'];
                $peoples = DBRead( 'user', "WHERE id ORDER BY id DESC LIMIT 7" );
                if (!$peoples)
                echo '';    
                else  
                    foreach ($peoples as $people):   
                ?>
                <a class="nani" title="<?php echo $people['nome'];?>">
                <li class="user-s">
                    <img src="/img/avatar/avatar.png">
                </li>
                </a>
            <?php endforeach;?>
            </div>


        </div>
    </div>

</div>
</div>