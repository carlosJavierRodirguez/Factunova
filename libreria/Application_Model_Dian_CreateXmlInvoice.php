<?php
class Application_Model_Dian_CreateXmlInvoice
{

   public function createXml($data)
   {
      $headXml = $this->prepareHead();
      $urlExtensions = $this->prepareUBLExtensions($data);
      // $versionXml = $this->prepareVersionXml($data);
      $accountingSupplierParty = $this->prepareAccountingSupplierParty($data);
      $accountingCustomerParty = $this->prepareAccountingCustomerParty($data);
      $paymentTotalLegalMonetaryTotal = $this->preparePayTotalLegalMonetaryTotal($data);
      $invoiceLine = $this->crateTotalTributos($data);
      $totalInvoiceLine = $this->prepareInvoiceLine($data);
      $end = $this->prepareEnd();

      // $xml = $headXml . $urlExtensions . $versionXml . $accountingSupplierParty . $accountingCustomerParty . $paymentTotalLegalMonetaryTotal . $invoiceLine . $totalInvoiceLine . $end;
      // echo $xml;
      // return $xml;
   }

   public function prepareHead()
   {
      return "
         <?xml version='1.0' encoding='UTF-8' standalone='no'?>

         <Invoice xmlns='urn:oasis:names:specification:ubl:schema:xsd:Invoice-2'
         xmlns:cac='urn:oasis:names:specification:ubl:schema:xsd:CommonAggregateComponents-2'
         xmlns:cbc='urn:oasis:names:specification:ubl:schema:xsd:CommonBasicComponents-2'
         xmlns:ds='http://www.w3.org/2000/09/xmldsig#'
         xmlns:ext='urn:oasis:names:specification:ubl:schema:xsd:CommonExtensionComponents-2'
         xmlns:sts='dian:gov:co:facturaelectronica:Structures-2-1'
         xmlns:xades='http://uri.etsi.org/01903/v1.3.2#'
         xmlns:xades141='http://uri.etsi.org/01903/v1.4.1#'
         xmlns:xsi='http://www.w3.org/2001/XMLSchema-instance' 
         xsi:schemaLocation='urn:oasis:names:specification:ubl:schema:xsd:Invoice-2     http://docs.oasis-open.org/ubl/os-UBL-2.1/xsd/maindoc/UBL-Invoice-2.1.xsd'>
      ";
   }

   public function prepareUBLExtensions($data)
   {
      return "   
    
        ";
   }

   public function prepareAccountingSupplierParty($data)
   {

      return " 
   ";
   }
   //datos de usuario que hace la compra
   public function prepareAccountingCustomerParty()
   {
      return "";
   }
   //datos de la moneda con las que se paga
   public function preparePayTotalLegalMonetaryTotal()
   {
      return " ";
   }

   public function crateTotalTributos() {}
   //datos de la factura cada uno de los productos
   public function prepareInvoiceLine() {}

   public function prepareEnd() {}
}
