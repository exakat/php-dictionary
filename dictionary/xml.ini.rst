.. _xml:
.. meta::
	:description:
		Extensible Markup Language (XML): XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Extensible Markup Language (XML)
	:twitter:description: Extensible Markup Language (XML): XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Extensible Markup Language (XML)
	:og:type: article
	:og:description: XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/xml.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Extensible Markup Language (XML)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 14 Feb 2025 22:15:31 +0000","dateModified":"Fri, 14 Feb 2025 22:15:31 +0000","description":"XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Extensible Markup Language (XML).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Extensible Markup Language (XML)
--------------------------------

XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use.

PHP offers several set of functions to handle XML : ``domxml``, ``simplexml``, ``xmlreader``, ``xmlwriter``.



.. code-block:: php
   
   <?php
   $string = <<<XML
   <?xml version='1.0'?>
   <document>
       <cmd>login</cmd>
       <login>Richard</login>
   </document>
   XML;
   
   $xml = simplexml_load_string($string);
   print_r($xml);
   
   ?>


`Documentation <https://www.php.net/manual/en/refs.xml.php>`__

See also `PHP XML Tutorial: Create, Parse, Read with Example <https://www.guru99.com/php-and-xml.html>`_

Related : :ref:`SimpleXML <simplexml>`, :ref:`DOM <domxml>`, :ref:`XMLwriter <xmlwriter>`, :ref:`XMLReader <xmlreader>`

Related packages : `symfony/dom-crawler <https://packagist.org/packages/symfony/dom-crawler>`_, `spatie/array-to-xml <https://packagist.org/packages/spatie/array-to-xml>`_, `robrichards/xmlseclibs <https://packagist.org/packages/robrichards/xmlseclibs>`_, `sabre/xml <https://packagist.org/packages/sabre/xml>`_
