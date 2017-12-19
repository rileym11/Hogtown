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
  theresLevelsToThisShit();
});



function theresLevelsToThisShit() {

var selected = '';

$('#levelone').on('click', function() {
  var lvlone = $('<p class=levels> Level 1: The basics </p>');
  $('.mascot-detail-type-display').append(lvlone);
}); 

$('#leveltwo').on('click', function() {
  var lvltwo = $('<p class=level> Level 2: A little more </p>');
  $('.mascot-detail-type-display').append(lvltwo);
}); 

$('#levelthree').on('click', function() {
  var lvlthree = $('<p class=three> Level 3: The works! </p>');
  $('.mascot-detail-type-display').append(lvlthree);
}); 

if ($('#levelone').value == "one") {
  $('.mascot-detail-type-display').append(lvlone);
} else if ('#leveltwo', '#levelthree' == selected) {
  return false; 
}

}


/*
function ifSelected(selected) {
  if (selected != '') {
    return false;
  } else {
    return true;
  }
}
*/ 






