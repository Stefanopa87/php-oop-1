<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// GOAL:Generare nuovo controller con rotta associata; definire poi classe Movie con titolo e
// descrizione; definire costruttore con titolo necessario e descrizione opzionale;
// e metodo getString() che restituisca
// una stringa riportante tutte le variabili; generare poi un paio di istanze
// e stamparle per mezzo del dd()



class Movie {

    public $title;
    public $description;


    public function  getString() {

        return "TITOLO FILM: " . $this -> title . "\n" . "DESCRIZIONE: " . $this -> description;
    }

    public function __construct($title, $description = "null") {

        $this -> title = $title;
        $this -> description = $description;

        if ($description === "null") {
            $this -> description = "//nessuna descrizione disponibile//";
        }
        
    }
}

class ControllerMovie extends Controller {

    public function pag1() {

        $film1 = new Movie("Mistero Dei Templari", "Film sugli antichi templari. Avventura.");
        $film2 = new Movie("Panic Room");
        $film3 = new Movie("Pippo, Pluto e Paperino", "Cartone animato. Avventura");
        $film4 = new Movie("Pirati Assassini");
        $film5 = new Movie( "Miranda", "Film basato su eventi relmente accaduti. Horror");

        $film1Str = $film1 -> getString();
        $film2Str = $film2 -> getString();
        $film3Str = $film3 -> getString();
        $film4Str = $film4 -> getString();
        $film5Str = $film5 -> getString();

        dd($film1Str, $film2Str, $film3Str, $film4Str, $film5Str);      


        return view('pages.movie');
    }














    public function pag2(){

        return view('pages.movie2');
    }





}

