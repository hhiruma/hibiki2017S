<?php
/*
Template Name: stages template
*/
?>

<?php get_header(); ?>

<main class="site-main" role="main">
    <?php get_template_part('pages/headBar');?>
    <div id="stagesContainer">
        <h1> STAGES </h1>
        <div id="stagesVideo">
            <template v-for="postData in postsData" v-if="postData['title'] === selectedPostTitle">
                <iframe
                    width="100%"
                    :src="'http://'+postData['content'].match(/www\.youtube\.com.*rel=0/)[0]"
                    frameborder="0"
                    allowfullscreen>
                </iframe>
            </template>
        </div>
        <div id="stagesSelector">
            <div id="stagesShowTabContainer">
                <template v-for="year in activeYears">
                    <input :id="'tab'+year" type="radio" name="stagePageTabYear" hidden>
                    <label @click="selectYear(year)" class="hvr-forward" :for="'tab'+year" style="cursor: pointer">{{ year }}年度</label>
                </template>
            </div>

            <div id="stagesShowMainContainer">
                <div class="flexslider">
                    <ul class="slides">
                        <li id="stagesSlides1">
                            <?php
                                //have to edit post id
                                $post = get_post(16);
                                $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                                echo $post_content;
                            ?>
                            <br>
                            <?php
                                //have to edit post id
                                $post = get_post(220);
                                $post_content = sanitize_post_field('post_content', $post->post_content, $post->ID, 'display');
                                echo $post_content;
                            ?>
                        </li>

                        <li id="stagesSlides2">
                            <!-- <div class="stagesTopBar">
                                <i class="fa fa-arrow-left" aria-hidden="true" @click="slideBackTo(0)"></i>
                                select stage
                            </div> -->
                            <div class="stagesThumbnailContainer">
                                <template v-for="postData in postsData" v-if="filterPostByDate(postData)">
                                    <label for="stageSelectedButton">
                                        <div class="stageThumbnail hvr-grow" @click="selectPost(postData['title'])"
                                        :style="'background-image: url(' + postData['thumbUrl'] + ');' + bgImgStyle">
                                            <div class="stageThumbnailImg"
                                            :style="'background-image: url(' + postData['thumbUrl'] + ');' + bgImgStyle">
                                            </div>
                                            <div class="stageThumbnailTitle" style="position: absolute; bottom: 3px; text-align: center; width: 100%">
                                                {{ postData['title'] }}
                                            </div>
                                        </div>
                                    </label>
                                </template>
                            </div>
                            <button id="stageSelectedButton" hidden>button</button>
                        </li>

                        <li id="stagesSlides3">
                            <div id="stagesShowMainContent">
                                <div id="stagesShowMainTopBar">
                                    <i class="fa fa-arrow-left" aria-hidden="true" @click="slideBackTo(1)"></i>
                                    {{ selectedPostTitle }}
                                </div>
                                <template class="stageShowContentHtml" v-for="postData in postsData" v-if="postData['title'] === selectedPostTitle">
                                    <div v-html="postData['content']"></div>
                                </template>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>

<?php
    //get stages data
    $stagePostsArgs = array('category_name'=>'Stages');
    $stagePosts = get_posts($stagePostsArgs);
    $stagePostArr = [];
    foreach($stagePosts as $stagePost){
        $stageAttr = array(
            "title" => $stagePost->post_title,
            "date" => $stagePost->post_date,
            "content" => $stagePost->post_content,
            "modalVis" => false
        );
        array_unshift($stagePostArr, $stageAttr);
    }
?>

<script type="text/javascript">
    const stagePosts = <?php echo json_encode($stagePostArr); ?>;
</script>

<link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/stagesPage.css">
<script src="<?php echo get_template_directory_uri();?>/js/stagesPage.js"></script>