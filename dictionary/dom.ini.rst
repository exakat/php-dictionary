.. _dom:
.. _document-object-model:
.. meta::
	:description:
		Document Object Model (DOM): The Document Object Model, also called DOM, is a programming interface for HTML and XML documents.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Document Object Model (DOM)
	:twitter:description: Document Object Model (DOM): The Document Object Model, also called DOM, is a programming interface for HTML and XML documents
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Document Object Model (DOM)
	:og:type: article
	:og:description: The Document Object Model, also called DOM, is a programming interface for HTML and XML documents
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/dom.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Document Object Model (DOM)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"The Document Object Model, also called DOM, is a programming interface for HTML and XML documents","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Document Object Model (DOM).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Document Object Model (DOM)
---------------------------

The Document Object Model, also called DOM, is a programming interface for HTML and XML documents. It represents the document as a tree of nodes that can be traversed, queried, and modified.

PHP provides the ``dom`` extension, which implements the W3C DOM specification via classes such as ``DOMDocument``, ``DOMElement``, ``DOMNode``, ``DOMXPath``, and ``DOMNodeList``.

PHP 8.4 introduced ``Dom\HTMLDocument`` and ``Dom\XMLDocument`` as improved, spec-compliant replacements for the legacy ``DOMDocument``, with better error handling and HTML5 parsing.

.. code-block:: php
   
   <?php
   
       $doc = new DOMDocument();
       $doc->loadHTML('<p class="greeting">Hello, <strong>world</strong></p>');
       
       $xpath = new DOMXPath($doc);
       $nodes = $xpath->query('//p[@class="greeting"]/strong');
       
       foreach ($nodes as $node) {
           echo $node->textContent; // world
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.dom.php>`__

See also `PHP DOM extension <https://www.php.net/manual/en/book.dom.php>`_.

Related : :ref:`Extensible Markup Language (XML) <xml>`, :ref:`HyperText Markup Language (HTML) <html>`, :ref:`DOM <domxml>`, :ref:`SimpleXML <simplexml>`, :ref:`XMLReader <xmlreader>`, :ref:`XMLwriter <xmlwriter>`, :ref:`Javascript <javascript>`, :ref:`DOMChildNode <domchildnode>`, :ref:`DOMParentNode <domparentnode>`, :ref:`Scalable Vector Graphics (SVG) <svg>`
