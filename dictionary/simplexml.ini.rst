.. _simplexml:
.. meta::
	:description:
		SimpleXML: The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SimpleXML
	:twitter:description: SimpleXML: The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SimpleXML
	:og:type: article
	:og:description: The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/simplexml.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"SimpleXML","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SimpleXML.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SimpleXML
---------

The SimpleXML extension provides a very simple and easily usable toolset to convert XML to an object that can be processed with normal property selectors and array iterators.

.. code-block:: php
   
   <?php
   $books = new SimpleXMLElement('<?xml version="1.0"?>
   <books>
   <book>
   <title>Les miserables</title>
   <genre>Novel</genre>
   </book>
   <book>
   <title>The old man and the sea</title>
   <genre>Novel</genre>
   </book>
   <book>
   <title>The journey to the west</title>
   <genre>Epic</genre>
   </book>
   </books>');
   
   echo $movies->books[0]->title;
   ?>


`Documentation <https://www.php.net/manual/en/book.simplexml.php>`__

Related : :ref:`XMLwriter <xmlwriter>`, :ref:`XMLReader <xmlreader>`, :ref:`Extensible Markup Language (XML) <xml>`, :ref:`Unicode <unicode>`

Added in PHP 5.0+
