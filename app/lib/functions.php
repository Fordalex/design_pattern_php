<?php
function get($name, $def='') {
    return isset($_REQUEST[$name]) ? $_REQUEST[$name] : $def;
}

function isActive($page, $currentPage) {
    return $page == $currentPage ? 'active' : '';
}