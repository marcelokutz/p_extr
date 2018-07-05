<?php $i = 1; if( get_field('destaques_randomicos') ) { if( get_field('destaques_randomicos') ) { ?>
    <div class="destaques-home row">
        <?php while( has_sub_field('destaques_randomicos') ){ ?>
            <div class="col-6 col-lg-6">
                <div class="destaque-wrap">
                    <?php
                        if( get_sub_field('url') ) {
                            echo '<a href="' . get_sub_field('url') . '">';
                        }
                        echo '<img src="';
                        echo get_sub_field('imagem');
                        echo '" class="destaque-img" alt="" />';
                        if( get_sub_field('descricao_home') ) {
                            echo '<div class="descricao">';                            
                            echo get_sub_field('descricao_home');
                            echo '</div>';
                        }
                        if( get_sub_field('url') ) {                        
                            echo '</a>';
                        }
                    ?>
                </div>
            </div>
        <?php $i++; } ?>
    </div>
<?php } } ?>
