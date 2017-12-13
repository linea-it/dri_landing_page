<?php

function get_api_videos_url(){
    $api_query = '/dri/api/tutorial/?format=json';
    $result = parse_url(get_site_url());
    $port = isset($result['port']) ? ':' . $result['port'] : '';
    return $result['scheme'] . "://" . $result['host'] . $port . $api_query;
}

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
