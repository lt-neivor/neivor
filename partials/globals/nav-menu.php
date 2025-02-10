   
<?php
/**
 * 
 * Partial Name: nav-menu
 * 
 */
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}
$nav = get_field('nav', 'options');
if($nav):
$sing_in = get_field('sing_in_link', 'option');
?>
<ul class="nav-menu-partial-00596a">
    <?php foreach($nav as $main_nav): ?>
        <li>
            <span class="main-menu-name">
                <?= $main_nav['name_menu']; ?>
            </span>
            <?php if($main_nav['sub_menu']): ?>
                <div class="sub-menu-pop-up" style="<?php if($main_nav['nav_max_width']): ?>min-width:<?= $main_nav['nav_max_width']; ?><?php else: ?>min-width:564px;<?php endif; ?>">
                    <div class="row">
                        <?php foreach($main_nav['sub_menu'] as $sub_menu): ?>
                            <div class="menu-pop-up <?= $sub_menu['select_grid']; ?>">
                                <div class="contain">
                                    <?php if($sub_menu['sub_menu_name']): ?>
                                        <span class="sub-menu-name">
                                            <?php if($sub_menu['sub_menu_icon']): ?>
                                                <img src="<?= $sub_menu['sub_menu_icon']['url']; ?>" alt="<?= $sub_menu['sub_menu_icon']['title']; ?>">
                                            <?php endif; ?>
                                            <?= $sub_menu['sub_menu_name']; ?>
                                        </span>
                                    <?php endif; ?>
                                    <?php if($sub_menu['sub_menu_links']): ?>
                                        <ul class="nav-page">
                                            <?php foreach($sub_menu['sub_menu_links'] as $item): ?>
                                                <li>
                                                    <a href="<?= $item['external_url']['url']; ?>" target="<?= $item['external_url']['target']; ?>">
                                                        <?= $item['external_url']['title']; ?>
                                                    </a>
                                                </li>
                                            <?php endforeach; ?>
                                        </ul>
                                    <?php endif; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </li>
    <?php endforeach; if($sing_in): ?>
        <li class="sing-in">
            <a href="<?= $sing_in['url']; ?>" target="_blank">
                <span><?= $sing_in['title']; ?></span>
            </a>
        </li>
    <?php endif; ?>
</ul>
<?php endif; ?>          