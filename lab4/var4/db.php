<?php
    function writeDB($pol_result) {
        $strJsonFileContents = file_get_contents("db.json");
        $pol_data = json_decode($strJsonFileContents, true);
        if (array_key_exists($pol_result, $pol_data)) {
            $pol_data[$pol_result] = $pol_data[$pol_result]  + 1;

            $fp = fopen('db.json', 'w+');
            fwrite($fp, json_encode($pol_data));
            fclose($fp);

            return true;
        }
        return false;
    }
?>