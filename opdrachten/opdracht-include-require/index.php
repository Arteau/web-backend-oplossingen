<?php 

    // [0] => 
    //     ['title'] => Titel van artikel 1
    //     ['text'] => Tekst van artikel 1
    //     ['tags'] => [0] => tag 1 van artikel 1
    // [1] => 
    //     ['title'] => Titel van artikel 2
    //     ['text'] => Tekst van artikel 2
    //     ['tags'] => [0] => tag 1 van artikel 2
    //                 [1] => tag 2 van artikel 2
    // [2] => 
    //     ['title'] => Titel van artikel 3
    //     ['text'] => Tekst van artikel 3
    //     ['tags'] => [0] => tag 1 van artikel 3
    //                 [1] => tag 2 van artikel 3
    //                 [2] => tag 3 van artikel 3
$artikels = array(
    0 => array(
        "title" => "titel van artikel 1",
        "text" => "tekst van artikel 1",
        "tags" => array(
            0 => "tag 1 van artikel 1"
            )
        ),
    1 => array(
        "title" => "titel van artikel 2",
        "text" => "tekst van artikel 2",
        "tags" => array(
            0 => "tag 1 van artikel 2",
            1 => "tag 2 van artikel 2"
            )
        ),
    2 => array(
        "title" => "titel van artikel 3",
        "text" => "tekst van artikel 3",
        "tags" => array(
            0 => "tag 1 van artikel 3",
            1 => "tag 2 van artikel 3",
            2 => "tag 3 van artikel 3"
            )
        )
    );



    require "view/header-partial.html";
    require "view/body-partial.html";
    require "view/footer-partial.html";

?>

