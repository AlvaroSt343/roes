<?PHP
 
 switch ($val_desarrollo) {
            /* case 'AACTUN-HA': $precio_apertura=1100; $costo_administra=4900; $moneda="MXN";   //$val_desarrollo="AACTUN-HA";
                break; */
            case 'LAS SALINAS': $precio_apertura=690; $costo_administra=490; $moneda="USD"; //$val_desarrollo="LAS SALINAS"; 
                break;
            case 'MARAVILLAS DEL MAYAB': $precio_apertura=750; $costo_administra=4900; $moneda="MXN"; //$val_desarrollo="LAS MARAVILLAS DEL MAYAB";
                break;
            case 'LOTES DE INVERSION': $precio_apertura=400; $costo_administra=4900; $moneda="MXN"; //$val_desarrollo="MAYAKAAN";
                break;
            case 'YAXKU': $precio_apertura=700; $costo_administra=4900; $moneda="MXN"; //$val_desarrollo="YAXKU";
                break;

            default:
                $precio_apertura=700; $costo_administra=4900; $val_desarrollo="YAXKU"; $moneda="MXN";
                break;
        }

?>








