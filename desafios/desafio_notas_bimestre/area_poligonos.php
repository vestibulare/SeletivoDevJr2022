<?php
    function area_triangulo($b,$c,$ang){
        $tri = ( $b * $c * sin($ang))/2;
        return $tri;
    }

    function area_poligono($arr, $ang){
        $area_soma = 0;
        for ($i=0; $i < (sizeof($arr)-1); $i++) { 
            $area_soma += area_triangulo($arr[$i],$arr[$i+1],$ang);
        }
        $area_soma += area_triangulo($arr[sizeof($arr)-1],$arr[0],$ang);

        return $area_soma;
    }

    $notas = array(8.2, 7.8, 7.9, 6.2, 7.3, 8.0, 8.0, 9.3, 8.7);
    $ang = 360/sizeof($notas);
    $area = area_poligono($notas,$ang);
    echo "Area do poligono: " . $area;

?>