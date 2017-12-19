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
  $('.mascot-type').css( {'display': 'block'} );

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

$('.mascot-container-pizza').on('click', function() {
  $('input:radio[value=uni-body]:nth(0)').attr('checked' , true);
});

$('.mascot-container-bear').on('click', function() {
  $('input:radio[value=head-body]:nth(0)').attr('checked' , true);
});

$('#human-head').on('click', function() {
  $('input:radio[value=humanhead]:nth(0)').attr('checked' , true);
});

$('#animal-head').on('click', function() {
  $('input:radio[value=animalhead]:nth(0)').attr('checked' , true);
});

$('#monster-head').on('click', function() {
  $('input:radio[value=monsterhead]:nth(0)').attr('checked' , true);
});

$('#body').on('click', function() {
  $('input:radio[value=Body]:nth(0)').attr('checked' , true);
});

$('#clothes').on('click', function() {
  $('input:radio[value=Clothes]:nth(0)').attr('checked' , true);
});
