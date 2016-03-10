<?php

try {
	$client = new \SoapClient('https://www3.bcb.gov.br/sgspub/JSP/sgsgeral/FachadaWSSGS.wsdl', [
		'exceptions' => true,
		'cache_wsdl' => WSDL_CACHE_NONE
	]);

	$call = $client->__soapCall('getUltimoValorVO', [
		'codigoSerie' => 189
	]);

	var_dump($call->ultimoValor->ano);
	var_dump($call->ultimoValor->svalor);
	var_dump($call);

} catch (\Exception $e) {
	echo 'Erro: ' . $e->getMessage();
}
