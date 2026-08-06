# Simple Object Access Protocol (SOAP)
``SOAP`` is the acronym for Simple Object Access Protocol. It is a messaging protocol to exchange structure data, based on XML.

PHP supports SOAP with a native extension called ``ext/soap``.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/soap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/soap.html","name":"Simple Object Access Protocol (SOAP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 19:57:28 +0000","dateModified":"Sun, 21 Jun 2026 19:57:28 +0000","description":"``SOAP`` is the acronym for Simple Object Access Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Simple Object Access Protocol (SOAP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
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

**[Documentation](https://www.php.net/manual/en/book.soap.php)**
## See Also

+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related

+ [Extensible Markup Language (XML)](xml.ini.html)
+ [Application Programming Interface (API)](api.ini.html)

## Related packages

+ [phpro/soap-client](https://packagist.org/packages/phpro/soap-client)
+ [ricorocks-digital-agency/soap](https://packagist.org/packages/ricorocks-digital-agency/soap)
+ [laminas/laminas-soap](https://packagist.org/packages/laminas/laminas-soap)
