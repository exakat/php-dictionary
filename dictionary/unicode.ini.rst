.. _unicode:
.. meta::
	:description:
		Unicode: Unicode is a standard to represent text.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unicode
	:twitter:description: Unicode: Unicode is a standard to represent text
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unicode
	:og:type: article
	:og:description: Unicode is a standard to represent text
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unicode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Unicode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Unicode is a standard to represent text","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Unicode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Unicode
-------

Unicode is a standard to represent text. It is maintained by the Unicode Consortium. Unicode provides a widespread standard for characters. It is used everywhere, from computer to phones, online and offline.

Unicode motto : 'Everyone in the world should be able to use their own language on phones and computers.'

PHP supports unicode in its syntax with the declare() `encoding` option. 

PHP may translate from and to Unicode to other character sets with extensions such as iconv, intl, mbstring. 


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


`Documentation <https://home.unicode.org/>`__

Related : :ref:`SimpleXML <simplexml>`, :ref:`DOM <domxml>`, :ref:`XMLwriter <xmlwriter>`, :ref:`XMLReader <xmlreader>`
