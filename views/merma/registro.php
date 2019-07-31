<link rel="stylesheet" href="<?= baseUrl; ?>assets/css/estilos.css">
<link rel="stylesheet" href="<?= baseUrl; ?>assets/css/menu.css">
<title>CusineSoft</title>
</head>

<body>
  <div class="" id="cuerpo">
    <!--------------Header-------------->
    <?php if (isset($_SESSION['identity'])) : ?>
      <?php if (isset($_SESSION['Admin'])) : ?>
        <h4 class="nameUser"><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellido ?> -- Administrador</h4>
      <?php elseif (isset($_SESSION['Cliente'])) : ?>
        <h4 class="nameUser"><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellido ?> -- Cliente</h4>
      <?php elseif (isset($_SESSION['JefeZona'])) : ?>
        <h4 class="nameUser"><?= $_SESSION['identity']->nombre ?> <?= $_SESSION['identity']->apellido ?> -- Jefe de Zona</h4>
      <?php endif; ?>
    <?php else : ?>
      <?php header('Location: ' . baseUrl); ?>
    <?php endif; ?>
    <header class="main-header">
      <div class="container container--flex">
        <div class="logo-container column--50">
          <h1 class="logo">CuisineSoft</h1>
        </div>
        <div class="main-header__contactInfo column column--50">
          <p class="main-header__contactInfo__phone">
            <span class="icon-phone">333-333-333</span>
          </p>
          <p class="main-header__contactInfo__address">
            <span class="icon-location">Calle 82 No 12-21 Zona Rosa</span>
          </p>
        </div>
      </div>
    </header>
    <!-------------Banner------------->
    <section class="banner">
      <img src="<?= baseUrl; ?>assets/img/banner.jpeg" alt="" class="banner__img">
      <div class="banner__content">El sistema encargado de tu restaurante</div>
    </section>
    <!---------------Nav--------------->
    <div class="container py-3">
      <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
        <span class="navbar-brand mb-0 h1">Menu</span>
        <button class="navbar-toggler btn-outline-danger" type="button" data-toggle="collapse" data-target="#menu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="<?= baseUrl; ?>usuario/merma">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="merma" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Merma
              </a>
              <div class="dropdown-menu" aria-labelledby="merma">
                <a class="dropdown-item" href="#">Registrar Merma</a>
                <a class="dropdown-item" href="#">Consultar Merma</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Graficas :v</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="merma" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Stock
              </a>
              <div class="dropdown-menu" aria-labelledby="merma">
                <a class="dropdown-item" href="#">Registrar Stock</a>
                <a class="dropdown-item" href="#">Registrar Producto</a>
                <a class="dropdown-item" href="#">Consultar Stock</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Otro</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="merma" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Menaje
              </a>
              <div class="dropdown-menu" aria-labelledby="merma">
                <a class="dropdown-item" href="#">Registrar Eventualidad</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Otro</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?= baseUrl; ?>usuario/logout">Salir</a>
            </li>
          </ul>
        </div>
      </nav>
    </div>

    <!--------------Main-------------->
    <main class="main">
      <section class="group group--color">
        <div class="container">
          <h2 class="main__title">Bienvenido al Sistema para tu Restaurante</h2>
          <p class="main__txt">Este Sistema facilitara el control de materias primas, menaje, mermas, alerta de
            agotamiento del Stock, para el restaurante Andrés Carne de Res.</p>
          <p class="main__txt">Cambiando el metodo de realizar los procesos de forma manual y pasarlos a este Sistema de
            Información.</p>
        </div>
      </section>
      <section class="group main__about__description">
        <div class="container container--flex">
          <div class="column column--50">
            <img src="<?= baseUrl; ?>assets/img/logo-AR.png" alt="" class="img__descrip">
          </div>
          <div class="column column--50">
            <h3 class="column__title">Al Inicio</h3>
            <p class="column__txt">Lo que comenzó con unas pocas mesas, fabricadas por él mismo con sus dotes de
              carpintero, un letrero hecho a mano, un sol, una luna, y una estrella, se comvirtió poco a poco, con
              empuje,
              talento y verraquera, en un universo que brillo y da calor con su propio fuego.</p>
            <a href="" class="btn btn--contact">Contact</a>
          </div>
        </div>
      </section>
      <!---------------------------------->
      <section class="group today-special">
        <h2 class="group__title">Especial de hoy</h2>
        <div class="container container--flex">
          <div class="column column--50--25">
            <img src="<?= baseUrl; ?>assets/img/Plato1.jpeg" alt="" class="today-special__img">
            <div class="today-special__title">Algun Titulo</div>
            <div class="today-special__price">$1</div>
          </div>
          <div class="column column--50--25">
            <img src="<?= baseUrl; ?>assets/img/Plato2.jpeg" alt="" class="today-special__img">
            <div class="today-special__title">Algun Titulo</div>
            <div class="today-special__price">$1</div>
          </div>
          <div class="column column--50--25">
            <img src="<?= baseUrl; ?>assets/img/Plato3.jpeg" alt="" class="today-special__img">
            <div class="today-special__title">Algun Titulo</div>
            <div class="today-special__price">$1</div>
          </div>
          <div class="column column--50--25">
            <img src="<?= baseUrl; ?>assets/img/Plato4.jpeg" alt="" class="today-special__img">
            <div class="today-special__title">Algun Titulo</div>
            <div class="today-special__price">$1</div>
          </div>
        </div>
      </section>
    </main>
    <footer class="main-footer">
      <div class="container container--flex">
        <div class="column column--33">
          <h2 class="column__title">¿Por que Visitarnos?</h2>
          <p class="column__txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem accusantium eum veniam,
            perspiciatis quaerat possimus ex. Quisquam officia repudiandae dignissimos illo, accusamus voluptas animi
            sequi explicabo sunt eum facilis vero!</p>
        </div>
        <div class="column column--33">
          <h2 class="column__title">Contactanos</h2>
          <p class="column__txt">Direccion</p>
          <p class="column__txt">Teléfono</p>
          <p class="column__txt">Correo</p>
        </div>
        <div class="column column--33">
          <h2 class="column__title">Siguenos en redes sociales</h2>
          <p class="column__txt"><a href="" class="icon-facebook">Siguenos en facebook</a></p>
          <p class="column__txt"><a href="" class="icon-twitter">Siguenos en twitter</a></p>
          <p class="column__txt"><a href="" class="icon-youtube">Siguenos en youtube</a></p>
        </div>
        <p class="copy">&copy; 2019 CuisineSoft | Todos los derrechos reservados</p>
      </div>
    </footer>
  </div>
  <!---->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/po pper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="<?= baseUrl; ?>assets/js/menu.js"></script>