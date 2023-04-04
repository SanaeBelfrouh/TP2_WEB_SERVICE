<!DOCTYPE html>
<html>
<head>
	<title>Convertisseur de devise</title>
</head>
<body>
	<h1>Convertisseur de devise</h1>

		
<?php
// inclure les classes générées par wsdl2phpgenerator
//require_once 'C:\Users\Lenovo\Desktop\Php\classes.php';

// URL du WSDL du service Web
$wsdl = 'http://localhost:9191/?wsdl';

// créer une instance de SOAPClient
$client = new SoapClient($wsdl);

$cls = $client->__soapCall('listComptes',array());

foreach ($cls->return as $i) {
    echo $i->code;
} 
$par=new StdClass();
$par=100;

// appeler la méthode "convertAuroToDH" du service Web
$response = $client->__soapCall('Convert',array($par));

// afficher la réponse
echo $response->return ;

?>
</body>
</html>