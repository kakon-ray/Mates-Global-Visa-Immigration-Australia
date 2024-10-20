<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 6/16/24
 * Time: 10:01 PM
 */

$ContentFile=$image_file;
$path='./others/images/content/user_make/'.$ContentFile;

header("Pragma: public");
header('Content-disposition: attachment; filename='.$ContentFile);
header("Content-type: ".mime_content_type($path));
header("Content-Length: " . filesize($path) ."; ");
header('Content-Transfer-Encoding: binary');
ob_clean();
flush();

$chunksize = 1 * (1024 * 1024); // how many bytes per chunk
if (filesize($path) > $chunksize) {
    $handle = fopen($path, 'rb');
    $buffer = '';

    while (!feof($handle)) {
        $buffer = fread($handle, $chunksize);
        echo $buffer;
        ob_flush();
        flush();
    }

    fclose($handle);
}
else
{
    readfile($path);
}