.. _domxml:
.. meta::
	:description:
		DOM: The DOM extension in PHP is an extension that allows developers to work with XML documents using the Document Object Model (DOM) API.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DOM
	:twitter:description: DOM: The DOM extension in PHP is an extension that allows developers to work with XML documents using the Document Object Model (DOM) API
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DOM
	:og:type: article
	:og:description: The DOM extension in PHP is an extension that allows developers to work with XML documents using the Document Object Model (DOM) API
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/domxml.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"DOM","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:37 +0000","dateModified":"Mon, 26 Jan 2026 11:11:37 +0000","description":"The DOM extension in PHP is an extension that allows developers to work with XML documents using the Document Object Model (DOM) API","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DOM.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DOM
---

The DOM extension in PHP is an extension that allows developers to work with XML documents using the Document Object Model (DOM) API. It provides a set of classes and functions to parse, manipulate, and generate XML documents.

The DOM extension provides a tree-based representation of an XML document, where each element, attribute, and text node is represented as an object. This allows developers to traverse and manipulate the XML document easily.

.. code-block:: php
   
   <?php
   
   // from PHP manual : https://www.php.net/manual/en/class.domcomment.php
   
      $xml = new DOMDocument();
       $xml->loadXML('<?xml version=\1.0\ encoding=\utf-8\?>
         <configuration version=\2\>
         <!-- test &#45;&#45;&gt; -->
         test &#45;&#45;&gt;
         </configuration>'
       );
   $xpath = new DOMXPath($xml);
   $comments = $xpath->query('//comment()');
   $elements = $xpath->query('//configuration');
   
   echo $comments[0]->textContent;
   // result: test &#45;&#45;&gt;
   
   echo $elements[0]->textContent;
   // result: test -->
   
   ?>


`Documentation <https://www.php.net/manual/en/book.dom.php>`__

See also https://www.bitdegree.org/learn/php-domdocument

Related : :ref:`Extensible Markup Language (XML) <xml>`, :ref:`SimpleXML <simplexml>`, :ref:`XMLReader <xmlreader>`, :ref:`XMLwriter <xmlwriter>`, :ref:`Unicode <unicode>`
