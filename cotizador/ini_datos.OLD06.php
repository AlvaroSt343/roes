<?PHP
 
 switch ($val_desarrollo) {
            case 'AACTUN-HA': $precio_apertura=1100; $costo_administra=4900;  //$val_desarrollo="AACTUN-HA";
                break;
            case 'LAS SALINAS': $precio_apertura=14490; $costo_administra=10290; //$val_desarrollo="LAS SALINAS"; 
                break;
            case 'MARAVILLAS DEL MAYAB': $precio_apertura=700; $costo_administra=4900; //$val_desarrollo="LAS MARAVILLAS DEL MAYAB";
                break;
            default:
                $precio_apertura=1100; $costo_administra=4900; $val_desarrollo="AACTUN-HA"; 
                break;
        }

?>








