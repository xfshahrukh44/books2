  // Targeting video element  
  let clip = document.querySelector(".vid") 
  
  /* Applying mouseover event on video clip  
  and then we call play() function to play  
  the video when the mouse is over the video */ 
  clip.addEventListener("mouseover", function (e) { 
      clip.play(); 
  }) 

  /* Applying mouseout event on video clip  
  and then we call pause() function to stop  
  the video when the mouse is out the video */ 
  clip.addEventListener("mouseout", function (e) { 
      clip.pause(); 
  }) 


 //play video on hover
 $(document).on('mouseover', 'video', function() { 
  $(this).get(0).play(); 
}); 

//pause video on mouse leave
$(document).on('mouseleave', 'video', function() { 
  $(this).get(0).pause(); 
});




function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}




$(document).ready(function(){
  $(".thumbnail-show-1").click(function(){
    $(".main-thumbnail-1").toggle();
  });
});



$(document).ready(function () {
  setTimeout(function () {
    $('.loadermain').fadeOut()
  }, 3000)
})


$('.slider1').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  autoplay: true,
  autoplayTimeout: 3000,
  autoplayHoverPause: false,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 4
    },
    1000: {
      items: 4
    }
  }
})

$('.slider2').owlCarousel({
  loop: true,
  margin: 10,
  nav: false,
  dots: false,
  slideTransition: 'linear',
  autoplay: true,
  autoplayTimeout: 8000,
  autoplaySpeed: 8000,
  autoplayHoverPause: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 2
    },
    1000: {
      items: 2
    }
  }
})

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml2')
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>")

anime.timeline({loop: true})
  .add({
    targets: '.ml2 .letter',
    scale: [4, 1],
    opacity: [0, 1],
    translateZ: 0,
    easing: 'easeOutExpo',
    duration: 950,
    delay: (el, i) => 70 * i
  }).add({
  targets: '.ml2',
  opacity: 0,
  duration: 1000,
  easing: 'easeOutExpo',
  delay: 1000
})

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml3')
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>")

anime.timeline({loop: true})
  .add({
    targets: '.ml3 .letter',
    opacity: [0, 1],
    easing: 'easeInOutQuad',
    duration: 2250,
    delay: (el, i) => 150 * (i + 1)
  }).add({
  targets: '.ml3',
  opacity: 0,
  duration: 1000,
  easing: 'easeOutExpo',
  delay: 1000
})

// Wrap every letter in a span
var textWrapper = document.querySelector('.ml7 .letters')
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>")

anime.timeline({loop: true})
  .add({
    targets: '.ml7 .letter',
    translateY: ['1.1em', 0],
    translateX: ['0.55em', 0],
    translateZ: 0,
    rotateZ: [180, 0],
    duration: 750,
    easing: 'easeOutExpo',
    delay: (el, i) => 50 * i
  }).add({
  targets: '.ml7',
  opacity: 0,
  duration: 1000,
  easing: 'easeOutExpo',
  delay: 1000
})
