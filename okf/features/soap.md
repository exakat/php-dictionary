---
type: "acronym"
title: "Simple Object Access Protocol (SOAP)"
description: "``SOAP`` is the acronym for Simple Object Access Protocol."
resource: "https://www.php.net/manual/en/book.soap.php"
tags: ["api", "acronym"]
generated:
  by: "analyzeG3/scripts/makeKnowledgeGraph"
  at: "2026-08-30T10:00:00+00:00"
---

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

## Documentation
- [https://www.php.net/manual/en/book.soap.php](https://www.php.net/manual/en/book.soap.php)

## See Also
- [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

## Related
- [Extensible Markup Language (XML)](/features/xml.md)
- [Application Programming Interface (API)](/features/api.md)

## Details
- Packagist: [phpro/soap-client](https://packagist.org/packages/phpro/soap-client)
- Packagist: [ricorocks-digital-agency/soap](https://packagist.org/packages/ricorocks-digital-agency/soap)
- Packagist: [laminas/laminas-soap](https://packagist.org/packages/laminas/laminas-soap)
- Extension: ext-soap

