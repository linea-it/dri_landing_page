<?php

function get_ferramenta($pagina_id) {
    $list_terms = get_the_terms($pagina_id, 'ferramenta');
    if ( $list_terms ) {
        return $list_terms[0]->name;
    }
    return false;
}

function get_ferramenta_slug($pagina_id) {
    $list_terms = get_the_terms($pagina_id, 'ferramenta');
    if ( $list_terms ) {
        return $list_terms[0]->slug;
    }
    return false;
}

function get_release_note_version($pagina_id) {
    return get_metadata( 'post', $pagina_id, 'version', true);
}
