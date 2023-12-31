
<footer class="site-footer">
    <div class="contenedor clearfix">
      <div class="footer-informacion">
        <h3>Sobre <span>GdlWebCamp</span></h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis odit repellat dolorem quibusdam autem totam expedita fugiat delectus est. Provident dolorum veniam iusto voluptatibus soluta nesciunt quibusdam eveniet rerum quod?</p>
      </div>
      <div class="ultimos-tweets">
        <h3>Últimos <span>tweets</span></h3>
        <ul>
          <li>Dolorem nam minus, necessitatibus explicabo rem quidem, numquam voluptate illo exercitationem vel iusto vitae quam soluta.</li>
          <li>Dolorem nam minus, necessitatibus explicabo rem quidem, numquam voluptate illo exercitationem vel iusto vitae quam soluta.</li>
          <li>Dolorem nam minus, necessitatibus explicabo rem quidem, numquam voluptate illo exercitationem vel iusto vitae quam soluta.</li>
        </ul>
      </div>
      <div class="menu">
        <h3>Redes <span>sociales</span></h3>
        <nav class="redes-sociales">
          <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#"><i class="fa-brands fa-pinterest-p"></i></a>
          <a href="#"><i class="fa-brands fa-youtube"></i></a>
          <a href="#"><i class="fa-brands fa-instagram"></i></a>
        </nav>
      </div>
    </div>
  </footer>

  <p class="copyright">Todos los derechos reservados GdlWebCamp 2023.</p>

  <script src="js/vendor/modernizr-3.11.2.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.lettering.js"></script>

  <?php 
      $archivo = basename($_SERVER['PHP_SELF']);
      $pagina = str_replace(".php", "", $archivo);
      if($pagina == 'invitados' || $pagina == 'index'){
        echo '<script src="js/jquery.colorbox-min.js"></script>';
        echo '<script src="js/jquery.waypoints.min.js"></script>';
      } else if($pagina == 'conferencia') {
        echo '<script src="js/lightbox.js"></script>';
      } 
  ?>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
