new Vue({
    el: "#stagesContainer",
    data: {
        postsData: stagePosts,
        activeYears: [],
        selectedYear: 0,
        selectedPostTitle: "",
        bgImgStyle: " background-size: cover; background-repeat: none; background-position: center center;"
    },

    methods: {
        pushAllYears(posts) {
            let latest = Number(this.getActiveYear(posts[0]['date']));
            let oldest = Number(this.getActiveYear(posts[posts.length - 1]['date']));

            for (let i = latest; i >= oldest; i--) {
                this.activeYears.push(i);
            }
        },
        getActiveYear(date) {
            let dataParse = date.split('-');
            let activeYear;
            if (dataParse[1] >= 4 && dataParse[1] <= 12) {
                activeYear = dataParse[0];
            } else if (dataParse[1] >= 1 && dataParse[1] <= 3) {
                activeYear = Number(dataParse[0]) - 1;
            } else {
                activeYear = -1;
            }
            return activeYear;
        },
        selectYear(activeYear) {
            this.selectedYear = activeYear;
            this.selectedPostTitle = '';
            $('#stagesShowMainContainer .flexslider').data('flexslider').flexAnimate(1);
        },
        filterPostByDate(post) {
            return this.getActiveYear(post['date']) === this.selectedYear;
        },
        toggleModalVis(post) {
            post['modalVis'] = !post['modalVis'];
        },
        selectPost(titleStr){
            this.selectedPostTitle = titleStr;
        },
        slideBackTo(i){
            $('#stagesShowMainContainer .flexslider').data('flexslider').flexAnimate(i);
            if(i === 0){
                $('#stagesShowTabContainer input[type="radio"]').prop('checked', false);
            }
            if(i === 1){
                this.selectedPostTitle = '';
            }
        }
    },
    created: function () {
        if (this.activeYears.length === 0) {
            this.pushAllYears(this.postsData);
        }

        //set activeYears value
        for (post of this.postsData) {
            this.activeYears.push(post['date'].split('-')[0]);
        }
        this.activeYears.sort(function (a, b) { return b - a; })
        this.activeYears = [...new Set(this.activeYears)];

        //get videoID of embeded youtube
        for (post of this.postsData){
            post['vidId'] = post['content'].match(/www\.youtube\.com.*rel=0/)[0].split('/')[2].split('?')[0];
            post['thumbUrl'] = 'http://img.youtube.com/vi/' + post['vidId'] + '/0.jpg';
            console.log(post['thumbUrl']);
        }
    }
});

// flexslider
$('#stagesShowMainContainer .flexslider').flexslider({
    animation: 'slide',
    slideshow: false,
    animationLoop: false,
    animationSpeed: 500,
    controlNav: false,
    directionNav: false,
    before: function(slider){ },
    after: function(slider){ }
});

$('#stagesShowMainContainer button#stageSelectedButton').click(()=>{
    $('#stagesShowMainContainer .flexslider').data('flexslider').flexAnimate(2);
});
