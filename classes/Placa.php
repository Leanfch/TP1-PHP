<?PHP

class Placa
{
  protected $id;
  protected $marca;
  protected $modelo;
  protected $cat;
  protected $ensamblador;
  protected $chipset;
  protected $memoria;
  protected $memoria_tipo;
  protected $tipo;
  protected $especial;
  protected $imagen;
  protected $precio;

  /**
   * Devuelve todos los productos en un array
   */
  public function catalogo_completo(): array
  {
    $catalogo = [];

    $JSON = file_get_contents("includes/productos.json");
    $JSONData = json_decode($JSON);

    foreach ($JSONData as $valor) {
      $placa = new self();

      $placa->id = $valor->id;
      $placa->marca = $valor->marca;
      $placa->modelo = $valor->modelo;
      $placa->cat = $valor->cat;
      $placa->ensamblador = $valor->ensamblador;
      $placa->chipset = $valor->chipset;
      $placa->memoria = $valor->memoria;
      $placa->memoria_tipo = $valor->memoria_tipo;
      $placa->tipo = $valor->tipo;
      $placa->especial = $valor->especial;
      $placa->imagen = $valor->imagen;
      $placa->precio = $valor->precio;

      $catalogo[] = $placa;
    }


    return $catalogo;
  }
  /**
   * Devuelve un string con el nombre completo de la placa de video
   */
  public function nombre_completo(): string
  {
    $nombre = $this->marca . " " . $this->ensamblador . " " . $this->chipset;

    return $nombre;
  }
  /**
   * Devuelve el precio del producto formateado
   */
  public function precioFormat(): string
  {

    $precio = number_format($this->precio, 2, ",", ".");

    return $precio;
  }
  /**
   * Devuelve el catalogo de productos de una marca sola
   * @param string $cat string de la marca
   * @return Placa[]
   */
  // No sé porque no me funciona esta funcion, no puedo llamarlos por categoria, tuve que crear otras secciones independientes
  // public function catalogoCategoria(string $cat): array
  // {
  //   $resultado = [];
  //   $catalogo = $this->catalogo_completo();

  //   foreach ($catalogo as $p) {
  //     if ($p->cat == $cat) {
  //       $resultado[] = $p;
  //     }
  //     return $resultado;
  //   }
  // }
  /**
   * Devuelve la información de un producto buscado por su ID
   * @param int $idProducto = ID único del producto
   */
  public function productoID(int $idProducto): Placa
  {
    $catalogo = $this->catalogo_completo();

    foreach ($catalogo as $p) {
      if ($p->id == $idProducto) {
        return $p;
      }
    }
    return null;
  }

  /**
   * Devuelve el valor de Ensamblador
   */
  public function getEnsamblador()
  {
    return $this->ensamblador;
  }

  /**
   * Devuelve el valor de chipset
   */
  public function getChipset()
  {
    return $this->chipset;
  }

  /**
   * Devuelve el valor de memoria
   */
  public function getMemoria()
  {
    return $this->memoria;
  }

  /**
   * Devuelve el valor de memoria_tipo
   */
  public function getMemoria_tipo()
  {
    return $this->memoria_tipo;
  }

  /**
   * Devuelve el valor de tipo
   */
  public function getTipo()
  {
    return $this->tipo;
  }

  /**
   * Devuelve el valor de especial
   */
  public function getEspecial()
  {
    return $this->especial;
  }

  /**
   * Devuelve el valor de imagen
   */
  public function getImagen()
  {
    return $this->imagen;
  }

  /**
   * Devuelve el valor de marca
   */
  public function getMarca()
  {
    return $this->marca;
  }

  /**
   * Devuelve el valor de cat cat
   */
  public function getCat()
  {
    return $this->cat;
  }

  /**
   * Devuelve el valor de id
   */
  public function getId()
  {
    return $this->id;
  }
}
