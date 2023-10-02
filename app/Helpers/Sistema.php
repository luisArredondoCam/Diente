<?php

function mostrar_info($clave){
    $info = DB::table('info_web')
            ->where('info_web.clave',$clave)
            ->first();
    
    return $info ? $info->valor : '';


}

function mostrar_icon($clave){
    $info = DB::table('info_web')
            ->where('info_web.clave',$clave)
            ->first();
    
    return $info ? $info->icon : '';

}



