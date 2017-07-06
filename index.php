<?php
error_reporting(E_ALL);
require __DIR__ . '/vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\NamedRange;
use PhpOffice\PhpSpreadsheet\Calculation;

// Create new Spreadsheet object
$spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
$spreadsheet->getActiveSheet()->setCellValue('A1', 'kiki');
$name = html_entity_decode('clich&eacute;');
$name = '"'.$name.'"';
$spreadsheet->addNamedRange(new NamedRange($name, $spreadsheet->getActiveSheet(), 'A1'));
$res = Calculation::getInstance($spreadsheet)->parseFormula('=' .$name);
var_dump($res);