<div class="navbar-fixed">
<nav>
    <div class="nav-wrapper red lighten-1">
    <div class="container">
      <a href="m_mat.php" class="brand-logo"><b>Banana App</b></a>
      <a data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li>        
          <form action="../index.php" method="POST">
            <button class="btn red accent-4" type="submit" name="cerrar">Cerrar Sesion</button>
          </form>
        </li>
      </ul>
    </div>
    </div>
</div>
      <ul class="side-nav" id="mobile-demo">
        <?php include('../includes/side_nav.php'); ?>        
      </ul>
</nav>

<a style="position: fixed; left: 20px; top: 100px;" class="btn-floating btn-large button-collapse amber accent-4 hide-on-small-only hide-on-med-only btn tooltipped" data-position="right" data-delay="50" data-tooltip="MENU DE TEMAS" data-activates="slide-out"><i class="material-icons">menu</i></a>
<a style="position: fixed; right: 10px; bottom: 20px;" class="btn-floating btn-large amber lighten-2 btn tooltipped" data-position="left" data-delay="50" data-tooltip="¿SABIAS QUE...?" id="help" onclick="$('.tap-target').tapTarget('open');"><i class="material-icons">help</i></a>
<div style="position: fixed; right: 20px;" id="google_translate_element"></div>

<ul class="side-nav" id="slide-out">
  <?php include('../includes/side_nav.php'); ?>
</ul> 