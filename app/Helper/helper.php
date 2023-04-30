<?php
function formatRupiah($nominal, $prefix = null){
    $prefix = $prefix ? $prefix : 'Rp';
    $result = $prefix . number_format($nominal,0,',','.');
    return $result;
}

