<?php
function CekSama($kata) {
    $kata = strtolower($kata); // Mengubah semua huruf menjadi kecil
    return $kata === strrev($kata); // Membandingkan dengan kebalikan string
}

// Contoh penggunaan
echo CekSama("katak") ? 'true' : 'false'; // Output: true
echo "\n";
echo CekSama("KAtak") ? 'true' : 'false'; // Output: true
echo "\n";
echo CekSama("rumah") ? 'true' : 'false'; // Output: false
?>
