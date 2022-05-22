<?php

require "vendor/autoload.php";

$mpdf = new \Mpdf\Mpdf();

// $mpdf->SetDisplayMode('fullpage');
// $mpdf->list_indent_first_level = 0; 
// $stylesheet = file_get_contents('mpdfstyletables.css');
// $mpdf->WriteHTML($stylesheet,1);
// $mpdf->WriteHTML($html);
// $mpdf->Output('mpdf.pdf');

// https://mpdf.github.io/html-support/html-tags.html


$mpdf->WriteHTML("<p>HTML</p>");
$mpdf->Output("file.pdf", "D");