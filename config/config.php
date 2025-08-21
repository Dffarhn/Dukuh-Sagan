<?php
function loadJSON($filename) {
    $path = __DIR__ . '/../data/' . $filename;
    if (file_exists($path)) {
        return json_decode(file_get_contents($path), true);
    }
    return [];
}

function getUMKM() {
    return loadJSON('umkm.json');
}

function getTokoh() {
    return loadJSON('tokoh.json');
}

function getBudaya() {
    return loadJSON('budaya.json');
}

function getSejarah() {
    return loadJSON('sejarah.json');
}
?>
