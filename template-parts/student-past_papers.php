<div class="student_paper">
    <?php $years = get_categories(array(
                'taxonomy' => 'papers_cat',
                'parent' => 40,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'DSEC'
            ) );
          $divisions = get_categories(array(
                'taxonomy' => 'papers_cat',
                'parent' => 41,
                'orderby' => 'slug',
                'hide_empty' => false,
                'order'   => 'ASC'
            ) );
    ?>
    <div class="select_bar_container">
       <!-- <input type="hidden" id="filters-field" value="" />
        <input type="hidden" id="filters-title" value="" />-->
        <div class="cat_list_container">
            <p>年份｜</p>
            <ul class="cat_list" id="cat_area">
                <?php foreach($years as $year) : ?>
                    <li>
                        <a class="<?= "cat_list_item " . $year->slug; ?>" href="#!">
                            <span class="cat_list_item_dot"></span>    
                            <span class="cat_list_item_name"><?= $year->name; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="cat_list_container">
            <p>領域｜</p>
            <ul class="cat_list" id="cat_prof">
                <?php foreach($divisions as $division) : ?>
                    <li>
                        <a class="<?= "cat_list_item " . $division->slug; ?>" href="#!">
                            <span class="cat_list_item_dot"></span>    
                            <span class="cat_list_item_name"><?= $division->name; ?></span>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <div class="block_papers"> 
        <div class="item_titles _font18">
            <span>年份</span>
            <span class="name_col">姓名</span>
            <span class="name_col">畢業學位</span>
            <span class="name_col">指導教授</span>
            <span class="name_col">論文名稱</span>
        </div>
        <?php 
            $args = array(
                'post_type' => 'papers',
                'post_status' => 'publish',
                'taxonomy' => 'papers_cat'
            );

            $arr_posts = new WP_Query($args);
            if($arr_posts->have_posts()):
        ?>
            <div class="block_paper_posts">
                <?php
                while ($arr_posts->have_posts()) :
                        $arr_posts->the_post();
                ?>
                    <?php
                        $year = get_field('year');
                        $name = get_field('name');
                        $degree = get_field('degree');
                        $advisor = get_field('advisors');
                        $paper = get_field('paper');
                    ?>
                    <div class="row_paper">
                        <span class="year _font22"><?php echo $year;?></span>
                        <span class="name _font22"><?php echo $name;?></span>
                        <span class="degree _font22"><?php echo $degree;?></span>
                        <span class="advisor _font22"><?php echo $advisor;?></span>
                        <span class="paper _font22"><?php echo $paper;?></span>
                    </div>
                <?php endwhile;?>
            </div>
        <?php endif; wp_reset_postdata(); ?>
    </div>
</div>