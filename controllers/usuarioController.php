<?php
require_once 'models/usuario.php';
class usuarioController
{
  public function merma()
  {
    require_once 'views/merma/registro.php';
  }
  public function login()
  {
    require_once 'views/login.php';
  }


  public function logear()
  {
    if (isset($_POST)) {
      $id = $_POST['id'];
      $pass = $_POST['pass'];

      $usuario = new Usuario();
      $usuario->setId($id);
      $usuario->setPass($pass);
      //
      $identity = $usuario->login();

      if ($identity && is_object($identity)) {
        $_SESSION['identity'] = $identity;
        if ($identity->cargo_idcargo == 2) {
          $_SESSION['Admin'] = true;
        }
        if ($identity->cargo_idcargo == 1) {
          $_SESSION['Cliente'] = true;
        }
        if ($identity->cargo_idcargo == 3) {
          $_SESSION['JefeZona'] = true;
        }
        header('Location: ' . baseUrl . 'usuario/merma');
      } else {
        $_SESSION['error_login'] = 'Identificacion Fallida';
      }
    } else {
      header('Location: ' . baseUrl);
    }
  }
  public function logout()
  {
    if (isset($_SESSION['identity'])) {
      unset($_SESSION['identity']);
    }
    if (isset($_SESSION['Admin'])) {
      unset($_SESSION['Admin']);
    } elseif (isset($_SESSION['JefeCocina'])) {
      unset($_SESSION['JefeCocina']);
    } elseif (isset($_SESSION['JefeZona'])) {
      unset($_SESSION['JefeZona']);
    }
    header('Location: ' . baseUrl);
  }
}
