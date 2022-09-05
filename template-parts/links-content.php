<?php $links_data  = get_field("links_data", 1286); ?>
<?php if ($links_data) : ?>
    <div class="links-content">
        <?php $cat_count = 1; ?>
        <div class="links-flex-col">
            <?php while ($cat_count <= 8) : ?>
                <?php $links_category = $links_data["links_category_" . $cat_count]; ?>
                <?php if ($links_category["category_name"] && $cat_count % 2 == 1) : ?>
                    <div class="links-category-item">
                        <div class="links-upper-item">
                            <span class="links-item-title"><?php echo $links_category["category_name"]; ?></span>
                            <span class="links-icon-more-item">+</span>
                        </div>
                        <div class="links-items">
                            <?php
                            $item_count = 1;
                            $links_items = $links_category["links_item"];
                            ?>
                            <?php while ($item_count <= 10) : ?>
                                <?php if ($links_items["single_link_" . $item_count]["link_title"]) : ?>
                                    <div class="links-item">
                                        <a class="links-item" href="<?php echo $links_items["single_link_" . $item_count]["link_url"] ?>">
                                            <?php echo $links_items["single_link_" . $item_count]["link_title"] ?>
                                        </a>
                                    </div>
                                <?php endif ?>
                                <?php $item_count += 1 ?>
                            <?php endwhile ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php $cat_count += 1; ?>
            <?php endwhile ?>
        </div>
        <?php $cat_count = 1;?>
        <div class="links-flex-col">
            <?php while ($cat_count <= 8) : ?>
                <?php $links_category = $links_data["links_category_" . $cat_count]; ?>
                <?php if ($links_category["category_name"] && $cat_count % 2 == 0) : ?>
                    <div class="links-category-item">
                        <div class="links-upper-item">
                            <span class="links-item-title"><?php echo $links_category["category_name"]; ?></span>
                            <span class="links-icon-more-item">+</span>
                        </div>
                        <div class="links-items">
                            <?php
                            $item_count = 1;
                            $links_items = $links_category["links_item"];
                            ?>
                            <?php while ($item_count <= 10) : ?>
                                <?php if ($links_items["single_link_" . $item_count]["link_title"]) : ?>
                                    <div class="links-item">
                                        <a class="links-item" href="<?php echo $links_items["single_link_" . $item_count]["link_url"] ?>">
                                            <?php echo $links_items["single_link_" . $item_count]["link_title"] ?>
                                        </a>
                                    </div>
                                <?php endif ?>
                                <?php $item_count += 1 ?>
                            <?php endwhile ?>
                        </div>
                    </div>
                <?php endif ?>
                <?php $cat_count += 1; ?>
            <?php endwhile ?>
        </div>
    </div>
<?php endif ?>
<div class="links-block"></div>