.. _soap:
.. meta::
	:description:
		Simple Object Access Protocol (SOAP): ``SOAP`` is an acronym for Simple Object Access Protocol.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Simple Object Access Protocol (SOAP)
	:twitter:description: Simple Object Access Protocol (SOAP): ``SOAP`` is an acronym for Simple Object Access Protocol
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Simple Object Access Protocol (SOAP)
	:og:type: article
	:og:description: ``SOAP`` is an acronym for Simple Object Access Protocol
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/soap.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/The backtick (`) operator is deprecated, use shell_exec() instead.html","name":"Simple Object Access Protocol (SOAP)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 24 Jan 2026 12:35:11 +0000","dateModified":"Sat, 24 Jan 2026 12:35:11 +0000","description":"``SOAP`` is an acronym for Simple Object Access Protocol","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Simple Object Access Protocol (SOAP).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Simple Object Access Protocol (SOAP)
------------------------------------

``SOAP`` is an acronym for Simple Object Access Protocol. It is a messaging protocol to exchange structure data, based on XML.

PHP supports SOAP with a native extension called ``ext/soap``.

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
                                       'uri'=>'http://testuri.org',
                                       )); 
   var_dump($x->Add(3,4));
   ?>


`Documentation <https://www.php.net/manual/en/book.soap.php>`__

Related packages : `phpro/soap-client <https://packagist.org/packages/phpro/soap-client>`_, `ricorocks-digital-agency/soap <https://packagist.org/packages/ricorocks-digital-agency/soap>`_, `laminas/laminas-soap <https://packagist.org/packages/laminas/laminas-soap>`_
