"use strict";$(document).ready(function(){var trigger=$('.hamburger'),overlay=$('.overlay'),isClosed=false;trigger.click(function(){hamburger_cross();});function hamburger_cross(){if(isClosed==true){overlay.hide();trigger.removeClass('is-open');trigger.addClass('is-closed');isClosed=false;}else{overlay.show();trigger.removeClass('is-closed');trigger.addClass('is-open');isClosed=true;}}
$('[data-toggle="offcanvas"]').click(function(){$('#wrapper').toggleClass('toggled');});});$(document).ready(function(){$(".mega-dropdown").hover(function(){$('.dropdown-menu',this).not('.in .dropdown-menu').stop(true,true).slideDown("500");$(this).toggleClass('open');},function(){$('.dropdown-menu',this).not('.in .dropdown-menu').stop(true,true).slideUp("500");$(this).toggleClass('open');});});function buttonUp(){var valux=$('.sb-search-input').val();valux=$.trim(valux).length;if(valux!==0){$('.sb-search-submit').css('z-index','99');}else{$('.sb-search-input').val('');$('.sb-search-submit').css('z-index','-999');}}
$(document).ready(function(){var submitIcon=$('.sb-icon-search');var submitInput=$('.sb-search-input');var searchBox=$('.sb-search');var isOpen=false;$(document).mouseup(function(){if(isOpen==true){submitInput.val('');$('.sb-search-submit').css('z-index','-999');submitIcon.click();}});submitIcon.mouseup(function(){return false;});searchBox.mouseup(function(){return false;});submitIcon.click(function(){if(isOpen==false){searchBox.addClass('sb-search-open');isOpen=true;}else{searchBox.removeClass('sb-search-open');isOpen=false;}});});$(function(){$("ul.news-1").liScroll();});var _gaq=_gaq||[];_gaq.push(['_setAccount','UA-36251023-1']);_gaq.push(['_setDomainName','jqueryscript.net']);_gaq.push(['_trackPageview']);(function(){var ga=document.createElement('script');ga.type='text/javascript';ga.async=true;ga.src=('https:'==document.location.protocol?'https://ssl':'http://www')+'.google-analytics.com/ga.js';var s=document.getElementsByTagName('script')[0];s.parentNode.insertBefore(ga,s);})();$('.slide-nws').owlCarousel({loop:true,nav:false,autoplay:false,autoplayTimeout:3000,autoplayHoverPause:true,responsiveClass:true,responsive:{0:{items:1,nav:false,dots:true,},600:{items:1,nav:false,dots:true,},1000:{items:1,nav:false,loop:false,dots:true,}}})
$('.play').on('click',function(){owl.trigger('autoplay.play.owl',[3000])})
$('.stop').on('click',function(){owl.trigger('autoplay.stop.owl')})
$(".tab_content").hide();$(".tab_content:first").show();$("ul.tabs li").click(function(){$(".tab_content").hide();var activeTab=$(this).attr("rel");$("#"+activeTab).fadeIn();$("ul.tabs li").removeClass("active");$(this).addClass("active");$(".tab_drawer_heading").removeClass("d_active");$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");});$(".tab_drawer_heading").click(function(){$(".tab_content").hide();var d_activeTab=$(this).attr("rel");$("#"+d_activeTab).fadeIn();$(".tab_drawer_heading").removeClass("d_active");$(this).addClass("d_active");$("ul.tabs li").removeClass("active");$("ul.tabs li[rel^='"+d_activeTab+"']").addClass("active");});$('ul.tabs li').last().addClass("tab_last");$('.stories-slide').owlCarousel({loop:true,margin:30,responsiveClass:true,navText:['<i class="icofont icofont-thin-left"></i>','<i class="icofont icofont-thin-right"></i>'],responsive:{0:{items:1,nav:true},500:{items:2,nav:true,},600:{items:3,nav:true,},1000:{items:4,nav:true,loop:false}}})
$('.featured-slide').owlCarousel({loop:true,margin:30,lazyLoad:true,responsiveClass:true,navText:['<i class="icofont icofont-thin-left"></i>','<i class="icofont icofont-thin-right"></i>'],responsive:{0:{items:1,nav:true},500:{items:2,nav:true,},1000:{items:3,nav:true,loop:false}}})
$(document).ready(function(){(function($){$('.tab ul.rcnt-tab').addClass('active').find('> li:eq(0)').addClass('current-tab');$('.tab ul.rcnt-tab li a').click(function(g){var tab=$(this).closest('.tab'),index=$(this).closest('li').index();tab.find('ul.rcnt-tab > li').removeClass('current-tab');$(this).closest('li').addClass('current-tab');tab.find('.tab-content').find('div.tabs-item').not('div.tabs-item:eq('+ index+')').slideUp();tab.find('.tab-content').find('div.tabs-item:eq('+ index+')').slideDown();g.preventDefault();});})(jQuery);});$('.slide-blog').owlCarousel({loop:true,margin:30,responsiveClass:true,navText:['<i class="icofont icofont-circled-left"><span>prev</span</i>','<i class="icofont icofont-circled-right"><span>next</span></i>'],responsive:{0:{items:1,nav:true},600:{items:1,nav:true,},1000:{items:1,nav:true,loop:false}}})
$(".categori-accordian h3").click(function(){$(".categori-accordian ul ul").slideUp('slow');if(!$(this).next().is(":visible")){$(this).next().slideDown('fast');}})
$(".tab-content-1").hide();$(".tab-content-1:first").show();$("ul.product-tab li").click(function(){$(".tab-content-1").hide();var activeTab=$(this).attr("rel");$("#"+activeTab).fadeIn();$("ul.product-tab li").removeClass("active");$(this).addClass("active");$(".tab_drawer_heading").removeClass("d_active");$(".tab_drawer_heading[rel^='"+activeTab+"']").addClass("d_active");});$(".tab_drawer_heading").click(function(){$(".tab-content-1").hide();var d_activeTab=$(this).attr("rel");$("#"+d_activeTab).fadeIn();$(".tab_drawer_heading").removeClass("d_active");$(this).addClass("d_active");$("ul.product-tab li").removeClass("active");$("ul.product-tab li[rel^='"+d_activeTab+"']").addClass("active");});$('ul.product-tab li').last().addClass("tab_last");$('.slider-for').slick({slidesToShow:1,slidesToScroll:1,arrows:true,fade:true,asNavFor:'.slider-nav'});$('.slider-nav').slick({slidesToShow:3,slidesToScroll:1,asNavFor:'.slider-for',centerMode:true,arrows:false,margin:10,focusOnSelect:true});