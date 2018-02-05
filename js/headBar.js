function toggleHeadBarMenu(){
    if ($('.headBarMenuEl').css('visibility') == 'hidden'){
        $('.headBarMenuEl').css('visibility', 'visible');
        $('#headBarMenu').css('visibility', 'visible');
    } else {
        $('.headBarMenuEl').css('visibility', 'hidden');
        $('#headBarMenu').css('visibility', 'hidden');
    }
}

function hideHeadBarMenu(){
    if ($('.headBarMenuEl').css('visibility') == 'visible'){
        $('.headBarMenuEl').css('visibility', 'hidden');
        $('#headBarMenu').css('visibility', 'hidden');
    }
}