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

// Filling out Contact Form 7 checkboxes depending on which element is clicked

//Pick Your Mascot Type 
var pclicked = false;
$('.mascot-container-pizza').on('click', function() {
  if (!pclicked) {
     pclicked = true;
  } else {
    pclicked = false;
  }
  if (pclicked) {
  $('input:radio[value=uni-body]:nth(0)').attr('checked' , true);
  $('.mascot-container-pizza').css('border', '2px solid #62c7c9');
  $('.mascot-container-bear').css('border', 'none');
  } else {
  $('input:radio[value=uni-body]:nth(0)').attr('checked' , false);
  $('.mascot-container-pizza').css('border', 'none');
}
 });

var bclicked = false;
$('.mascot-container-bear').on('click', function() {
  if (!bclicked) {
     bclicked = true;
  } else {
    bclicked = false;
  }
  if (bclicked) {
  $('input:radio[value=uni-body]:nth(0)').attr('checked' , true);
  $('.mascot-container-bear').css('border', '2px solid #62c7c9');
  $('.mascot-container-pizza').css('border', 'none');
  } else {
  $('input:radio[value=uni-body]:nth(0)').attr('checked' , false);
  $('.mascot-container-bear').css('border', 'none');
}
 });

$('.build-quote-next-mascot-type').on('click', function() {
  if (bclicked == true) {
  $('.mascot-type').hide();
  $('.mascot-head-type').css("display", "flex");
} else if (pclicked == true) {
  $('.mascot-type').hide();
  $('.mascot-detail-type').css("display", "flex");
} else {
  alert('Please select a mascot type');
}
});

//Pick Your Head Type
var human = false;
$('#human-head').on('click', function() {
  if (!human) {
     human = true;
  } else {
    human = false;
  }
  if (human) {
  $('input:radio[value=humanhead]:nth(0)').attr('checked' , true);
  $('#human-head').css('border', '2px solid #62c7c9');
  $('#animal-head').css('border', 'none');
  $('#x').css('border', 'none');
  } else {
  $('input:radio[value=humanhead]:nth(0)').attr('checked' , false);
  $('#human-head').css('border', 'none');
}
 }); 

var animal = false;
$('#animal-head').on('click', function() {
  if (!animal) {
     animal = true;
  } else {
    animal = false;
  }
  if (animal) {
  $('input:radio[value=animalhead]:nth(0)').attr('checked' , true);
  $('#animal-head').css('border', '2px solid #62c7c9');
  $('#human-head').css('border', 'none');
  $('#x').css('border', 'none');
  } else {
  $('input:radio[value=animalhead]:nth(0)').attr('checked' , false);
  $('#animal-head').css('border', 'none');
}
 }); 

var monster = false;
$('#x').on('click', function() {
  if (!monster) {
     monster = true;
  } else {
    monster = false;
  }
  if (monster) {
  $('input:radio[value=monsterhead]:nth(0)').attr('checked' , true);
  $('#x').css('border', '2px solid #62c7c9');
  $('#animal-head').css('border', 'none');
  $('#human-head').css('border', 'none');
  } else {
  $('input:radio[value=monsterhead]:nth(0)').attr('checked' , false);
  $('#x').css('border', 'none');
}
 }); 

$('.build-quote-next-head-type').on('click', function() {
  if (human || animal || monster == true) {
  $('.mascot-head-type').hide();
  $('.mascot-body-type').css("display", "flex");
} else {
  alert('Please select a head type');
}
});

$('.build-quote-back-head-type').on('click', function() {
  $('.mascot-head-type').hide();
  $('.mascot-type').css("display", "block");
});

//Pick Your Body Type
var body = false;
$('#body').on('click', function() {
  if (!body) {
     body = true;
  } else {
    body = false;
  }
  if (body) {
  $('input:radio[value=Body]:nth(0)').attr('checked' , true);
  $('#body').css('border', '2px solid #62c7c9');
  $('#clothes').css('border', 'none');
  } else {
  $('input:radio[value=Body]:nth(0)').attr('checked' , false);
  $('#body').css('border', 'none');
}
 }); 

var clothes = false;
$('#clothes').on('click', function() {
  if (!clothes) {
     clothes = true;
  } else {
    clothes = false;
  }
  if (clothes) {
  $('input:radio[value=Clothes]:nth(0)').attr('checked' , true);
  $('#clothes').css('border', '2px solid #62c7c9');
  $('#body').css('border', 'none');
  } else {
  $('input:radio[value=Clothes]:nth(0)').attr('checked' , false);
  $('#clothes').css('border', 'none');
}
 }); 

$('.build-quote-next-body-type').on('click', function() {
  if (clothes || body == true) {
  $('.mascot-body-type').hide();
  $('.mascot-detail-type').css("display", "flex");
} else {
  alert('Please select a body type');
}
});

$('.build-quote-back-body-type').on('click', function() {
  $('.mascot-body-type').hide();
  $('.mascot-head-type').css("display", "block");
});

//Pick Your Detail
var one = false;
$('#level-one').on('click', function() {
  if (!one) {
     one = true;
  } else {
    one = false;
  }
  if (one) {
  $('input:radio[value=levelone]:nth(0)').attr('checked' , true);
  $('#level-one').css('border', '2px solid #62c7c9');
  $('#level-three').css('border', 'none');
  $('#level-two').css('border', 'none');
  $('.mascot-detail-type-display-lashes').css("display" , "none");
  $('.mascot-detail-type-display-glasses').css("display" , "none");
  $('.mascot-detail-type-display').css("display" , "flex");
  } else {
  $('input:radio[value=levelone]:nth(0)').attr('checked' , false);
  $('#level-one').css('border', 'none');
}
 }); 

var two = false;
$('#level-two').on('click', function() {
  if (!two) {
     two = true;
  } else {
    two = false;
  }
  if (two) {
  $('input:radio[value=leveltwo]:nth(0)').attr('checked' , true);
  $('#level-two').css('border', '2px solid #62c7c9');
  $('#level-three').css('border', 'none');
  $('#level-one').css('border', 'none');
  $('.mascot-detail-type-display-lashes').css("display" , "flex");
  $('.mascot-detail-type-display-glasses').css("display" , "none");
  $('.mascot-detail-type-display').css("display" , "none");
  } else {
  $('input:radio[value=leveltwo]:nth(0)').attr('checked' , false);
  $('#level-two').css('border', 'none');
}
 }); 

var three = false;
$('#level-three').on('click', function() {
  if (!three) {
     three = true;
  } else {
    three = false;
  }
  if (three) {
  $('input:radio[value=levelthree]:nth(0)').attr('checked' , true);
  $('#level-three').css('border', '2px solid #62c7c9');
  $('#level-two').css('border', 'none');
  $('#level-one').css('border', 'none');
  $('.mascot-detail-type-display-lashes').css("display" , "none");
  $('.mascot-detail-type-display-glasses').css("display" , "flex");
  $('.mascot-detail-type-display').css("display" , "none");
  } else {
  $('input:radio[value=levelthree]:nth(0)').attr('checked' , false);
  $('#level-three').css('border', 'none');
}
 }); 

$('.build-quote-next-detail-type').on('click', function() {
  if (one || two || three == true) {
  $('.mascot-detail-type').hide();
  $('.build-quote .wpcf7').show();
  $('.build-quote .wpcf7 .hidethis').hide();
} else {
  alert('Please select your level of detail');
}
});

$('.build-quote-back-detail-type').on('click', function() {
  $('.mascot-detail-type').hide(); 
  $('.mascot-body-type').css("display", "flex");
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


