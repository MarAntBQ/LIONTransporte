<div class="logo">
<a href="home" class="pl10px">LION<i class="fas fa-bus-alt"></i></a>    
</div>
<nav>
    <ul id="primaryNav">
        <li class="sub-menu"><a href="#">Quienes Somos</a>
            <ul>
                <li><a href="about#mision">Misión</a></li>
                <li><a href="about#vision">Visión</a></li>
                <li><a href="about#historia">Historia</a></li>
                <li><a href="lidership">Liderazgo</a></li>
            </ul>
        </li>
        <li class="sub-menu"><a href="#">Nuestro Servicio</a>
            <ul>
                <li><a href="urban-service">Servicio Urbano</a></li>
                <li><a href="interprovincial-service">Servicio Interprovincial</a></li>
                
            </ul>
        </li>
        <li class="sub-menu"><a href="#">Partners</a>
            <ul>
                <li><a href="#">Google</a></li>
                <li><a href="#">Nasa</a></li>
                <li><a href="#">Telconet</a></li>
                
            </ul>
        </li>
       <li><a href="#">Ecuador</a></li>
       <li><a href="#">Internacional</a></li>
    </ul>
</nav>
<div class="menu-toggle"><i class="fas fa-bars"></i></div>

<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script>
    $(document).ready(function() {
        $('.menu-toggle').click(function() {
            $('nav').toggleClass('activer');
        })
        $('ul li').click(function() {
            $(this).siblings().removeClass('activer2');
            $(this).toggleClass('activer2');
        })
    })

</script>

<script>
    var urlString, urlArray, pageHREF, menu, i, currentURL;
    urlString = document.location.href;
    urlArray = urlString.split('/');
    pageHREF = urlArray[urlArray.length - 1];

    if (pageHREF !== "") {
        menu = document.querySelectorAll('ul#primaryNav li a');
        for (i = 0; i < menu.length; i++) {
            currentURL = (menu[i].getAttribute('href'));
            menu[i].className = '';
            if (currentURL === pageHREF) {
                menu[i].className = 'active';
            }
        }
    }

</script>
