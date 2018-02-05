$(window).ready(()=>{
    setTimeout(()=>{
        $('#initLogoContainer').fadeOut(1000);
    }, 1000);
    setTimeout(()=>{
        $('#nameLogo').fadeIn(1000);
    }, 1800);
    setTimeout(()=>{
        $('.mainMenuEl').fadeIn(1000);
    }, 2000);
});

console.log(imgUrlArr);
$(()=>{
    $('#indexRow1').bgswitcher({
        images: imgUrlArr,
        interval: 7500,
        duration: 4000,
        effect: 'fade'
    })
});