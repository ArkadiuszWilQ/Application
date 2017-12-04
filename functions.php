<?php

function dd($arg, $addHtml = true) {
    if($addHtml) {
        $callData = debug_backtrace()[0];

        $file = $callData['file'];
        $line = $callData['line'];

        echo "<pre> <strong style=\"font-size:20px\">CALL IN $file FILE IN $line LINE </strong><br><br><br>";
    }

    print_r($arg);
    die;
}

function d($arg) {
    echo '<pre>';
    print_r($arg);
}
