 <?php
    require_once 'Controller/ControllerItems.php';
    require_once 'Controller/ControllerMarca.php';
    require_once 'Controller/ControllerUsers.php';
    require_once 'RouterClass.php';
    
    // CONSTANTES PARA RUTEO
    define("BASE_URL", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/');
    define("LOGIN", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/login');
    define("LOGOUT", 'http://'.$_SERVER["SERVER_NAME"].':'.$_SERVER["SERVER_PORT"].dirname($_SERVER["PHP_SELF"]).'/logout');
    $r = new Router();
    //home 
    $r->addRoute("home", "GET", "ControllerUsers", "Home" );
    //ABM Productos (productos/zapatillas)
    $r->addRoute("productos", "GET", "ControllerItems", "ShowItems");
    $r->addRoute("detalleProducto/:ID", "GET", "ControllerItems", "DetalleProducto");
    $r->addRoute("insert", "POST", "ControllerItems", "Insert");
    $r->addRoute("showEditForm/:ID", "GET", "ControllerItems", "ShowEditForm");
    $r->addRoute("editItem/:ID", "POST", "ControllerItems", "Edit");
    $r->addRoute("eliminar/:ID", "GET", "ControllerItems", "Borrar");

    //ABM Categorias (categoria/marcas)
    $r->addRoute("marcas", "GET", "ControllerMarca", "ShowMarcas");
    $r->addRoute("detallesMarca/:ID", "GET", "ControllerMarca", "ShowByMarcas");
    $r->addRoute("insertar", "POST", "ControllerMarca", "InsertMarca");
    $r->addRoute("ShowFormEditMarca/:ID", "GET", "ControllerMarca", "ShowFormEditMarca");
    $r->addRoute("editarMarca/:ID", "POST", "ControllerMarca", "editarMarca");
    $r->addRoute("borrar/:ID", "GET", "ControllerMarca", "BorrarMarcas");
    //rutas administrador
    $r->addRoute("gestUsuarios", "GET", "ControllerUsers", "usersTable");
    $r->addRoute("deleteUser/:ID", "GET", "ControllerUsers", "deleteUser");
    $r->addRoute("quitarPermiso/:ID", "GET", "ControllerUsers", "quitarPermisos");
    $r->addRoute("darPermiso/:ID", "GET", "ControllerUsers", "darPermisos");
    //Rutas login 
    $r->addRoute("newuser", "GET", "ControllerUsers", "NewUser");
    $r->addRoute("insertnewuser", "POST", "ControllerUsers", "InsertNewUser");
    $r->addRoute("login", "GET", "ControllerUsers", "Login");
    $r->addRoute("verifyUser", "POST", "ControllerUsers", "VerifyUser");
    $r->addRoute("logout", "GET", "ControllerUsers", "LogOut");
    
    //ruta por defecto
    $r->setDefaultRoute("ControllerUsers", "Home");
    $r->route($_GET['action'], $_SERVER['REQUEST_METHOD']); 
?>