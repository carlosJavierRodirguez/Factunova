<?php
include("libreria/Application_Model_Dian_CreateXmlInvoice.php");
$xml = new Application_Model_Dian_CreateXmlInvoice();
$xml->createXml($date);

$date=[
    'date' => date('Y-m-d H:i:s'),
    'message' => 'XML created successfully',
    'status' => 'success'
];
