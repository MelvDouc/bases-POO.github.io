<?php

    class Text{

        private static $euro = '&thinsp;€';
        const DOLLAR = '&thinsp;$';

        /*public function ajoutZero($nombre){
            if($nombre < 10){
                return '0' . $nombre;
            } else{
                return $nombre;
            }
        }*/
        
        private static function ajoutZeroPrivate($nombre){
            echo str_pad($nombre, 2, '0', STR_PAD_LEFT) . self::$euro;
            echo '<br>';
            echo str_pad($nombre * 1.21, 2, '0', STR_PAD_LEFT) . self::DOLLAR;
        }

        public static function ajoutZeroPublic($nombre){
            return self::ajoutZeroPrivate($nombre); // "self" permet de reprendre une fonction statique en changeant son statut de private à public.
        }


    }