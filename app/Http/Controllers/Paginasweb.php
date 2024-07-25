<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Paginasweb extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function menus()
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $menus=DB::table('menus')->where(['iddirecciones_web'=>$iddireccionweb,'activo_menu'=>1])->orderBy('idmenus','ASC')->get();

        $datsubmenu=DB::table('submenu')->join('menus','submenu.idmenus','=','menus.idmenus')->where(['activo_submenu'=>1,'iddirecciones_web'=>$iddireccionweb])->select('submenu.idsubmenu','submenu.nom_submenu','submenu.link_submenu','submenu.archivo','submenu.idpagina','submenu.ico_submenu','submenu.idmenus')->orderBy('submenu.idmenus','ASC')->get();


        return response()->json(['menus'=>$menus,'submenus'=>$datsubmenu], 200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);

    }


    public function noticiasini()
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web
        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$iddireccionweb])->orderBy('idnoticias','DESC')->limit(8)->get();
        for($i=0;$i<count($publicacion);$i++)
        {
            $imagen=substr($publicacion[$i]->img1,7);
            $titulo=html_entity_decode($publicacion[$i]->titulo);//utf8_decode($publicacion[$i]->titulo);
            // $content=$publicacion[$i]->contenido;//utf8_decode($publicacion[$i]->contenido);
            // $cortado=substr($content,0,60);
            $datos[]=array('idnoticias'=>$publicacion[$i]->idnoticias,'titulo'=>$titulo,'img1'=>$imagen,'fecha'=>$publicacion[$i]->fechapubli,'url_datos'=>'https://gestionportales.regionhuanuco.gob.pe/storage/');
        }

        //$datos=$this->convert_from_latin1_to_utf8_recursively($datos);
        return response()->json(['listanoticias'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function pagina($id)
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $iddireccionweb=$portalesweb;//id de pagina web

        $datos=DB::table('pagina')->where(['id_pagina'=>$id,'iddirecciones_web'=>$iddireccionweb])->get();

        $id=$datos[0]->id_pagina;
        $nom_pagina=$datos[0]->nom_pagina;//utf8_decode($datos[0]->nom_pagina);
        $nom_archivophp=$datos[0]->nom_archivophp;
        $cont_pagina=$datos[0]->cont_pagina;//utf8_decode($datos[0]->cont_pagina);
        $fecha_pag=$datos[0]->fecha_pag;
        $activo_pag=$datos[0]->activo_pag;
        $iddirecciones_web=$datos[0]->iddirecciones_web;
        $iduser=$datos[0]->iduser;
        $created_at=$datos[0]->created_at;
        $updated_at=$datos[0]->updated_at;

        //$datos=array('id'=>$id,'nom_pagina'=>$nom_pagina,'nom_archivophp'=> $nom_archivophp,'cont_pagina'=>$cont_pagina,'fecha_pag'=>$fecha_pag,'activo_pag'=>$activo_pag,'iddirecciones_web'=>$iddirecciones_web,'iduser'=>$iduser,'created_at'=>$created_at,'updated_at'=>$updated_at);

        return response()->json(['pagina'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    public function enlacerefe()
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');


        $ereferencial=DB::table('enlacerefe')->where(['activo_refe'=>1,'iddirecciones_web'=>$portalesweb])->orderBy('idenlacerefe','ASC')->get();

        for($i=0;$i<count($ereferencial);$i++)
        {
            $imagen=substr($ereferencial[$i]->img_refe,7);
            $datos[]=array('idref'=>$ereferencial[$i]->idenlacerefe,
                            'entidad_ref'=>$ereferencial[$i]->entidad_ref,
                            'img_refe'=>$imagen,
                            'link_refe'=>$ereferencial[$i]->link_refe,
                            'fecha'=>$ereferencial[$i]->created_at
                        );
        }

        return response()->json(['referenciales'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }
    public function secciones()
    {
        //  $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $seccion=DB::table('secciones')->where(['activo'=>1,'iddirecciones_web'=>$portalesweb])->orderBy('seccion_pag','ASC')->orderBy('idseccion','DESC')->get();

        return response()->json(['secciones'=>$seccion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function allnoticias()
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$portalesweb])->where('idnoticias','>','6170')->orderBy('idnoticias','DESC')->paginate(8);
        // for($i=0;$i<count($publicacion);$i++)
        // {
        //     //$simplificar=substr($publicacion[$i]->titulo,0,60);
        //     $imagen=substr($publicacion[$i]->img1,7);
        //     $datos[]=array('idnoticias'=>$publicacion[$i]->idnoticias,'titulo'=>$publicacion[$i]->titulo,'contenido'=>$publicacion[$i]->contenido,'img1'=>$imagen,'fecha'=>$publicacion[$i]->fechapubli);
        // }
        return response()->json(['listanoticias'=>$publicacion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }

    public function detnoticias($id)
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');

        $publicacion=DB::table('noticias')->where(['activo'=>1,'iddirecciones_web'=>$portalesweb])->where('idnoticias',$id)->orderBy('idnoticias','DESC')->get();

            $imagen1=substr($publicacion[0]->img1,7);
            $imagen2=substr($publicacion[0]->img2,7);
            $imagen3=substr($publicacion[0]->img3,7);

            $datos[]=array(
                'idnoticias'=>$publicacion[0]->idnoticias,
                'titulo'=>$publicacion[0]->titulo,
                'contenido'=>$publicacion[0]->contenido,
                'img1'=>$imagen1,
                'img2'=>$imagen2,
                'img3'=>$imagen3,
                'fecha'=>$publicacion[0]->fechapubli
            );

        return response()->json(['detallenot'=>$datos],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],
        JSON_UNESCAPED_UNICODE);
    }




    public function listapopup()
    {
        // $enlace = "http://".request()->server('HTTP_HOST');
        $enlace = env('API_DATOS');

        $portalesweb=DB::table('direcciones_web')->where('dns_direcciones_web',$enlace)->value('iddirecciones_web');
        $publicacion=DB::table('popup')->where('activogral',1)->where('iddirecciones_web',$portalesweb)->orderBy('idpopup','DESC')->get();

        return response()->json(['popup'=>$publicacion],200, ['Content-Type' => 'application/json;charset=UTF-8', 'Charset' => 'utf-8'],JSON_UNESCAPED_UNICODE);
    }
}
