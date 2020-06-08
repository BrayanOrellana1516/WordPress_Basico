<?php
/*
Plugin Name: mi-shortcode
Plugin URI: programadornovato.com
Description: Este pluging agrega un shortcode a wordpress
Version: 1.0.0
Author: Eugenio Chaparro
Author URI: programadornovato.com
License: GPLv2
*/
add_action("init", "mi_codigo_corto");
if (!function_exists("mi_codigo_corto")) {
    function mi_codigo_corto() {
        add_shortcode("consulta", "funcion_consulta");
    }
}
function funcion_consulta($args, $content) {
    //[consulta argument1="Valor del argumento1"]Valor del contenido[/consulta]
    //$content=Valor del contenido
    //$args['argument1']=Valor del argumento1
    return "<strong>Contenido</strong>=".$content . "</br><strong>Argumento1</strong>=" . $args['argument1'];
}