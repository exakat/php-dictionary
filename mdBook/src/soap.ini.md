# Simple Object Access Protocol (SOAP)
``SOAP`` is the acronym for Simple Object Access Protocol. It is a messaging protocol to exchange structure data, based on XML.

PHP supports SOAP with a native extension called ``ext/soap``.
```php
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

    $x = new LocalSoapClient(NULL,
                             ['location'=>'test://', 
                              'uri'=>'http://testuri.org',
                             ],
                            ); 
    var_dump($x->Add(3,4));

?>
```

## See Also

+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

Related : [Extensible Markup Language (XML)](Extensible Markup Language (XML)), [Application Programming Interface (API)](Application Programming Interface (API))
