.. _domparentnode:
.. meta::
	:description:
		DOMParentNode: ``DOMParentNode`` is an interface introduced in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DOMParentNode
	:twitter:description: DOMParentNode: ``DOMParentNode`` is an interface introduced in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DOMParentNode
	:og:type: article
	:og:description: ``DOMParentNode`` is an interface introduced in version 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/domparentnode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/domparentnode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/domparentnode.ini.html","name":"DOMParentNode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``DOMParentNode`` is an interface introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DOMParentNode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DOMParentNode
-------------

``DOMParentNode`` is an interface introduced in version 8.0 for DOM nodes that can have children. It is implemented by ``DOMDocument``, ``DOMElement``, and ``DOMDocumentFragment``.

It provides ``prepend()`` and ``append()`` methods to insert nodes as first or last children, and ``childElementCount``, ``firstElementChild``, ``lastElementChild`` properties.

.. code-block:: php
   
   <?php
   
       $dom = new DOMDocument;
       $dom->loadHTML('<p>Hello</p>');
       $p = $dom->getElementsByTagName('p')->item(0);
       $p->append($dom->createTextNode(' world'));
   
   ?>


`Documentation <https://www.php.net/manual/en/class.domparentnode.php>`__

See also `DOMParentNode Class <https://www.php.net/manual/en/class.domparentnode.php>`_ and `DOMChildNode Class <https://www.php.net/manual/en/class.domchildnode.php>`_.

Related : :ref:`Document Object Model (DOM) <dom>`, :ref:`Interface <interface>`, :ref:`DOMChildNode <domchildnode>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`SplSubject <splsubject>`

Added in PHP 8.0
