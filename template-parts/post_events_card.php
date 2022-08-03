<?php $locale = get_locale();?>

<div class="event-cards-mask">
    <div class="event-main-margin">
        <div class="event-main-slide-upper">
            <div class="event-img-container"><img src="<?php bloginfo('template_url') ?>/images/icon/pic-seminar.svg"></div>
            <div class="event-info">
                <div class="event-date-title">
                    <img src="<?php bloginfo('template_url') ?>/images/icon/icon-clock.svg">
                    <span class="event-date-words">Date</span>
                </div>
                <div class="event-date"><?php the_field('event_date');?> </div>
                <div class="hp_event_tag">
                    <div class="post_category">
                        <?php $event_cat = get_field('event_item');
                            if($locale == "en_US"){
                                if($event_cat == "學術演講"){
                                    echo "Seminar";
                                }elseif($event_cat == "讀書會"){
                                    echo "Study group";                                
                                }
                            }
                            else{
                                echo $event_cat;
                            }
                        ?>
                    </div>
                    <div class="event-location"><?php the_field('event_location'); ?></div>
                </div>
                <?php
                        $sdgs = get_field('sdg');
                        if( $sdgs ): ?>
                            <ul class="sdg-tag ">
                                    <?php foreach( $sdgs as $sdg ): ?>
                                        <li><?php echo $sdg; ?></li>
                                    <?php endforeach; ?>
                            </ul>
                <?php endif; ?>
            </div>
        </div>
        <div class="event-name">
            <a href="<?php the_permalink(); ?>">
            <?php $mb_strlen = mb_strlen(get_the_title()) ; $strlen = strlen(get_the_title());
                if($locale == "en_US"){
                        /*there is no mandarin*/
                        if($mb_strlen >= 70){
                            echo mb_substr(get_the_title(), 0, 67) . "...";
                        }
                        else{
                            echo the_title();
                        }
                }else{
                if($mb_strlen == $strlen){
                        /*there is no mandarin*/
                        if($mb_strlen >= 70){
                            echo mb_substr(get_the_title(), 0, 67) . "...";
                        }
                        else{
                            echo the_title();
                        }
                }
                else{ 
                        /* in mandarin */
                        if($mb_strlen >= 40){
                            echo mb_substr(get_the_title(), 0, 38) . "...";
                        }
                        else{
                            echo the_title();
                        }
                } } ?>
            </a>
        </div>
        <div class="event-intro"><?php the_field('excerpt'); ?><?php echo "..."?></div>
    </div>
</div>