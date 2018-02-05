<?php get_header(); ?>

<main class="site-main" role="main">
	<div id="indexContainer">
		<div id="initLogoContainer">
			<img src="<?php echo get_template_directory_uri();?>/images/index/logo.jpg">
		</div>
		<div id="indexBgContainer">
			<div id="indexRow1">
				<img hidden id="nameLogo" src="<?php echo get_template_directory_uri();?>/images/index/nameLogo.png">
			</div>

			<div id="indexRow2">
				<img id="tomoeLogo" src="<?php echo get_template_directory_uri();?>/images/index/tomoe.png">
			</div>
		</div>

		<div id="mainMenu">
			<?php
            if(get_post_status(224) == 'publish'){
				$pageList = ['ABOUT US', 'STAGES', 'JOIN US', 'CONTACT'];
				$slagList = ['about_us', 'stages', 'new-comers', 'contact'];
            } else {
                $pageList = ['ABOUT US', 'STAGES', 'CONTACT'];
				$slagList = ['about_us', 'stages', 'contact'];
            }
			?>
			<?php foreach($pageList as $key => $page):?>
				<div hidden class="mainMenuEl" style="width: <?php echo 220+20*$key?>px">
					<a href="<?php echo home_url('/'.$slagList[$key])?>"></a>
					<?php echo $page?>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</main>

<?php get_footer(); ?>

<?php
	$imgUrlArr = array();
	$baseUrl = plugin_dir_path(__FILE__).'images/index/bg/';
	for($fileName = 1; ; $fileName++):
		// has to fix to be able to do aginst any type of image
		$filePathChecker = $baseUrl.$fileName.'.jpg';
		$filePath = get_template_directory_uri().'/images/index/bg/'.$fileName.'.jpg';
		if(file_exists($filePathChecker)):
			$imgUrlArr[] = $filePath;
		else:
			break;
		endif;
	endfor;

	$jsImgArr = json_encode($imgUrlArr);
?>

<script>
    const imgUrlArr = <?php echo $jsImgArr; ?>;
</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/indexPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/main.js"></script>