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



$('.build-quote-next').on('click' , function() {
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

$('#levelone').on('click', function() {
  $('.mascot-detail-type-display-lashes').css("display" , "none");
  $('.mascot-detail-type-display-glasses').css("display" , "none");
  $('.mascot-detail-type-display').css("display" , "flex");
});

$('#leveltwo').on('click', function() {
   $('.mascot-detail-type-display-lashes').css("display" , "flex");
  $('.mascot-detail-type-display-glasses').css("display" , "none");
  $('.mascot-detail-type-display').css("display" , "none");
});

$('#levelthree').on('click', function() {
   $('.mascot-detail-type-display-lashes').css("display" , "none");
  $('.mascot-detail-type-display-glasses').css("display" , "flex");
  $('.mascot-detail-type-display').css("display" , "none");
});



