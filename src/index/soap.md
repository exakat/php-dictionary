# Simple Object Access Protocol (SOAP)
``SOAP`` is the acronym for Simple Object Access Protocol. It is a messaging protocol to exchange structure data, based on XML.

PHP supports SOAP with a native extension called ``ext/soap``.
<script type="application/ld+json">{"@context":["https:\/\/schema.org",{"skos":"http:\/\/www.w3.org\/2004\/02\/skos\/core#"}],"@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soap.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soap.html","name":"Simple Object Access Protocol (SOAP)","inDefinedTermSet":{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary"},"isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 21 Jun 2026 19:57:28 +0000","dateModified":"Sun, 21 Jun 2026 19:57:28 +0000","description":"SOAP is the acronym for Simple Object Access Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/soap.html"]}],"keywords":["api","acronym"],"skos:related":[{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/xml.html"},{"@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/api.html"}],"citation":[{"@type":"CreativeWork","name":"Documentation","url":"https:\/\/www.php.net\/manual\/en\/book.soap.php"},{"@type":"CreativeWork","name":"The Quiet Shift Reshaping PHP Security","url":"https:\/\/www.linkedin.com\/pulse\/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc\/"}]},{"@type":"DefinedTermSet","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html#dictionary","name":"The PHP Dictionary","alternateName":"PHP Dictionary","description":"A dictionary of PHP terms, keywords, functions, concepts and jargon.","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html","inLanguage":"en","version":"1.1.28","creator":{"@type":"Organization","name":"Exakat","url":"https:\/\/www.exakat.io\/"}},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"},{"@type":"BreadcrumbList","itemListElement":[{"@type":"ListItem","position":1,"name":"The PHP Dictionary","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index.html"},{"@type":"ListItem","position":2,"name":"Index","item":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/index\/index.html"},{"@type":"ListItem","position":3,"name":"soap"}]}]}</script>
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

+ [Extensible Markup Language (XML)](xml.html)
+ [Application Programming Interface (API)](api.html)

## Related packages

+ [phpro/soap-client](https://packagist.org/packages/phpro/soap-client)
+ [ricorocks-digital-agency/soap](https://packagist.org/packages/ricorocks-digital-agency/soap)
+ [laminas/laminas-soap](https://packagist.org/packages/laminas/laminas-soap)
