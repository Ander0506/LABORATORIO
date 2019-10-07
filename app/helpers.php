<?php

function setAction($routeName){
    return request()->routeIs($routeName) ? 'active' : '';
}

?>
