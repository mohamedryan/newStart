<?php

function rr() {
    echo '<pre>';
    array_map(function($x) {
        print_r($x);
    }, func_get_args());

    echo '</pre>';
}



?>