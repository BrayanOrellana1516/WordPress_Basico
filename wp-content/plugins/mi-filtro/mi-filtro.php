<?php
/*
Plugin Name: mi-filtro
Plugin URI: programadornovato.com
Description: Este pluging agrega texto antes del titulo
Version: 1.0.0
Author: Eugenio Chaparro
Author URI: programadornovato.com
License: GPLv2
*/
add_filter("the_title", "mi_filtroAgregaTitulo");
add_filter("the_content", "mi_filtroEditaContenido");

/*
 * Agregamos un texto al titulo
*/
if(!function_exists("mi_filtroAgregaTitulo")){
    function mi_filtroAgregaTitulo($textoDelTitulo){
        return "Texto extra ".$textoDelTitulo;
    }
}
/*
 * Cambiamos de minusculas a mayusculas el contenido
*/
if(!function_exists("mi_filtroEditaContenido")){
    function mi_filtroEditaContenido($textoDelContenido){
        return strtoupper($textoDelContenido);
    }
}