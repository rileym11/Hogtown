import $ from 'jquery';
import whatInput from 'what-input';

window.$ = $;

import Foundation from 'foundation-sites';
// If you want to pick and choose which modules to include, comment out the above and uncomment
// the line below
//import './lib/foundation-explicit-pieces';

import './lib/demosite';
import './lib/foundation-explicit-pieces';

$(document).foundation();

// Gallery Menu
$('.gallery-filter' ).on('click', function displaytoggle(){
  toggleFilter();

});

$('.gallery-filter-list').on('submit', function(event){
  event.preventDefault();


  if (  $(".gallery-filter-list input[type=checkbox]:checked").length) {
    $('.gallery-image').hide();
  $(".gallery-filter-list input[type=checkbox]:checked").each(function() {
    var taxon = $(this).val();

    $('.'+taxon).show();
    //alert($(this).val());

  });
} else {
  $('.gallery-image').show();
}
});

$('.gallery-filter-button').on('click', function (){
  toggleFilter();

});


function toggleFilter() {
  if (window.innerWidth > 1023){
  $('.gallery-filter-list-container').toggle();
  } else {
  $('.gallery-filter-list-container').toggle();
  $('.gallery-forum').toggle();
  }}



$('.build-quote-next-one').on('click' , function() {
  $('.page-one').hide();
  $('.mascot-type').css( {display: 'block'} );

});

$('.build-quote-next-mascot-type').on('click', function() {
  $('.mascot-type').hide();
  $('.mascot-head-type').css("display", "flex");
});

$('.build-quote-back-head-type').on('click' , function() {
  $('.mascot-head-type').hide();
  $('.mascot-type').css("display", "block");
});

$('.build-quote-next-head-type').on('click', function() {
  $('.mascot-head-type').hide();
  $('.mascot-body-type').css("display", "flex");
});

$('.build-quote-next-body-type').on('click', function () {
  $('.mascot-body-type').hide();
  $('.mascot-detail-type').css("display", "flex");
});

$('#level-one').on('click', function() {
  $('.mascot-detail-type-display-lashes').css("display" , "none");
  $('.mascot-detail-type-display-glasses').css("display" , "none");
  $('.mascot-detail-type-display').css("display" , "flex");
});

$('#level-two').on('click', function() {
   $('.mascot-detail-type-display-lashes').css("display" , "flex");
  $('.mascot-detail-type-display-glasses').css("display" , "none");
  $('.mascot-detail-type-display').css("display" , "none");
});

$('#level-three').on('click', function() {
   $('.mascot-detail-type-display-lashes').css("display" , "none");
  $('.mascot-detail-type-display-glasses').css("display" , "flex");
  $('.mascot-detail-type-display').css("display" , "none");
});

$('.build-quote-back-body-type').on('click', function() {
  $('.mascot-body-type').hide();
  $('.mascot').css('display', 'block');
});

$('.build-quote-next-body-type').on('click', function() {
  $('.mascot-body-type').hide();
  $('.page-template-page-build-quote .wpcf7-form').css('display', 'block');
});

$('.build-quote-back-detail-type').on('click', function() {

  $('.mascot-detail-type').hide(); 
  $('.mascot-body-type').css("display", "flex");
});

$('.build-quote-back').on('click', function() {
  $('.mascot-type').hide(); 
  $('.page-one').css("display", "flex");
});

$('.build-quote-back-body-type').on('click', function() {
  $('.mascot-body-type').hide(); 
  $('.mascot-head-type').css("display", "flex");

});

// Filling out Contact Form 7 checkboxes depending on which element is clicked
$('.mascot-container-pizza').on('click', function() {
  $('input:radio[value=uni-body]:nth(0)').attr('checked' , true);
  $('.mascot-container-pizza').css('border', '2px solid #62c7c9');
});


$('#animal-head').on('click', function() {
  $('input:radio[value=animalhead]:nth(0)').attr('checked' , true);
  $('#animal-head').css('border', '2px solid #62c7c9');
});

$('#monster-head').on('click', function() {
  $('input:radio[value=monsterhead]:nth(0)').attr('checked' , true);
  $('#monster-head').css('border', '2px solid #62c7c9');
});

$('#body').on('click', function() {
  $('input:radio[value=Body]:nth(0)').attr('checked' , true);
  $('#body').css('border', '2px solid #62c7c9');
});

$('#clothes').on('click', function() {
  $('input:radio[value=Clothes]:nth(0)').attr('checked' , true);
  $('#clothes').css('border', '2px solid #62c7c9');
});

$('#level-one').on('click', function() {
  $('input:radio[value=levelone]:nth(0)').attr('checked' , true);
  $('#level-one').css('border', '2px solid #62c7c9');
});

$('#level-two').on('click', function() {
  $('input:radio[value=leveltwo]:nth(0)').attr('checked' , true);
  $('#level-two').css('border', '2px solid #62c7c9');
});

$('#level-three').on('click', function() {
  $('input:radio[value=levelthree]:nth(0)').attr('checked' , true);
  $('#level-three').css('border', '2px solid #62c7c9');
});
//Smooth Scrolling for Services Page


$("a[href*='#']:not(a[href='#'])").click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
      || location.hostname == this.hostname) {

      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
         if (target.length) {
           $('html,body').animate({
               scrollTop: target.offset().top
          }, 1000);
          return false;
      }
  }
});

