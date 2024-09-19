<?php
function CariAwalan($xml, $awalan) {
    $result = [];
    $xmlObject = simplexml_load_string($xml);

    foreach ($xmlObject->xpath("//folder[starts-with(@name, '$awalan')]") as $folder) {
        $result[] = (string) $folder['name'];
    }

    return $result;
}

// Contoh penggunaan
$xml = '<?xml version="1.0" encoding="UTF-8"?>
<folder name="c">
    <folder name="program files">
        <folder name="uninstall information" />
    </folder>
    <folder name="users" />
</folder>';

$folders = CariAwalan($xml, 'u');
foreach ($folders as $name) {
    echo $name . "\n"; // Output: uninstall information, users
}
?>
