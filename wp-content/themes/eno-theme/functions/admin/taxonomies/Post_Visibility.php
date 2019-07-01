<?php

class Post_Visibility extends Cltvo_Taxonomy_Master
{
    const nombre_plural = 'Visibilidad';
    const nombre_singular = 'Visibilidad';
    const slug = 'visibilidad';

    protected static $postypes = array('post');

    protected static $initialTerms = array(
        'glocalshare' => '#glocalshare',
        'editors-pick' => 'Editor´s Pick',
        'lanzamientos' => 'Lanzamientos',
        'lo-mas-visto' => 'Lo más visto',
        'recomendaciones' => 'Recomendaciones',
    );
}
