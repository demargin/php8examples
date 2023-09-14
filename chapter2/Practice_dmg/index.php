<?php
$thelist = ""; // Inicializar la variable $thelist

if ($handle = opendir('.')) {
    while (false !== ($file = readdir($handle))) {
        if (($file != ".") && ($file != "..")) {
            $thelist .= '<LI><a href="'.$file.'">'.$file.'</a>';
        }
    }

    closedir($handle);
}
?>

<p>List de archivos:</p>
<ul>
<p><?=$thelist?></p>
</ul>