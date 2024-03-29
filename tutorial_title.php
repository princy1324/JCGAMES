<html>
    <head>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
        <style>
            .ml14 {
  font-weight: 200;
  font-size: 2.8em;
  color: maroon;
  text-shadow: 5px;
}

.ml14 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml14 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 2px;
  width: 100%;
  background-color: black;
  transform-origin: 100% 100%;
  bottom: 0;
}

.ml14 .letter {
  display: inline-block;
  line-height: 1em;
  font-weight: bold;
  font-family: cursive;
}
        </style>
    </head>
    <body>
        
       <h1 class="ml14">
           <center>
  <span class="text-wrapper">
    <span class="letters">Tutorial</span>
    <span class="line"></span>
    
  </span>
</h1>

<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
            <script>
               var textWrapper = document.querySelector('.ml14 .letters');
textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

anime.timeline({loop: true})
  .add({
    targets: '.ml14 .line',
    scaleX: [0,1],
    opacity: [0.5,1],
    easing: "easeInOutExpo",
    duration: 900
  }).add({
    targets: '.ml14 .letter',
    opacity: [0,1],
    translateX: [40,0],
    translateZ: 0,
    scaleX: [0.3, 1],
    easing: "easeOutExpo",
    duration: 800,
    offset: '-=600',
    delay: (el, i) => 150 + 25 * i
  }).add({
    targets: '.ml14',
    opacity: 0,
    duration: 1000,
    easing: "easeOutExpo",
    delay: 1000
  });
            </script>
    


    </body>
</html>