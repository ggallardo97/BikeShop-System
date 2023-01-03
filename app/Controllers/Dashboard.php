<?php

namespace App\Controllers;

class Dashboard extends BaseController{

    public function index(){
        
        $this->loadviews->loadViews('index');
        
    }

    public function productos(){

        $data['productos']  = $this->productoModel->obtenerProductos();
        $data['categorias'] = $this->categoriaModel->obtenerCategorias();

        $this->loadviews->loadViews('productos', $data);

    }

    public function agregarProducto(){

        if(isset($_POST)){

            if($this->validation->run($_POST, 'producto')){

                try{
                    
                    if($this->request->getFile('imagen')){

                        $imagen      = $this->request->getFile('imagen');
                        $partialName = preg_replace('/\s+/', '_', $_POST['descripcion']);

                        if($imagen->isValid() && !$imagen->hasMoved()){

                            $ubicacion = $partialName.$imagen->getRandomName();
                
                            $imagen->move(ROOTPATH.'public/assets/uploads/', $ubicacion);
                
                            $_POST['imagen'] = $ubicacion;

                        }
                    }

                    $this->productoModel->crearProducto($_POST);
                    echo 'OK';

                }catch(\Exception $e){

                    die($e->getMessage());
                }
    
            }else echo 'ERROR VAL';

        }else echo 'ERROR';

    }

    public function categorias(){

        $data['categorias'] = $this->categoriaModel->obtenerCategorias();

        $this->loadviews->loadViews('categorias', $data);

    }

    public function agregarCategoria(){

        if(isset($_POST)){

            if($this->validation->run($_POST, 'categoria')){

                try{
        
                    $this->categoriaModel->crearCategoria($_POST);
        
                    echo 'OK';

                }catch(\Exception $e){

                    die($e->getMessage());
                }
    
            }else echo 'ERROR';

        }else echo 'ERROR';

    }

    public function eliminarCategoria(){

        if(isset($_POST)){

            $iddoc = $_POST['iddocumento'];

            try{

                $this->documentoModel->deleteDocumento($iddoc);

                echo 'OK';

            }catch(\Exception $e){

                die($e->getMessage());
            }
        
        }else echo 'ERROR';

    }

    public function clientes(){

        $data['clientes'] = $this->clienteModel->obtenerClientes();

        $this->loadviews->loadViews('clientes', $data);

    }

    public function cierres(){

        $data['cierres'] = $this->cierreModel->obtenerCierres();

        $this->loadviews->loadViews('cierres', $data);

    }

    public function obtenerCarritosPorCierre(){

        if(isset($_POST)){

            try{
                $carritos = $this->carritoModel->obtenerCarritosPorCierre($_POST['idinicio']);
    
                if($carritos){
    
                    foreach($carritos as $row){

                        echo '<tr>';
                        echo '<td>'.$row['horacarrito'].'</td>';
                        echo '<td>$'.number_format($row['totalcarrito'], 2, ',', '.').'</td>';
                        echo '<td>'.$row['metododepago'].'</td>';
                        echo '<td>'.$row['nombre'].'</td>';
                        echo '</tr>';
                    }
                }
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function obtenerProductosCarrito(){

        if(isset($_POST)){

            try{
                $productosCarrito = $this->productocarritoModel->obtenerProductosCarrito($_POST['idcarrito']);
    
                if($productosCarrito){
    
                    foreach($productosCarrito as $row){

                        echo '<tr>';
                        echo '<td>'.$row['codigoalfa'].'</td>';
                        echo '<td>'.$row['descripcion'].'</td>';
                        echo '<td>'.$row['cantidad'].'</td>';
                        echo '<td>$'.number_format($row['subtotal'], 2, ',', '.').'</td>';
                        echo '</tr>';
                    }
                    
                }else echo 'ERROR';
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function historial(){

        $data['carritos'] = $this->carritoModel->obtenerCarritos();

        $this->loadviews->loadViews('historialVentas', $data);

    }

    public function estadisticas(){

        $this->loadviews->loadViews('estadisticas');

    }

    public function carrito(){

        $this->loadviews->loadViews('carrito');

    }

    public function crearJornadaCookie($idinicio){

        $diasCookie = 5;

        setcookie('working', $idinicio, time() + ($diasCookie * 24 * 3600), '/');
        setcookie('key2', hash('sha256', 'BikeShopOran2022'), time() + ($diasCookie * 24 * 3600), '/');
   
    }

    public function destruirJornadaCookie(){

        if(isset($_COOKIE['working']) && isset($_COOKIE['key2'])){

            setcookie('working', '', time() - 60, '/');
            setcookie('key2', '', time() - 60, '/');
        }

    }

    public function quitarProductoCarrito(){

        if(isset($_SESSION['carrito']) && isset($_POST)){

            $carrito    = $_SESSION['carrito'];
            $idproducto = $_POST['idproducto'];

            unset($carrito[$idproducto]);

            $cart = array_values($carrito);
            $_SESSION['carrito'] = $cart;

            $cantidad = count($cart);

            if($cantidad === 0) unset($_SESSION['carrito']);
                
            echo $cantidad;

        }else echo 'ERROR';

    }

    public function obtenerDNIClientes(){

        if(isset($_POST)){

            try{
                $clientes = $this->clienteModel->obtenerDNIClientes();
    
                if($clientes){
    
                        $datos = array();
                                            
                        foreach($clientes as $row){
                            
                            array_push($datos, $row['dni']); 
                        }
    
                        echo json_encode($datos);
    
                }else echo 'ERROR';
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function editarDatosProducto(){

        if(isset($_POST)){

            try{

                $this->productoModel->editarProducto($_POST['idproducto'], $_POST['producto']);
                echo 'OK';
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';
    }

    public function editarDatosCategoria(){

        if(isset($_POST)){

            try{

                $this->categoriaModel->editarCategoria($_POST['idcategoria'], $_POST['categoria']);
                echo 'OK';
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';
    }

    public function editarDatosCliente(){

        if(isset($_POST)){

            try{

                $this->clienteModel->editarCliente($_POST['idcliente'], $_POST['cliente']);
                echo 'OK';
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';
    }

    public function editarDatosCierre(){

        if(isset($_POST)){

            try{

                $this->cierreModel->agregarObservaciones($_POST['idinicio'], $_POST['observaciones']);
                echo 'OK';
    
            }catch(\Exception $e){
    
                die($e->getMessage());
            }

        }else echo 'ERROR';
    }

    public function iniciarJornada(){

        if(isset($_POST)){

            try{

                $idinicio = $this->inicioModel->iniciarJornada();
                $this->crearJornadaCookie($idinicio);

                echo 'OK';

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function finalizarJornada(){

        if(isset($_POST) && isset($_COOKIE['working']) && isset($_COOKIE['key2'])){

            try{

                $idinicio    = $_COOKIE['working'];
                $this->destruirJornadaCookie();
                $totalcierre = $this->carritoModel->obtenerTotalCarritoCierre($idinicio);
                $this->cierreModel->finalizarJornada($idinicio, $totalcierre);

                echo 'OK';

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function aumentarPrecios(){

        if(isset($_POST)){

            try{

                $porcentaje        = $_POST['porcentaje'];
                $porcentaje       /= 100;
                $porcentajeLista   = 0.076;
                $productos         = $this->productoModel->obtenerPreciosProductos();

                foreach($productos as $row){
                            
                    $nuevopreciocontado = ($row['preciocontado'] * $porcentaje) + $row['preciocontado'];
                    $nuevopreciolista   = ($nuevopreciocontado * $porcentajeLista) + $nuevopreciocontado;

                    $this->productoModel->incrementarPreciosContado($row['idproducto'], $nuevopreciocontado);
                    $this->productoModel->incrementarPreciosLista($row['idproducto'], $nuevopreciolista);
                    
                }

                echo 'OK';

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';
    }

    public function agregarProductoCarrito(){

        if(isset($_POST) && isset($_COOKIE['working']) && isset($_COOKIE['key2'])){

            try{

                if(!isset($_SESSION['carrito'])){

                    $this->session->start();

                    $producto[0]['idproducto']  = $_POST['carrito']['idproducto'];
                    $producto[0]['codigoalfa']  = $_POST['carrito']['codigoalfa'];
                    $producto[0]['descripcion'] = $_POST['carrito']['descripcion'];
                    $producto[0]['cantidad']    = $_POST['carrito']['cantidad'];
                    $producto[0]['precioc']     = $_POST['carrito']['precioc'];
                    $producto[0]['preciot']     = $_POST['carrito']['preciot'];
                    $producto[0]['stock']       = $_POST['carrito']['stock'];

                    $_SESSION['carrito']        = $producto;

                    echo 1;

                }else{

                    $idproducto = $_POST['carrito']['idproducto'];
                    $productos  = $_SESSION['carrito'];
                    $existe     = in_array($idproducto, array_column($productos, 'idproducto'));

                    if(!$existe){
                        
                        $producto['idproducto']  = $_POST['carrito']['idproducto'];
                        $producto['codigoalfa']  = $_POST['carrito']['codigoalfa'];
                        $producto['descripcion'] = $_POST['carrito']['descripcion'];
                        $producto['cantidad']    = $_POST['carrito']['cantidad'];
                        $producto['precioc']     = $_POST['carrito']['precioc'];
                        $producto['preciot']     = $_POST['carrito']['preciot'];
                        $producto['stock']       = $_POST['carrito']['stock'];

                        array_push($_SESSION['carrito'], $producto);

                        $cantidadtotal = count($_SESSION['carrito']);
                        echo $cantidadtotal;
                   
                    }else echo 'EXISTE';

                }

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function obtenerTotalCarrito($metodopago){

        if(isset($_SESSION['carrito'])){

            $total = 0;

            foreach($_SESSION['carrito'] as $row){

                $total += ($row[$metodopago] * $row['cantidad']);

            }

            return $total;

        }else return 0;

    }

    public function actualizaStockProducto(){

        if(isset($_SESSION['carrito'])){

            foreach($_SESSION['carrito'] as $row){

                try{

                    $stockactual = $row['stock'] - $row['cantidad'];
                    
                    $datos = [
                        'stock' => $stockactual
                    ];

                    $this->productoModel->editarProducto($row['idproducto'], $datos);

                }catch(\Exception $e){

                    die($e->getMessage());
                }
            }
        }

    }

    public function registrarProductosEnCarrito($idcarrito){

        if(isset($_SESSION['carrito'])){

            try{

                foreach($_SESSION['carrito'] as $row){

                    $productos = [

                        'idcarritocompra'  => $idcarrito,
                        'idproductocompra' => $row['idproducto'],
                        'cantidad'         => $row['cantidad'],
                        'subtotal'         => ($row['precioc'] * $row['cantidad'])
                    ];

                    $this->productocarritoModel->agregarProductoCarrito($productos);

                }

            }catch(\Exception $e){

                die($e->getMessage());
            }
        }
    }

    public function registrarVenta(){

        if(isset($_POST) && isset($_COOKIE['working']) && isset($_COOKIE['key2'])){
            
            try{

                $venta    = $_POST;
                $idinicio = $_COOKIE['working'];

                if($venta['metododepago'] !== 'Tarjeta de credito') $metodopago = 'precioc';
                else $metodopago = 'preciot';

                $total = $this->obtenerTotalCarrito($metodopago);
                $this->actualizaStockProducto();

                switch($venta){
    
                    case(isset($venta['cliente']) && isset($venta['metododepago'])):

                        try{

                            $idcliente = $this->clienteModel->agregarCliente($venta['cliente']);
                            $idcarrito = $this->carritoModel->registrarCarrito($venta['metododepago'], $total, $idcliente, $idinicio);
                            $this->registrarProductosEnCarrito($idcarrito);
                            unset($_SESSION['carrito']);
                            echo 'OK';

                        }catch(\Exception $e){

                            die($e->getMessage());
                        }
                        
                    break;
    
                    case(isset($venta['cuil']) && isset($venta['metododepago'])):

                        try{

                            $idcliente = $this->clienteModel->obtenerIDClientePorCUIL($venta['cuil']);
                            $idcarrito = $this->carritoModel->registrarCarrito($venta['metododepago'], $total, $idcliente, $idinicio);
                            $this->registrarProductosEnCarrito($idcarrito);
                            unset($_SESSION['carrito']);
                            echo 'OK';

                        }catch(\Exception $e){

                            die($e->getMessage());
                        }
                        
                    break;
                    
                    case(isset($venta['metododepago'])):
                        
                        try{

                            $idcliente = 1;
                            $idcarrito = $this->carritoModel->registrarCarrito($venta['metododepago'], $total, $idcliente, $idinicio);
                            $this->registrarProductosEnCarrito($idcarrito);
                            unset($_SESSION['carrito']);
                            echo 'OK';

                        }catch(\Exception $e){

                            die($e->getMessage());
                        }

                    break;
                }

            }catch(\Exception $e){

                die($e->getMessage());
            }

        }else echo 'ERROR';

    }

    public function settings(){

        $data['user'] = $_SESSION['user'];

        $this->loadviews->loadViews('settings', $data);

    }

    public function productosMasVendidos(){

        if(isset($_GET)){

            try{
                $totalventas = $this->productocarritoModel->obtenerTotalVentas();
                $productos   = $this->productocarritoModel->obtenerProductosMasVendidos();

                if($productos){

                    $datos   = array();
                    $parcial = 0;
                                        
                    foreach($productos as $row){

                        $parcial += $row['total'];
                        
                        $producto = [
                            'producto'   => $row['descripcion'],
                            'frecuencia' => round(($row['total'] / $totalventas) * 100)
                        ];

                        array_push($datos, $producto); 
                    }

                    $otros = $totalventas - $parcial;

                    if($otros > 0){

                        $producto = [
                            'producto'   => 'Otros',
                            'frecuencia' => round((($totalventas - $parcial) / $totalventas) * 100)
                        ];

                        array_push($datos, $producto);

                    }

                    echo json_encode($datos);

                }else echo 'ERROR';

            }catch(\Exception $e){

                die($e->getMessage());
            }
            
        }else echo 'ERROR';    

    }

    public function totalVentasPorMes(){

        if(isset($_GET)){

            try{

                $ventas = $this->carritoModel->obtenerTotalVentasPorMes();

                if($ventas){

                    $datos = array();

                    for($i = 1; $i < date('m'); $i++){

                        array_push($datos, 0);
                    }
              
                    foreach($ventas as $row){

                        $totalMes = $row['total'];

                        $datos[$row['mes']] = $totalMes; 
                    }

                    echo json_encode($datos);

                }else echo 'ERROR';

            }catch(\Exception $e){

                die($e->getMessage());
            }
            
        }else echo 'ERROR';    

    }

    public function obtenerProductosPorAgotarse(){

        if(isset($_GET)){

            try{

                $productos = $this->productoModel->obtenerProductosXAgotarse();

                if($productos){

                    echo json_encode($productos);

                }else echo 'ERROR';

            }catch(\Exception $e){

                die($e->getMessage());
            }
            
        }else echo 'ERROR';    

    }
}