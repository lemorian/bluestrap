  
  <?php $image = adverts_get_main_image( get_the_ID() ) ?>
 
 <div class="card card-listings">
        <header >
        <a href="<?php the_permalink() ?>" title="<?php echo esc_attr( get_the_title() ) ?>">
                <div class="image-holder-product">
                    <!--<span class="Centerer">
                    </span>-->
                    <?php if($image): ?>
                           
                            <?php 
                                echo get_the_post_thumbnail( get_the_ID() , 'medium', array( 'class' => 'card-img-top,Centered' ,'style'=>'margin-top:1em') );
                            ?>
                        <?php endif; ?>
                </div>
            </a>
        </header>
        <div class="card-body">
            <h5 class="card-title">
                <?php echo esc_attr( get_the_title() ) ?>
            </h5>
            <span class="advert-date"><?php echo date_i18n( get_option( 'date_format' ), get_post_time( 'U', false, get_the_ID() ) ) ?></span>

            <?php $location = get_post_meta( get_the_ID(), "adverts_location", true ) ?>
            <?php if( ! empty( $location ) ): ?>
            <span class="advert-item-col-1-only advert-location adverts-icon-location"><?php echo esc_html( $location ) ?></span>
            <?php endif; ?>

            <?php $price = get_post_meta( get_the_ID(), "adverts_price", true ) ?>
            <?php if( $price ): ?>
            <div class="advert-price"><?php echo esc_html( adverts_get_the_price( get_the_ID(), $price ) ) ?></div>
            <?php elseif( adverts_config( 'empty_price' ) ): ?>
            <div class="advert-price adverts-price-empty"><?php echo esc_html( adverts_empty_price( get_the_ID() ) ) ?></div>
            <?php endif; ?>
    </div> 
</div>

