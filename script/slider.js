let sliderEl = $('.slider');
let sliderBoxEl = sliderEl.find('.slider-box');
let sliderBoxItemEls = sliderEl.find('.slider-box-item');
let silderBulletsItemEls = sliderEl.find('.slider-bullets-item');
let nowSlideNum = 0;


sliderEl.find('.slider-arrows-left').click(function(){
    if( nowSlideNum == 0 ){
        nowSlideNum = sliderBoxItemEls.length - 2;
        sliderBoxEl.css('left', (nowSlideNum + 1) * -100 + '%');
    }else{
        nowSlideNum--;
        
    }

    sliderBoxEl.animate({
        'left': nowSlideNum * -100 + '%'
    });

    silderBulletsItemEls.removeClass('active');
    silderBulletsItemEls.eq(nowSlideNum).addClass('active');
});


sliderEl.find('.slider-arrows-right').click(function(){
    if( nowSlideNum == sliderBoxItemEls.length - 2 ){
        nowSlideNum++;
        sliderBoxEl.animate({
            'left': nowSlideNum * -100 + '%'
        }, function(){
    nowSlideNum = 0;
    sliderBoxEl.css('left', nowSlideNum * -100 + '%');
    silderBulletsItemEls.removeClass('active');
    silderBulletsItemEls.eq(nowSlideNum).addClass('active');
        });

    }else{
        nowSlideNum++;
        sliderBoxEl.animate({
        'left': nowSlideNum * -100 + '%'
    });
    silderBulletsItemEls.removeClass('active');
    silderBulletsItemEls.eq(nowSlideNum).addClass('active');
    }
});

silderBulletsItemEls.click(function(){

    nowSlideNum = silderBulletsItemEls.index( $(this) );

    silderBulletsItemEls.removeClass('active');
    silderBulletsItemEls.eq(nowSlideNum).addClass('active');

    sliderBoxEl.animate({
        'left': nowSlideNum * -100 + '%'
    });

});