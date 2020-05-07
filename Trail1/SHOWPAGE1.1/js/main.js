/*

	SHOWPAGE FREE TEMPLATE BY IAMSUPVIEW.BE
	
	01. Sticky Navbar
	02. Modal + Pre Code
	03. Smooth Scrolling
	04. MediaCheck
	05. Animations make-it-appear
	06. Load the Whole Page

*/

var ajax_form = true;

$(document).ready(function () { // Document ready



/*-----------------------------------------------------------------------------------*/
    /*	01. NAVBAR STICKY + SELECTED
/*-----------------------------------------------------------------------------------*/



    var cbpAnimatedHeader = (function () {

        var docElem = document.documentElement,
            header = document.querySelector('.cbp-af-header'),
            didScroll = false,
            changeHeaderOn = 100;

        function init() {
            window.addEventListener('scroll', function (event) {
                if (!didScroll) {
                    didScroll = true;
                    setTimeout(scrollPage, 0);
                }
            }, false);
        }

        function scrollPage() {
            var sy = scrollY();
            if (sy >= changeHeaderOn) {
                classie.add(header, 'cbp-af-header-shrink');
            } else {
                classie.remove(header, 'cbp-af-header-shrink');
            }
            didScroll = false;
        }

        function scrollY() {
            return window.pageYOffset || docElem.scrollTop;
        }

        init();

    })();




/*-----------------------------------------------------------------------------------*/
/*	02. MODAL & PRE CODE
/*-----------------------------------------------------------------------------------*/


$( 'pre' ).text( $( 'pre' ).html() );


var modal        = document.getElementById('modal'),
    modalContent = document.querySelector('.modal-content'),
    openModal    = document.querySelector('.js-open-modal'),
    closeModal   = document.querySelectorAll('.modal, .modal-close');

openModal.addEventListener('click', function() {
  modal.classList.add('is-visible');
});

[].forEach.call(closeModal, function ( el ) {
   el.addEventListener('click', function() {
     modal.classList.remove('is-visible');
  });
});

modalContent.addEventListener('click', function ( event ) {
  event.stopPropagation();  
});

setTimeout(function() {
  modal.style.display = 'block';
}, 250);

/*-----------------------------------------------------------------------------------*/
/*	03. SMOOTH SCROLLING ON BUTTON
/*-----------------------------------------------------------------------------------*/
	

$('.goto').click(function(e){
 e.preventDefault();
    $('html').scrollTo(this.hash,this.hash);
   
});



/*-----------------------------------------------------------------------------------*/
/*	04. MEDIACHECK
/*-----------------------------------------------------------------------------------*/


    mediaCheck({
        media: '(max-width: 768px)',
        entry: function () {

            $('.make-it-appear-top').waypoint(function (direction) {
                $(this).css('opacity', '1');
            }, {
                offset: '200%'
            });

            $('.make-it-appear-left').waypoint(function (direction) {
                $(this).css('opacity', '1');
            }, {
                offset: '200%'
            });

            $('.make-it-appear-right').waypoint(function (direction) {
                $(this).css('opacity', '1');
            }, {
                offset: '200%'
            });

            $('.make-it-appear-bottom').waypoint(function (direction) {
                $(this).css('opacity', '1');
            }, {
                offset: '200%'
            });


        },
        exit: function () {

/*-----------------------------------------------------------------------------------*/
            /*	05. ANNIMATIONS MAKE IT APPEAR
/*-----------------------------------------------------------------------------------*/


            $('.make-it-appear-top').waypoint(function (direction) {
                $(this).addClass('animated fadeInDown');
            }, {
                offset: '80%'
            });

            $('.make-it-appear-left').waypoint(function (direction) {
                $(this).addClass('animated fadeInLeft');
            }, {
                offset: '80%'
            });

            $('.make-it-appear-right').waypoint(function (direction) {
                $(this).addClass('animated fadeInRight');
            }, {
                offset: '80%'
            });

            $('.make-it-appear-bottom').waypoint(function (direction) {
                $(this).addClass('animated fadeInUp');
            }, {
                offset: '80%'
            });

            $('.bounce').waypoint(function (direction) {
                $(this).addClass('animated bounce');
            }, {
                offset: '70%'
            });

            $('.pulse').waypoint(function (direction) {
                $(this).addClass('animated pulse');
            }, {
                offset: '50%'
            });

        }


    }); /* END OF THE MEDIACHECK */


}); /* END OF Document Ready */

/*-----------------------------------------------------------------------------------*/
/*	06. Load the Whole Page
/*-----------------------------------------------------------------------------------*/



$(window).load(function () {
    // will first fade out the loading animation
    jQuery("#loading-animation").fadeOut();
    // will fade out the whole DIV that covers the website.
    jQuery("#preloader").delay(600).fadeOut("slow");



});