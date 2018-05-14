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
                  <a class="nani" title="<?php echo $people['nome'];?>">
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







<div class="news slider">
<p>Desenhos da equipe</p>
<div class="uk-position-relative uk-visible-toggle uk-light" style="height: 50px;" uk-slider>
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
                $eu = $user['id'];
                $eudesenheis = DBRead( 'user', "WHERE id <> $eu ORDER BY id DESC LIMIT 1" );
                if (!$eudesenheis)
                echo '';    
                else  
                    foreach ($eudesenheis as $eudesenhei):   
                ?>
    <div id="photoho">
        <a class="uk-inline" href="/img/desenhos/<?php echo $desenho['photo'];?>" data-caption="<?php echo $eudesenhei['nome'];?> <?php echo $eudesenhei['sobrenome'];?>">
            <img src="/img/desenhos/<?php echo $desenho['photo'];?>" alt="">
        </a>
    </div>

            <?php endforeach; endforeach?>
        </ul>

    <a class="what uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
    <a class="what uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

</div>
</div>