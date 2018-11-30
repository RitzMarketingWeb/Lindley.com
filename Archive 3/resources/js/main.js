
    var sxsw = {

    full_bleed: function(boxWidth, boxHeight, imgWidth, imgHeight) {

        // Calculate new height and width...
        var initW = imgWidth;
        var initH = imgHeight;
        var ratio = initH / initW;

        imgWidth = boxWidth;
        imgHeight = boxWidth * ratio;

        // If the video is not the right height, then make it so...     
        if(imgHeight < boxHeight){
            imgHeight = boxHeight;
            imgWidth = imgHeight / ratio;
        }

        //  Return new size for video
        return {
            width: imgWidth,
            height: imgHeight
        };

    },

    init: function() {
        var browserHeight = Math.round($(window).height());
        var browserWidth = Math.round($(window).width());
        var videoHeight = Math.round($('#bgvid').height())
        var videoWidth = Math.round($('#bgvid').width());

        var new_size = sxsw.full_bleed(browserWidth, browserHeight, videoWidth, videoHeight);

        $('#bgvid')
            .width(new_size.width)
            .height(new_size.height);  
    }

}; 
$(window).load(function(){
	adjustWindow();	
	sxsw.init();
	adjustVideo();
	});
	
$(window).resize(function(){
	adjustWindow();	
	adjustVideo();
	});

function adjustVideo()
{
	var browserHeight = Math.round($(window).height());
	var browserWidth = Math.round($(window).width());
	
	var videoHeight = Math.round($('#bgvid').height());
	var videoWidth = Math.round($('#bgvid').width());
	
	var newSize = sxsw.full_bleed(browserWidth, browserHeight, videoWidth, videoHeight);
	
	console.log('NewWidth: '+newSize.width);
	console.log('NewHeight: '+newSize.height);
	
	$('#bgvid').width(newSize.width);
	$('#bgvid').height(newSize.height);
	
	videoWidth = newSize.width;
	
	if (videoWidth > browserWidth)
	{
		var half_difference = (videoWidth - browserWidth) / 2;
		console.log(half_difference);
		$('#bgvid').css('left', '-'+half_difference+'px');	
	}
	else
	{
		$('#bgvid').css('left', 'none');	
	}
}

function adjustWindow()
{
	winH = $(window).height();
	winW = $(window).width();
	if (winH < 660)
		winH = 660;
	if ((winW > 1024) && (winH > 660) && !(/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent))) 
	{
		var s = skrollr.init({
			forceHeight: true,
			smoothScrolling: false,
			constants: {
			box: '150p'
		}
		});
		skrollr.menu.init(s, {
			animate: true,
			easing: 'sqrt',
			//How long the animation should take in ms.
		duration: function(currentTop, targetTop) {
			return Math.abs(currentTop - targetTop)/3;
		},
			handleLink: function(link) {
				mylink=jQuery(link).attr('href');
				switch (mylink){
					case '#home':
						return 0;
						break;
					case '#about_us':
						return '100p';
						break;
					case '#practice_areas':
						return '450p';
						break;
					case '#testimonials':
						return '550p';
						break;
					case '#resources':
						return '670p';
						break;
					case '#contact_us':
						return '790p';
						break;
				}
			}
		}
		);
	}
	else
	{
		var s = skrollr.init();
		s.destroy();
	}
}