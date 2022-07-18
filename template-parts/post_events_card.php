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
                    <div class="post_category"><?php the_field('event_item');//the_category(''); ?></div>
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
        <div class="event-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
        <div class="event-intro"><?php the_field('excerpt'); ?><?php echo "..."?></div>
    </div>
</div>