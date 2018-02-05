<div id="menuButton" onclick="toggleHeadBarMenu()">
    <i class="fas fa-bars"></i>
</div>

<div id="headBarMenu" style="visibility:hidden" onclick="hideHeadBarMenu()">
    <?php
    if(get_post_status(224) == 'publish'){
        $pageList = ['TOP', 'ABOUT US', 'STAGES', 'JOIN US', 'CONTACT'];
        $slagList = ['', 'about_us', 'stages', 'new-comers', 'contact'];
    } else {
        $pageList = ['TOP', 'ABOUT US', 'STAGES', 'CONTACT'];
        $slagList = ['', 'about_us', 'stages', 'contact'];
    }
    ?>
    <?php foreach($pageList as $key => $page):?>
        <div class="headBarMenuEl" style="width: <?php echo 220+20*$key?>px; visibility:hidden">
            <a href="<?php echo home_url('/'.$slagList[$key])?>"></a>
            <?php echo $page?>
        </div>
    <?php endforeach ?>
</div>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/headBar.css">
<script src="<?php echo get_template_directory_uri();?>/js/headBar.js"></script>