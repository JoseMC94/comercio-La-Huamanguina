<div class="header">
<div class="container">

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse navbar-ex1-collapse ">


  </div>

  <!-- /.navbar-collapse

    <ul class="nav navbar-nav navbar-left">

<?php if (!isset($_SESSION["client_id"])): ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=clientaccess">Iniciar Sesion</a></li>
          <li><a href="index.php?view=register">Registrarse</a></li>
        </ul>
      </li>
    </ul>

     <ul class="nav navbar-nav navbar-left">
<?php else:
    $client = ClientData::getById($_SESSION["client_id"]);
    ?>
                                                            <li class="dropdown">
                                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; <?php echo $client->name . " " . $client->lastname; ?><b class="caret"></b></a>
                                                              <ul class="dropdown-menu">
                                                                <li><a href="index.php?view=client">Inicio</a></li>
                                                                <li><a href="logout.php">Salir</a></li>
                                                              </ul>
                                                            </li>
                                                          </ul>
                                                      <?php endif;?>


  -->


  <div class="w3l_login">
  <?php if (!isset($_SESSION["client_id"])): ?>
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp; <b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="index.php?view=clientaccess">Iniciar Sesion</a></li>
          <li><a href="index.php?view=register">Registrarse</a></li>
        </ul>
      </li>
    </ul>

     <ul class="nav navbar-nav navbar-left">
<?php else:
    $client = ClientData::getById($_SESSION["client_id"]);
    ?>
                                                            <li class="dropdown">
                                                              <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> &nbsp; <?php echo $client->name . " " . $client->lastname; ?><b class="caret"></b></a>
                                                              <ul class="dropdown-menu">
                                                                <li><a href="index.php?view=client">Inicio</a></li>
                                                                <li><a href="logout.php">Salir</a></li>
                                                              </ul>
                                                            </li>
                                                          </ul>
                                                      <?php endif;?>
      </div>


      <div class="w3l_logo">
        <h1><a href="index.php">La Huamanguina<span>Artesanias</span></a></h1>
      </div>

      <div class="search">
        <input class="search_box" type="checkbox" id="search_box">
        <label class="icon-search" for="search_box"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
        <div class="search_form">
          <form action="#" method="post">
            <input type="text" name="search" placeholder="Search...">
            <input type="submit" value="Send">
          </form>
        </div>
      </div>

      <div class="cart box_1">
        <a href="index.php?view=mycart">
          <div class="total">
          <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
          <img src="images/bag.png" alt="" />
        </a>
        <p><a href="javascript:;" class="simpleCart_empty">
            <?php if (isset($_SESSION["cart"])): ?>
            <span class="badge"><?php echo count($_SESSION["cart"]); ?></span>
            <?php endif;?>
      </a>
      </div>

        </a></p>
        <div class="clearfix"> </div>
      </div>

      <div class="clearfix"> </div>
    </div>
  </div>