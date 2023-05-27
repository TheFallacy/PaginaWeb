<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        echo'
            <script>
                alert("Debes iniciar sesion");
                window.location="index.php;
            </script>
        ';
   
        session_destroy();
        die();
    }
?>

<!DOCTYPE html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Nerko+One&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets\css\styles-catalogo.css"/>
    <script src="assets\js\scripts-cotizador.js"></script>
</head>
<body>
    <div class="page-nav">
        <img src="assets\images\Muebles del Bosque.png" alt="logo" width="400" height="140" >
        <button id="checkout" class="button-checkout" onclick="pay()">Cotizar</button>
        
        <form action="php\cerrar_sesion.php" method="POST" class="cerrar_sesion">
            <button id="close" class="button-close" >Cerrar Sesion</button>
        </form>
    </div>
    <div class="page-content">
        <div class="product-container">
            <h3>Ropero Zapatero Media Luna</h3>
            <img src="muebles\ropero-1.jpg" width="300" height="400" />
            <h1>$3,850</h1>
            <button class="button-add" onclick="add('Ropero-1', 3850)">Agregar</button>
        </div>

        <div class="product-container">
    <h3>Cajonera de plásctico jumbo 4 cajones A/R</h3> 
    <img src="muebles\cajonera-1.jpg" width="300" height="400"/>
    <h1>$1,801</h1>
    <button class="button-add" onclick="add('cajonera-infantil', 1801)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cajonera de plásctico jumbo 3 cajones A/R</h3> 
        <img src="muebles\cajonera-2.jpg"width="300" height="400" />
        <h1>$1,871</h1>
        <button class="button-add" onclick="add('cajonera-infantil', 1871)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cómoda acapulqueña 2 cajones A/R</h3> 
        <img src="muebles\comoda-1.jpg" width="300" height="400" />
        <h1>$3,133</h1>
        <button class="button-add" onclick="add('cajonera-infantil', 3133)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cómoda acapulqueña 3 cajones A/R</h3> 
        <img src="muebles\comoda-2.jpg" width="300" height="400"/>
        <h1>$3,313</h1>
        <button class="button-add" onclick="add('cajonera-infantil', 3313)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cajonera de madera de 5 cajones A/R</h3> 
        <img src="muebles\cajonera-3.jpg" width="300" height="400"/>
        <h1>$3,011</h1>
        <button class="button-add" onclick="add('cajonera-infantil', 3011)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cómoda infantil</h3> 
        <img src="muebles\comoda-3.jpg" width="300" height="400" />
        <h1>$3,800</h1>
        <button class="button-add" onclick="add('cajonera-infantil', 3800)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama tubular individual vino/azul</h3> 
        <img src="muebles\cama-1.jpg"width="300" height="400" />
        <h1>$2,200</h1>
        <button class="button-add" onclick="add('cama-individual', 2200)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Base cajonera entintada individual</h3> 
        <img src="muebles\base-1.jpg" width="300" height="400"/>
        <h1>$2,275</h1>
        <button class="button-add" onclick="add('cama-individual', 2275)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama tubular individual disney (rosa)</h3> 
        <img src="muebles\cama-2.jpg" width="300" height="400"/>
        <h1>$2,340</h1>
        <button class="button-add" onclick="add('cama-individual', 2340)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama de madera invividual</h3> 
        <img src="muebles\cama-3.jpg" width="300" height="400"/>
        <h1>$2,400</h1>
        <button class="button-add" onclick="add('cama-individual', 2400)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama tubular matrimonial</h3> 
        <img src="muebles\cama-4.jpg" width="300" height="400"/>
        <h1>$2,400</h1>
        <button class="button-add" onclick="add('cama-matrimonial', 2400)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama de madera matrimonial</h3> 
        <img src="muebles\cama-5.jpg" width="300" height="400"/>
        <h1>$2,790</h1>
        <button class="button-add" onclick="add('cama-matrimonial', 2790)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama tubular ibiza (tactopiel) matrimonial</h3> 
        <img src="muebles\cama-6.jpg" width="300" height="400"/>
        <h1>$3,230</h1>
        <button class="button-add" onclick="add('cama-matrimonial', 3230)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cama de madera matrimonial cabecera alta</h3> 
        <img src="muebles\cama-7.jpg" width="300" height="400" />
        <h1>$3,765</h1>
        <button class="button-add" onclick="add('cama-matrimonial', 3765)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Litera tubular mixta</h3> 
        <img src="muebles\litera-1.jpg" width="300" height="400"/>
        <h1>$4,813</h1>
        <button class="button-add" onclick="add('litera', 4813)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Paellera con teflon palacio #34</h3> 
        <img src="muebles\paellera-1.jpg" width="300" height="400"/>
        <h1>$798</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 798)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cazo paellera pitsa</h3> 
        <img src="muebles\cazo-1.jpg" width="300" height="400"/>
        <h1>$998</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 998)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cazo paellera pitsa</h3> 
        <img src="muebles\cazo-1.jpg" width="300" height="400"/>
        <h1>$998</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 998)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cazo paellero con disco (ALPU22) rojo</h3> 
        <img src="muebles\cazo-2.jpg" width="300" height="400"/>
        <h1>$998</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 998)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cazo paellero "40 con disco (pulido)</h3> 
        <img src="muebles\cazo-3.jpg" width="300" height="400" />
        <h1>$1,150</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 1150)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Paellera con teflon palacio #40</h3> 
        <img src="muebles\paellera-2.jpg" width="300" height="400"/>
        <h1>$1,378</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 1378)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cazo paellero con disco palacio (rojo)</h3> 
        <img src="muebles\cazo-4.jpg" width="300" height="400"/>
        <h1>$1,338</h1>
        <button class="button-add" onclick="add('cazo-paellaera', 1338)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Colchón Hotelero Premier individual</h3> 
        <img src="muebles\colchon-1.jpg" width="300" height="400"/>
        <h1>$3,014</h1>
        <button class="button-add" onclick="add('colchon-individual', 3014)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Colchón Elegance individual doble colchoneta</h3> 
        <img src="muebles\colchon-2.jpg" width="300" height="400"/>
        <h1>$3,875</h1>
        <button class="button-add" onclick="add('colchon-individual', 3875)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Colchón Señorial Venecia individual 1 colchoneta</h3> 
        <img src="muebles\colchon-3.jpg" width="300" height="400"/>
        <h1>$4,548</h1>
        <button class="button-add" onclick="add('colchon-individual', 4548)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Colchón Spring Air Orwell individual 1 colchoneta</h3> 
        <img src="muebles\colchon-4.jpg" width="300" height="400"/>
        <h1>$4,655</h1>
        <button class="button-add" onclick="add('colchon-individual', 4655)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Colchón Spring Air Swift individual 1 colchoneta</h3> 
        <img src="muebles\colchon-5.jpg" width="300" height="400"/>
        <h1>$4,655</h1>
        <button class="button-add" onclick="add('colchon-individual', 4655)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Colchón Señorial Mundial 2 colchonetas individual</h3> 
        <img src="muebles\colchon-6.jpg" width="300" height="400"/>
        <h1>$5,723</h1>
        <button class="button-add" onclick="add('colchon-individual', 5723)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Lagos Cinsa</h3> 
        <img src="muebles\bateria-1.jpg" width="300" height="400"/>
        <h1>$812</h1>
        <button class="button-add" onclick="add('bateria-peltre', 812)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Renata Cinsa</h3> 
        <img src="muebles\bateria-2.jpg" width="300" height="400"/>
        <h1>$901</h1>
        <button class="button-add" onclick="add('bateria-peltre', 901)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Family 5 piezas Cinsa</h3> 
        <img src="muebles\bateria-3.jpg" width="300" height="400"/>
        <h1>$900</h1>
        <button class="button-add" onclick="add('bateria-peltre', 900)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Candy 7 piezas Cinsa</h3> 
        <img src="muebles\bateria-4.jpg" width="300" height="400"/>
        <h1>$920</h1>
        <button class="button-add" onclick="add('bateria-peltre', 920)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Lila 6 piezas Cinsa</h3> 
        <img src="muebles\bateria-5.jpg" width="300" height="400"/>
        <h1>$998</h1>
        <button class="button-add" onclick="add('bateria-peltre', 998)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Éxito Cinsa</h3> 
        <img src="muebles\bateria-6.jpg" width="300" height="400"/>
        <h1>$1,390</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1390)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería de cocina Cuatrociénegas</h3> 
        <img src="muebles\bateria-7.jpg" width="300" height="400"/>
        <h1>$1,499</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1499)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Armenia Cinsa</h3> 
        <img src="muebles\/bateria-8.jpg" width="300" height="400"/>
        <h1>$1,746</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1746)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Lisboa crema frutas 7 piezas tapa de cristal</h3> 
        <img src="muebles\bateria-9.jpg" width="300" height="400"/>
        <h1>$1,892</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1892)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Novacero Terranova verde milán 9 piezas</h3> 
        <img src="muebles\bateria-10.jpg" width="300" height="400"/>
        <h1>$1,845</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1845)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería de peltre Gretel verde jade</h3> 
        <img src="muebles\bateria-11.jpg" width="300" height="400"/>
        <h1>$1,978</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1978)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Madrid con tapa de vidrio Cinsa</h3> 
        <img src="muebles\bateria-12.jpg" width="300" height="400"/>
        <h1>$1,978</h1>
        <button class="button-add" onclick="add('bateria-peltre', 1978)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería de peltre Dinorah</h3> 
        <img src="muebles\bateria-13.jpg" width="300" height="400"/>
        <h1>$2,259</h1>
        <button class="button-add" onclick="add('bateria-peltre', 2259)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Pontevedra de cristal sartenes de teflón</h3> 
        <img src="muebles\bateria-14.jpg" width="300" height="400"/>
        <h1>$2,301</h1>
        <button class="button-add" onclick="add('bateria-peltre', 2301)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batería Ecko con tapa de vidrio 12 piezas</h3> 
        <img src="muebles\bateria-15.jpg" width="300" height="400"/>
        <h1>$2,671</h1>
        <button class="button-add" onclick="add('bateria-peltre', 2671)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Batidora de inmersión Taurus</h3> 
        <img src="muebles\batidora-1.jpg"width="300" height="400" />
        <h1>$488</h1>
        <button class="button-add" onclick="add('batidora', 488)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de cortinas Brocada 2.60 X 2.35</h3> 
        <img src="muebles\cortina-1.jpg" width="300" height="400"/>
        <h1>$350</h1>
        <button class="button-add" onclick="add('blancos', 350)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de cortinas Tergal 2.60 X 2.35</h3> 
        <img src="muebles\cortina-2.jpg" width="300" height="400"/>
        <h1>$370</h1>
        <button class="button-add" onclick="add('blancos', 370)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de cortinas Español 2.60 X 2.35</h3> 
        <img src="muebles\cortina-3.jpg" width="300" height="400"/>
        <h1>$428</h1>
        <button class="button-add" onclick="add('blancos', 428)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de cortinas Guipur 2.60 X 2.35</h3> 
        <img src="muebles\cortina-4.jpg" width="300" height="400"/>
        <h1>$532</h1>
        <button class="button-add" onclick="add('blancos', 532)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de sábanas de algodón individual</h3> 
        <img src="muebles\sabana-1.jpg" />
        <h1>$578</h1>
        <button class="button-add" onclick="add('blancos', 578)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de sábanas de algodón matrimonial</h3> 
        <img src="muebles\sabana-2.jpg" />
        <h1>$638</h1>
        <button class="button-add" onclick="add('blancos', 638)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de sábanas de algodón king size</h3> 
        <img src="muebles\sabana-3.jpg" />
        <h1>$798</h1>
        <button class="button-add" onclick="add('blancos', 798)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Edrecolcha de 3 cojines matrimonial</h3> 
        <img src="muebles\edrecolcha-1.jpg" />
        <h1>$858</h1>
        <button class="button-add" onclick="add('blancos', 858)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cobertor matrimonial 2 vistas</h3> 
        <img src="muebles\cobertor-1.jpg" />
        <h1>$1,018</h1>
        <button class="button-add" onclick="add('blancos', 1018)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera #28 con tapa y parrilla perico</h3> 
        <img src="muebles\budinera-1.jpg" />
        <h1>$435</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 435)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera #34 pintada con parrila pitsa</h3> 
        <img src="muebles\budinera-2.jpg" />
        <h1>$598</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 598)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera Hércules de aluminio 3/F #34 con tapa de cristal</h3> 
        <img src="muebles\budinera-3.jpg" />
        <h1>$838</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 838)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Juego de budineras pintadas</h3> 
        <img src="muebles\budinera-4.jpg" />
        <h1>$1,124</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 1124)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera #55 pintada Pitsa</h3> 
        <img src="muebles\budinera-5.jpg" />
        <h1>$1,262</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 1262)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera Hércules de aluminio 3/F #45 con tapa de cristal</h3> 
        <img src="muebles\budinera-6.jpg" />
        <h1>$1,343</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 1343)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera #70</h3> 
        <img src="muebles\budinera-7.jpg" />
        <h1>$1,630</h1>
        <button class="button-add" onclick="add('budinera-aluminio', 1630)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera recta de peltre #36</h3> 
        <img src="muebles\budinera-8.jpg" />
        <h1>$1,282</h1>
        <button class="button-add" onclick="add('budinera-peltre', 1282)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Budinera recta de peltre #42</h3> 
        <img src="muebles\budinera-9.jpg" />
        <h1>$1,426</h1>
        <button class="button-add" onclick="add('budinera-peltre', 1426)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cajonera de 5 cajones</h3> 
        <img src="muebles\cajonera-4.jpg" />
        <h1>$2,400</h1>
        <button class="button-add" onclick="add('cajonera', 2400)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cajonera de 10 cajones</h3> 
        <img src="muebles\cajonera-5.jpg" />
        <h1>$3,600</h1>
        <button class="button-add" onclick="add('cajonera', 3600)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cómoda puerta cartera</h3> 
        <img src="muebles\comoda-4.jpg" />
        <h1>$3,780</h1>
        <button class="button-add" onclick="add('cajonera', 3780)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cómoda mixta de 4 cajones con puerta</h3> 
        <img src="muebles\comoda-5.jpg" />
        <h1>$3,780</h1>
        <button class="button-add" onclick="add('cajonera', 3780)">Agregar</button>
    </div>

    <div class="product-container">
        <h3>Cómoda luna</h3> 
        <img src="muebles\comoda-6.jpg" />
        <h1>$3,799</h1>
        <button class="button-add" onclick="add('cajonera', 3799)">Agregar</button>
    </div>

        <div class="product-container">
            <h3>Ropero Zapatero Media Luna</h3> <!-- ACA VA EL NOMBRE DEL PRODUCTO-->
            <img src="muebles\ropero-1.jpg" /> <!-- ACA VA LA IMAGEN SE ACOMODARA DEPENDIENDO 
            SU CATEGORIA EJEMPLO " ROPERO-1 , ROPERO-2 , MESA-1 , ETC" -->
            <h1>$3,850</h1> <!-- ACA VA PRECIO-->
            <button class="button-add" onclick="add('product-1', 3850)">Agregar</button><!-- SE CAMBIA EL PRECIO Y CLAVE-->
        </div>
        
        
    </div>
</body>