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
        $SoftwareID = '56f2ae4e-9812-4fad-9255-08fcfcd5ccb0';
        $pin = '12345';
        $NitEmpresa = '800197268';
        //nit de la dian
        $AuthorizationProviderID = '800197268';

        $QRCode = ' NroFactura=SETP990000002
                  NitFacturador=800197268
                  NitAdquiriente=900108281 
                  FechaFactura=2019-06-20 
                  ValorTotalFactura=14024.07 
                  CUFE=941cf36af62dbbc06f105d2a80e9bfe683a90e84960eae4d351cc3afbe8f848c26c39bac4fbc80fa254824c6369ea694 
                  URL=https://catalogo-vpfe-hab.dian.gov.co/Document/FindDocument?documentKey=941cf36af62dbbc06f105d2a80e9bfe683a90e84960eae4d351cc3afbe8f848c26c39bac4fbc80fa254824c6369ea694&amp;partitionKey=co|06|94&amp;emissionDate=20190620';

        $SoftwareSecurityCode = hash('sha384', $SoftwareID . $pin);

        //parametros para prepareVersionXml
        $CustomizationID = '10';
        //1 para ambienente de produccion y 2 para ambiente de pruebas
        $ProfileExecutionID = '2';
        $ID = $Prefix . $From;
        $UUID = hash('sha384', '');
        $IssueDate = '2019-06-20';
        $IssueTime = '09:15:23-05:00';
        $InvoiceTypeCode = '01';
        //numero de productos que tiene la factura
        $LineCountNumeric = '2';
        $InvoicePeriodStartDate = '2019-06-20';
        $InvoicePeriodEndDate = '2019-06-30';

        // parametros prepareAccountingSupplierParty
        // 1 para persona juridica y 2 para persona natural<
        $AdditionalAccountID = '1';
        //codigo de la industria
        $IndustryClassificationCode = '6209 ';
        $NombreEmpresa = 'NOMBRE EMPRESA';
        $CodigoPostal = '';
        //nombre de la ciudad
        $CityName = 'BOGOTA D.C.';
        //departamento
        $CountrySubentity = 'BOGOTA';
        //codigo del departamento
        $CountrySubentityCode = '';
        //dirreción
        $Line = 'CALLE 1';
        //nombre de la empresa registrado en el rut
        $RegistrationName = 'DIAN';

        /** Obligaciones o responsabilidades del  
         * contribuyente; incluye el régimen 
         * al que pertenece el emisor*/
        $TaxLevelCode = '99';

        $CodigoCiudad = '11001';

        // parametros prepareAccountingCustomerParty
        //nombre del cliente
        $NombreCliente = 'OPTICAS GMO COLOMBIA S A S';
        $codigoCiudadCliente = '11001';
        $NombreCiudadCliente = 'Bogotá, D.c. ';
        $NombreDepartamentoCliente = 'Bogotá';
        $CodigoDepartamentoCliente = '11';
        $AddressCliente = 'CARRERA 8 No 20-14/40';
    }
}
