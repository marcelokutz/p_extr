<?php $i = 1; if( get_field('slider') ) { if( get_field('slider') ) { ?>
    <div class="slider-home">
        <?php while( has_sub_field('slider') ){ ?>
            <div class="item">
                <?php
                    if( get_sub_field('url') ) {
                        echo '<a href="' . get_sub_field('url') . '">';
                    }
                    echo '<img src="';
                    echo get_sub_field('imagem');
                    echo '" class="img-fluid" alt="" />';
                    if( get_sub_field('url') ) {                        
                        echo '</a>';
                    }
                ?>
            </div>
        <?php $i++; } ?>
    </div>
<?php } } ?>
