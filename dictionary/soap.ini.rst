.. _soap:

SOAP
----

SOAP is an acronym for Simple Object Access Protocol. It is a messaging protocol to exchange structure data, based on XML.

PHP supports SOAP with a native extension called ext/soap.


.. code-block:: php
   
   
   <?php
   
   // Example from the soap documentation in PHP
   
   function Add($x,$y) {
     return $x+$y;
   }
   
   class LocalSoapClient extends SoapClient {
   
     function __construct($wsdl, $options) {
       parent::__construct($wsdl, $options);
       $this->server = new SoapServer($wsdl, $options);
       $this->server->addFunction('Add');
     }
   
     function __doRequest($request, $location, $action, $version, $one_way = 0) {
       ob_start();
       $this->server->handle($request);
       $response = ob_get_contents();
       ob_end_clean();
       return $response;
     }
   
   }
   
   $x = new LocalSoapClient(NULL,array('location'=>'test://', 
                                      'uri'=>'http://testuri.org')); 
   var_dump($x->Add(3,4));
   ?>
   
   


`Documentation <https://www.php.net/manual/en/book.soap.php>`__
