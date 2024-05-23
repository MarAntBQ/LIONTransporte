<div class="slideshow-container">

            <div class="mySlides fade">
                <img src="img/slider/slide1.jpg" style="width:100%">
                <div class="text"><a href="#">Mejoramos el Servicio de Transporte Urbano</a></div>
            </div>

            <div class="mySlides fade">
                <img src="img/slider/slide2.jpg" style="width:100%">
                <div class="text"><a href="#">Recorremos contigo</a></div>
            </div>

            <div class="mySlides fade">
                <img src="img/slider/slide3.jpg" style="width:100%">
                <div class="text"><a href="#">Somos tu mejor Aliado</a></div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>

        <div class="slidercontrols" style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            $( document ).ready(function() {
                iniciar();
            });
            
        
            function iniciar() {
                plusAutomatico(slideIndex);
                setTimeout(function(){ 
                    iniciar();
                }, 5000);
            }
            
            function plusAutomatico(n) {
                console.log('intercambiando cada 2 segundos g: '+ n);
                showSlides(slideIndex += n);
                console.log('antes de retornarslideIndex jj: ' +slideIndex);
                //return n+1;
                
            }
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = slides.length
                }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }

        </script>
        <br>