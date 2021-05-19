<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// - definire classe User caratterizzata da nomeUtente, password
// - definire una funzione all'interno della classe User per ottenere una stringa
// che rappresenti l'utente
// - all'interno del metodo del controller (home) istanziare un paio di oggetti
// di tipo User (new User())
// - definire i relativi dati (username e password)
// - stampare risultati della getString() attraverso il dd

class User {

    public $name;
    public $password;

    public function getString(){

        return "User Name: " . $this -> name . " || User Psw: " . $this -> password;
    }

    // - aggiungere il metodo __construct che acquisisca le 2 informazioni username e
    // password in maniera obbligatoria

    // nelle parentesi del __construct si possono dare dei valori di default alle chiavi
    // queste chiavi verrano prese nel caso in cui non viene dato un valore specifico

    public function __construct($name = '', $password = 'null') {
    
        $this -> name = $name;
        $this -> password = $password;

        // - definire il secondo parametro del costruttore (password) come opzionale e
        // nel caso non sia fornito valorizzare l'attributo corrispondente per mezzo
        // della funzione nativa del php uniqid()

        if($password === 'null'){
            $this -> password = uniqid();
        }
    }
}



class TestController extends Controller {

    public function home() {

        // NO COSTRUTTO
        $us1 = new User();
        $us1 -> name = 'Mario';
        $us1 -> password = 'defr34eswe213';

        // CON COSTRUTO
        $us2 = new User('Giulio', '12aqw213wq' );

        // CON COSTRUTTO MA SENZA IL CAMPO PASSWORD, SI ATTIVA DUNQUE L'IF() DEFINITO SOPRA
        $us3 = new User('Mario');
      

        $us1Str = $us1 -> getString();
        $us2Str = $us2 -> getString();
        $us3Str = $us3 -> getString();
        // dd($us1Str, $us2Str, $us3Str);


        // - generare altre due istanze della classe User, e aggiungere poi tutti gli oggetti
        // creati all'interno di un array
        // - ciclando sull'array stampare tutti gli elementi

        $us4 = new User('Bibbo', '12adedfrfrfrqw2f13wq' );

        $us5 = new User('Cristina', '33333333' );

        $users = [
            $us1,
            $us2,
            $us3,
            $us4,
            $us5
        ];

        $str = '';
        foreach ($users as $user) {
           $str .= $user -> getString() . "\n";
        }

        $us4Str = $us4 -> getString();
        $us5Str = $us5 -> getString();

        dd($us1Str, $us2Str, $us3Str, $us4Str, $us5Str, $str);

        return view('pages.home');
    }
}


