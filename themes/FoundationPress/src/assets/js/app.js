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

$(document).ready(function(){
  $('.slider').bxSlider({
    slideWidth: 375,
    pager: false
  });
// Gallery Menu 
$('.gallery-filter' ).on('click', function (){
  $('.gallery-filter-list-container').toggle();
  $('.gallery-forum').toggle();
 
});
$('.gallery-filter-list').on('submit', function(){
  alert('hi');
});
$('.gallery-filter-button').on('click', function(){
  $('.gallery-filter-list-container').toggle();
  $('.gallery-forum').toggle();
});


});
