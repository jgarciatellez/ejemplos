<?php

//index.php?controlador=recetas&id=0
//index.php?controlador=recetas&id=1

class controlador{
    function __construct(){
    }
    
    public function repartidor(){
        $this->recetas();
    }
    
    public function recetas(){
        
        if ($_GET["id"] == 0){
            $pagina=file_get_contents("vista/defecto.php");
            $this->render_pagina($pagina);
        } else{
            $pagina=file_get_contents("vista/receta.php");
            $this->render_pagina($pagina);
        }
        
    }
    
    public function obtener_recetas($columna){
        
        $receta=new receta_modelo("localhost","recetas","alumno","alumno");
        $recetas=$receta->obtener_recetas($columna);
        $resultado="";
        foreach ($recetas as $linea_receta){
            $resultado=$resultado."<h4><a href='#'>$linea_receta[titulo]</a></h4>";
            $resultado=$resultado."<tr>$linea_receta[descripcion]</tr>";
        }
        return $resultado;
    }
   
    public function obtener_receta($id){
        
        $receta=new receta_modelo("localhost","recetas","alumno","alumno");
        $datos_receta=$receta->obtener_receta($id);
        $receta="$datos_receta[descripcion]";
        $receta.="<h4>Ingredientes</h4>";
        $receta.="$datos_receta[ingredientes]";
        $receta.="<h4>Elaboración</h4>";
        $receta.="$datos_receta[elaboracion]";
        return $receta;
    }
    
    public function render_pagina($pagina){
        $pagina=preg_replace("/\#HEAD\#/ms",file_get_contents("vista/cabecera.php"), $pagina);
        $pagina=preg_replace("/\#TITULO\#/ms",file_get_contents("vista/titulo.php"), $pagina);
        $pagina=preg_replace("/\#MENU\#/ms",file_get_contents("vista/menu.php"), $pagina);
        $pagina=preg_replace("/\#CARRUSEL\#/ms",file_get_contents("vista/carrusel.php"), $pagina);
        $pagina=preg_replace("/\#RECETAS\#/ms",file_get_contents("vista/recetas.php"), $pagina);
        $pagina=preg_replace("/\#CAPA_RECETAS\#/ms",file_get_contents("vista/capa_receta.php"), $pagina);
        $pagina=preg_replace("/\#RECETA\#/ms",$this->obtener_receta($_GET["id"]), $pagina);
        $pagina=preg_replace("/\#COLUMNA1\#/ms",$this->obtener_recetas(1), $pagina);
        $pagina=preg_replace("/\#COLUMNA2\#/ms",$this->obtener_recetas(2), $pagina);
        $pagina=preg_replace("/\#PIE\#/ms",file_get_contents("vista/pie.php"), $pagina);
        echo $pagina;
    }
}