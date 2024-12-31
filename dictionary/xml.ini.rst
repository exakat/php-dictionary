.. _xml:
.. meta::
	:description:
		XML: XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: XML
	:twitter:description: XML: XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use
	:twitter:creator: @exakat
	:og:title: XML
	:og:type: article
	:og:description: XML (Extensible Markup Language) is a markup language similar to HTML, but without predefined tags to use
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/xml.ini.html
	:og:locale: en


XML
---

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
