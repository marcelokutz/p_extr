<?php $i = 1; if( get_field('banners') ) { if( get_field('banners') ) { ?>
    <div class="banners-home row">
        <?php while( has_sub_field('banners') ){ ?>
            <div class="col-12 col-lg-6 text-center">
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
