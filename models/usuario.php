<?php

class Usuario
{
  private $db;
  private $id;
  private $nombre;
  private $apellido;
  private $pass;
  private $cargo;
  private $restaurante;

  public function __construct()
  {
    $this->db = DataBase::conectar();
  }

  // Get and Set
  function getId()
  {
    return $this->id;
  }
  function setId($id)
  {
    $this->id = $this->db->real_escape_string($id);
  }
  //
  function getNombre()
  {
    return $this->nombre;
  }
  function setNombre($nombre)
  {
    $this->nombre = $this->db->real_escape_string($nombre);
  }
  //
  function getApellido()
  {
    return $this->apellido;
  }
  function setApellido($apellido)
  {
    $this->apellido = $this->db->real_escape_string($apellido);
  }
  //
  function getPass()
  {
    return $this->pass;
  }
  function setPass($pass)
  {
    $this->pass = $this->db->real_escape_string($pass);
  }
  //
  function getCargo()
  {
    return $this->cargo;
  }
  function setCargo($cargo)
  {
    $this->cargo = $this->db->real_escape_string($cargo);
  }
  //
  function getRestaurante()
  {
    return $this->restaurante;
  }
  function setRestaurante($restaurante)
  {
    $this->restaurante = $this->db->real_escape_string($restaurante);
  }

  // Metodos
  public function login()
  {
    $result = false;
    $id = $this->id;
    $pass = $this->pass;

    // Comprovamos si existe el usuario
    $sql = "SELECT * FROM usuarios WHERE idusuarios = '$id'";
    $login = $this->db->query($sql);

    // Comprobamos si la consulta retorno el usuario
    if ($login && $login->num_rows == 1) {
      // Guardamos los datos en un Objeto
      $usuario = $login->fetch_object();
      
      if ($pass == $usuario->contrasena) {
        $result = $usuario;
      }
    } else {
      $result = "error consulta";
    }
    return $result;
  }
}
