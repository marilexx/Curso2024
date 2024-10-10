<?php

class Carrito {

    public $productos = [];
    function __construct($productos) {
        $this->productos = $productos;
    }



    function ImprimirTicket() {
        $total = 0;

        echo "<table>
        
          <tr>
          <th>Producto</th>
          <th>Precio sin IVA</th>
          <th>Total del IVA</th>
          <th>Precio con IVA</th>
          </tr>";

        

        foreach ($this->productos as $producto) {

            $productoConIva =  $producto->getPrecio()*1.21;
            $elivadelproducto = $producto->getPrecio()*0.21; 
            $total = $producto->getPrecio();

            echo "
        
          <tr>
          <td>".$producto->getNombre()."</td>
          <td>".$producto->getPrecio()."</td>
          <td>".$elivadelproducto."</td>
          <td>".$productoConIva."</td>
          </tr>";
            
           
        }

        
        echo "
        
          <tr>
          <td></td>
          <td></td>
          <td>Total: </td>
          <td>".$total."</td>
          </tr>
          
          </table>";
    }


}

class Productos {

    public $id;
    public $categoria;
    public $nombre;
    public $precio;

 
    function __construct($id, $categoria, $nombre, $precio) {
        $this->id = $id;
        $this->categoria = $categoria;
        $this->nombre = $nombre;
        $this->precio = $precio;
    }

 
    public function getNombre() {
        return $this->nombre; 
    }

    // Método para obtener el precio
    public function getPrecio() {
        return $this->precio; 
    }
}


$productos = [
    new Productos(1, "juguete", "peluche", 200),
    new Productos(2, "electronica", "televisor", 300)
];


$carrito = new Carrito($productos);


$carrito->ImprimirTicket();

?>
