<?php
class controller
{
    public function parametrosXml()
    {
        //prametros para le metodo prepareUBLExtensions
        $InvoiceAuthorization = '18760000001';
        $StartDate = '2019-01-19';
        $EndDate = '2030-01-19';
        $Prefix = 'SETP';
        $From = '990000000';
        $To = '995000000';
        $companyNit = '800197268';
        $SoftwareID = '56f2ae4e-9812-4fad-9255-08fcfcd5ccb0';
        $pin = '12345';
        $SoftwareSecurityCode = hash('sha384', $SoftwareID . $pin);
        $AuthorizationProviderID = '800197268';
        $QRCode = ' 
            NroFactura=SETP990000002
            NitFacturador=800197268
            NitAdquiriente=900108281 
            FechaFactura=2019-06-20 
            ValorTotalFactura=14024.07 
            CUFE=941cf36af62dbbc06f105d2a80e9bfe683a90e84960eae4d351cc3afbe8f848c26c39bac4fbc80fa254824c6369ea694 
            URL=https://catalogo-vpfe-hab.dian.gov.co/Document/FindDocument?documentKey=941cf36af62dbbc06f105d2a80e9bfe683a90e84960eae4d351cc3afbe8f848c26c39bac4fbc80fa254824c6369ea694&amp;partitionKey=co|06|94&amp;emissionDate=20190620
        ';
        $CustomizationID = '10';

        //1 para ambienente de produccion y 2 para ambiente de pruebas
        $ProfileExecutionID = '2';

        //numero de la factura
        $ID = $Prefix . $From;

        /**
         * este es lo que se conoce como cufe
         * falta hacer el hash con los valores de la factura
         */
        $UUID = hash('sha384', '');

        //fecha de emision de la factura
        $IssueDate = '2019-06-20';
        $IssueTime = '09:15:23-05:00';

        //numero que representa el tipo del documento
        $InvoiceTypeCode = '01';

        //numero de productos que tiene la factura
        $LineCountNumeric = '2';

        //mes en el que se esta facturando desde que inicia hasta que termina
        $InvoicePeriodStartDate = '2019-05-01';
        $InvoicePeriodEndDate = '2019-05-30';

        // parametros prepareAccountingSupplierParty
        // 1 para persona juridica y 2 para persona natural
        $AdditionalAccountID = '1';

        //codigo de la industria
        $IndustryClassificationCode = '6209 ';

        $CompanyName = 'NOMBRE EMPRESA';
        $CompanyPostCode = '';
        //nombre de la ciudad
        $CompanyCity = 'BOGOTA D.C.';
        //departamento
        $CompanyDpt = 'BOGOTA';
        //codigo del departamento
        $CompanyDptCode = '11';
        //dirreción
        $CompanyAddres = 'CALLE 1';
        //nombre de la empresa registrado en el rut
        $RegistrationName = 'DIAN';

        /** Obligaciones o responsabilidades del  
         * contribuyente; incluye el régimen 
         * al que pertenece el emisor*/
        $TaxLevelCode = '0-99';
        //codigo de municipio
        $CityCode = '11001';

        //01 para iva
        $TaxSchemeID = '01';
        $TaxSchemeName = 'IVA';
        /**
         * 1: Persona natural
         * 2: Persona jurídica
         * 3: Gran contribuyente
         */
        $AdditionalAccountID = '1';
        // parametros prepareAccountingCustomerParty
        //datos del cliente
        //nombre del cliente
        $CustomerName = 'OPTICAS GMO COLOMBIA S A S';
        $CustomerCityCode = '11001';
        $CustomerCity = 'Bogotá, D.c. ';
        $CustomerDpto = 'Bogotá';
        $CustomerDptoCode = '11';
        $CustmerAddress = 'CARRERA 8 No 20-14/40';
        $CustomerNit = '900108281';
    }
}
