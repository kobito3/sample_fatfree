<?php

require_once '/home/tom/work/fatfree/lib/base.php';
F3::route('GET /','home; roll');
function home() {
    echo 'Hello, world!<br>';
    echo '<a href="http://bcosca.github.com/fatfree/">fat-free</a><br>';
    echo '<a href="https://github.com/bcosca/fatfree">ソース(github)</a><br>';
    //echo F3::resolve('{{@PARAMS.count}} bottles of beer on the wall.<br>');
}
    function roll() {
        echo 'We roll... f3';
    }

//F3::route('POST /barrel','rock; rattle; roll');
//F3::route('POST /barrel','rattle; roll');
F3::route('GET /barrel','rattle; roll');
    function rattle() {
        echo 'What\'s a rattle?';
    }
/*
F3::route('GET /brew', 'brew');
    function brew() {
        echo 'Gaaaooooo Hello, world!<br>';
        //echo F3::resolve('{{@PARAMS.count}} bottles of beer on the wall.');
    }
*/
F3::route('GET /brew/@count',
    function() {
        //echo 'Gaaaooooo Hello, world!<br>';
        echo F3::resolve('{{@PARAMS.count}} bottles of beer on the wall.');
    }
);

F3::run();


?>
