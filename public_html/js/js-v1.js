"use strict";

//Get the real dimensions of the image
let getBackgroundImageSize = function(el) {
    var imageUrl = $(el).css('background-image').match(/^url\(["']?(.+?)["']?\)$/);
    // console.log('imageUrl', imageUrl);
    var dfd = new $.Deferred();

    if (imageUrl) {
        var image = new Image();
        image.onload = dfd.resolve;
        image.onerror = dfd.reject;
        image.src = imageUrl[1];
    } else {
        dfd.reject();
    }

    return dfd.then(function() {
        return { width: this.width, height: this.height };
    });
};

$( window ).resize(function() {
	if ($('.backgroundPar').length) {
		getBackgroundImageSize(jQuery('.backgroundPar'))
		    .then(function(size) {
		        // console.log('Image size is', size.width, size.height);
		        imgOriginalWidth = size.width;
		        imgOriginalHeight = size.height;
				// console.log('imgOriginalHeight', imgOriginalHeight);

				//Calculate image size in current viewport
				responsedImageHeight = imgOriginalHeight * winWidth / imgOriginalWidth;
				// console.log('responsedImageHeight', responsedImageHeight);

				imgVisibleHeight = $('.backgroundPar').height();
				// console.log('imgVisibleHeight', imgVisibleHeight);
				imgOverflownHeight = responsedImageHeight - imgVisibleHeight;
				// console.log('imgOverflownHeight', imgOverflownHeight);
		    })
		    .fail(function() {
		        // console.log('Could not get size because could not load image');
		    });
	}
});

let imgOriginalHeight, imgOriginalWidth, responsedImageHeight, winHeight, winWidth;
let imgVisibleHeight, imgOverflownHeight;
$(document).ready(function() {

	winHeight = $(window).height();
	winWidth = $(window).width();
	// console.log('winHeight', winHeight);
	// console.log('winWidth', winWidth);

	if ($('.backgroundPar').length) {
		getBackgroundImageSize(jQuery('.backgroundPar'))
		    .then(function(size) {
		        // console.log('Image size is', size.width, size.height);
		        imgOriginalWidth = size.width;
		        imgOriginalHeight = size.height;
				// console.log('imgOriginalHeight', imgOriginalHeight);

				//Calculate image size in current viewport
				responsedImageHeight = imgOriginalHeight * winWidth / imgOriginalWidth;
				// console.log('responsedImageHeight', responsedImageHeight);

				imgVisibleHeight = $('.backgroundPar').height();
				// console.log('imgVisibleHeight', imgVisibleHeight);
				imgOverflownHeight = responsedImageHeight - imgVisibleHeight;
				// console.log('imgOverflownHeight', imgOverflownHeight);
		    })
		    .fail(function() {
		        // console.log('Could not get size because could not load image');
		    });
	}




	$(window).scroll(function(){
		if ($('.backgroundPar').length) {
			winHeight = $(window).height();
			winWidth = $(window).width();
			// console.log('winHeight', winHeight);
			// console.log('winWidth', winWidth);

			let currentPosition = $(document).scrollTop();
			// console.log('currentPosition', currentPosition);

			let elementTopPosition = $('.backgroundPar').offset().top;
			// console.log('elementTopPosition', elementTopPosition);

			let elementHeight = $('.backgroundPar').height();
			// console.log('elementHeight', elementHeight);

			// As Scrolling...
			// animation should start when image's top third is at viewport (at bottom) and 
			// finish when image's bottom third is visable at viewport (at top)
			// so animation 'lasts' for (winHeight + 1/3 * elementHeight)
			// Animation will happen only if viewport height is not enough to cover for full image height
			// If it is, there is no need for animation
			if (imgVisibleHeight + imgOverflownHeight > winHeight) {
				if((currentPosition + winHeight > elementTopPosition + 1/3*elementHeight) && (currentPosition < elementTopPosition + 2/3*elementHeight)) {
					// console.log('animating');
					let heightToAnimate = (imgVisibleHeight + imgOverflownHeight) - winHeight;
					//animate background image
					let portionOfHeightToAnimate = ( (currentPosition + winHeight - (elementTopPosition+1/3*elementHeight)) / (elementHeight * (1 / 3) + winHeight) );
					// console.log('portionOfHeightToAnimate', portionOfHeightToAnimate);

					let newTopPosition = (-1) * heightToAnimate + heightToAnimate * portionOfHeightToAnimate;
					// console.log('newTopPosition', newTopPosition);
					$('.backgroundPar').css('background-position-y',`${newTopPosition}px`);
				}
			} 
		}
	});

	//Bootstrap sub-menu...
	//////////////////////// Prevent closing from click inside dropdown
    $(document).on('click', '.dropdown-menu', function (e) {
      e.stopPropagation();
    });

    // make it as accordion for smaller screens
    if ($(window).width() < 992) {
	  	$('.dropdown-menu a').click(function(e){
	  		e.preventDefault();
	        if($(this).next('.submenu').length){
	        	$(this).next('.submenu').toggle();
	        }
	        $('.dropdown').on('hide.bs.dropdown', function () {
			   $(this).find('.submenu').hide();
			})
	  	});
	}
});
