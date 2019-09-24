( function($) {
  'use strict';
$(function(e) {
$(function() {
    $('#navigation li.menu-item-has-children .arrow').click(function(e) {
        e.stopPropagation();
		var $el = $(this).siblings('ul.sub-menu').slideToggle();
    });
        $('#navigation li.menu-item-has-children .arrow').click(function(e) {
        e.stopImmediatePropagation();  
    });
});		
	
 $('ul#menu-loan-menu li').find('a').each(function(i, ojb) {
        $(this).addClass('js-target-scroll');
    });
	/*-------------------------------------------------------------------------------
	  Smooth scroll to anchor
	-------------------------------------------------------------------------------*/
	var navbar=$('.js-navbar');
	var navbarAffixHeight=110
	$('.js-target-scroll').on('click', function(e) {
		var target = $(this.hash);
		if (target.length) {
			$('html,body').animate({
				scrollTop: (target.offset().top - navbarAffixHeight + 1)
			}, 1000);
			return false;
		}
	});
	$('body').scrollspy({
			offset:  navbarAffixHeight + 1
	});	

/*------------------------------------------------------------------
	Intro-Slider
	-------------------------------------------------------------------*/
if (screen.width < 768) {
	$('#intro_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	autoplay:true,
    autoplayTimeout:5000,
	rtl:true,
	dots: false,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1}
    }
	})
}
else {
	$('#intro_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	autoplay:true,
    autoplayTimeout:5000,
	autoWidth:true,
	rtl:true,
	dots: false,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1}
    }
	})
}
	
/*------------------------------------------------------------------
	Latest-Projects
	-------------------------------------------------------------------*/
	$('#portfolio_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:5000,
    responsive:{
        0:{items:1},
        600:{items:2},
		800:{items:3},
        1000:{items:4}
    }
	})

/*------------------------------------------------------------------
	Testimonials-Slider
	-------------------------------------------------------------------*/
	$('#testimonial_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:5000,
    responsive:{
        0:{items:1},
        600:{items:1},
        1000:{items:1}
    }
	})
	
	
/*------------------------------------------------------------------
	Testimonials-Slider-2
	-------------------------------------------------------------------*/
	$('#testimonial_slider2 .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:5000,
    responsive:{
        0:{items:1},
        600:{items:2},
        1000:{items:3}
    }
	})
	
	
	/*------------------------------------------------------------------
	Latest-Projects
	-------------------------------------------------------------------*/
	$('#portfolio_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:5000,
    responsive:{
        0:{items:1},
        600:{items:2},
		800:{items:3},
        1000:{items:4}
    }
	})
/*------------------------------------------------------------------
	Advisor ServicesSlider
	-------------------------------------------------------------------*/
	$('#advisor_services .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:8000,
    responsive:{
        0:{items:1},
        600:{items:2},
        900:{items:3},
        1000:{items:4}
    }
	})
	
/*------------------------------------------------------------------
	Partner Style 2
	-------------------------------------------------------------------*/
	$('#partner_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
	dots:false,
	autoplay:true,
	rtl:true,
    autoplayTimeout:8000,
    responsive:{
        0:{items:1},
        600:{items:3},
        1000:{items:5}
    }
	})
	
/*------------------------------------------------------------------
	Loan-Slider
	-------------------------------------------------------------------*/
	$('#loan_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:8000,
    responsive:{
        0:{items:1},
        600:{items:2},
        1000:{items:3}
    }
	})
	
/*------------------------------------------------------------------
	Interest-Rate-Slider
	-------------------------------------------------------------------*/
	$('#interest_rate_slider .owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:true,
	autoplay:true,
	rtl:true,
    autoplayTimeout:8000,
    responsive:{
        0:{items:1},
        600:{items:2},
		768:{items:1},
        1000:{items:2},
		1200:{items:2}
    }
	})
/*------------------------------------------------------------------
	Loan-Amount-Slider
	-------------------------------------------------------------------*/	
	// With JQuery
	
	 $( "#loan_amount" ).slider({
               min: 1000,
               max: 500000,
		});
			$("#loan_amount").on("slide", function(slideEvt) {
				$("#hidden_amo").val(slideEvt.value);
				$("#loan_amountSliderVal").text(slideEvt.value);
	});

/*------------------------------------------------------------------
	Loan-Period-Slider
	-------------------------------------------------------------------*/	
	// With JQuery
	
	 $( "#loan_period" ).slider({
               //range:true,
               min: 1,
               max: 20,
		});
			
			$("#loan_period").on("slide", function(slideEvt) {
				$("#loan_periodSliderVal").text(slideEvt.value);
	});
				
/*------------------------------------------------------------------
	Loan-Interest-Slider
	-------------------------------------------------------------------*/	
	// With JQuery
	$("#loan_interest").slider();
	$("#loan_interest").on("slide", function(slideEvt) {
		$("#loan_interestSliderVal").text(slideEvt.value);
	});
	
//////////////////////////////// Emi calculator code ///////////////////
	
	// With JQuery  Amount Get 
	$("#loan_amount_2").slider();
	$("#loan_amount_2").on("slide", function(slideEvt) {
		
			 var principal= $('#loan_amount_2').val();
			  var rate= $('#loan_interest1').val();
			   var period= $('#loan_period_1').val();
                var emiAmount=parseFloat(principal)*(parseInt(rate)/(12*100))*Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12)/(Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12) - 1);
				document.getElementById("total123").innerHTML = Math.round(emiAmount);
				var totalpayAmout=parseFloat(emiAmount)*parseInt(period)*12;
				$('#tot_interest_amount').text(Math.round(parseFloat(totalpayAmout-parseFloat(principal)))); //total interest
				$('#total_pay_amount').text(Math.round(parseFloat(emiAmount)*parseInt(period)*12)); //interest + principal //
                $('#principal_loan_amount').text($('#loan_amount_2').val());//
		        $("#loan_amount_2SliderVal").text(slideEvt.value);
	});
	
	// interst rate 
	$("#loan_interest1").slider();
	$("#loan_interest1").on("slide", function(slideEvt) {
			  
			  var principal= $('#loan_amount_2').val();
			  var rate= $('#loan_interest1').val();
			   var period= $('#loan_period_1').val();
               var emiAmount=parseFloat(principal)*(parseInt(rate)/(12*100))*Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12)/(Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12) - 1);
				document.getElementById("total123").innerHTML = Math.round(emiAmount);
				var totalpayAmout=parseFloat(emiAmount)*parseInt(period)*12;
				$('#tot_interest_amount').text(Math.round(parseFloat(totalpayAmout-parseFloat(principal)))); 
				$('#total_pay_amount').text(Math.round(parseFloat(emiAmount)*parseInt(period)*12)); 
                $('#principal_loan_amount').text($('#loan_amount_2').val());
				$("#loan_interest1SliderVal").text(slideEvt.value);
	});
	
	$("#loan_period_1").slider();
	$("#loan_period_1").on("slide", function(slideEvt) {
			 var principal= $('#loan_amount_2').val();
			  var rate= $('#loan_interest1').val();
			   var period= $('#loan_period_1').val();
			    var emiAmount=parseFloat(principal)*(parseInt(rate)/(12*100))*Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12)/(Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12) - 1);
				document.getElementById("total123").innerHTML = Math.round(emiAmount);
				var totalpayAmout=parseFloat(emiAmount)*parseInt(period)*12;
				$('#tot_interest_amount').text(Math.round(parseFloat(totalpayAmout-parseFloat(principal)))); 
				$('#total_pay_amount').text(Math.round(parseFloat(emiAmount)*parseInt(period)*12)); 
                $('#principal_loan_amount').text($('#loan_amount_2').val());
		$("#loan_period_1SliderVal").text(slideEvt.value);
	});
	
	 $(function() {
      var principal= $('#loan_amount_2').val();
			  var rate= $('#loan_interest1').val();
			   var period= $('#loan_period_1').val();
                var emiAmount=parseFloat(principal)*(parseInt(rate)/(12*100))*Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12)/(Math.pow((1 + parseInt(rate)/(12*100)),parseInt(period)*12) - 1);
				//document.getElementById("total123").innerHTML = Math.round(emiAmount);
                $('#total123').text(Math.round(emiAmount));
				var totalpayAmout=parseFloat(emiAmount)*parseInt(period)*12;
				$('#tot_interest_amount').text(Math.round(parseFloat(totalpayAmout-parseFloat(principal)))); 
				$('#total_pay_amount').text(Math.round(parseFloat(emiAmount)*parseInt(period)*12)); 
                $('#principal_loan_amount').text($('#loan_amount_2').val());
	 });

//////////////////////////// End Emi Calculator /////////////
	
/*------------------------------------------------------------------
	back to top
	-------------------------------------------------------------------*/
 var top = $('#back-top');
	top .hide();
	 
		$(window).scroll(function () {
			if ($(this).scrollTop() > 100) {
				top .fadeIn();
			} else {
				top .fadeOut();
			}
		});
		$('#back-top a').on('click', function(e) {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
		});	 
});

var x = screen.width + "px";
document.getElementById("siderwidth1").style.width = x;
document.getElementById("siderwidth2").style.width = x;
document.getElementById("siderwidth3").style.width = x;
document.getElementById("siderwidth4").style.width = x;
document.getElementById("siderwidth5").style.width = x;
document.getElementById("siderwidth6").style.width = x;

})(jQuery);

	/*-------------------------------------------------------------------------------
	  Page Share js
	-------------------------------------------------------------------------------*/
(function($){
	   $.fn.customerPopup = function (e, intWidth, intHeight, blnResize) {
		e.preventDefault();
		intWidth = intWidth || '500';
		intHeight = intHeight || '400';
		strResize = (blnResize ? 'yes' : 'no');
		var strTitle = ((typeof this.attr('title') !== 'undefined') ? this.attr('title') : 'Social Share'),
			strParam = 'width=' + intWidth + ',height=' + intHeight + ',resizable=' + strResize,            
			objWindow = window.open(this.attr('href'), strTitle, strParam).focus();
	  }
	  /* ================================================== */
	  $(document).ready(function ($) {
		$('.btn-share').on("click", function(e) {
		  $(this).customerPopup(e);
		});
	  });
	  
}(jQuery));