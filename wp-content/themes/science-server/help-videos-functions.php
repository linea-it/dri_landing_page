<?php

function get_categorias($obj_json){
    $result_array = array();
    foreach ($obj_json as $item) {
        if ( !in_array($item->application_display_name, $result_array) ){
            array_push($result_array, $item->application_display_name);
        }
    }
    sort($result_array);
    return $result_array;
}

function compara_titulo($a, $b){
    if ($a->ttr_title == $b->ttr_title){
        return 0;
    }
    return ($a->ttr_title < $b->ttr_title) ? -1 : 1;
}

function get_itens_por_categoria($obj_json, $categoria){
    $result_array = array();
    foreach ($obj_json as $item) {
        if ($item->application_display_name == $categoria){
            array_push($result_array, $item);
        }
    }
    usort($result_array, 'compara_titulo');
    return $result_array;
}
?>
