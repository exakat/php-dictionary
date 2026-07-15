.. _domchildnode:
.. meta::
	:description:
		DOMChildNode: ``DOMChildNode`` is an interface introduced in version 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: DOMChildNode
	:twitter:description: DOMChildNode: ``DOMChildNode`` is an interface introduced in version 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: DOMChildNode
	:og:type: article
	:og:description: ``DOMChildNode`` is an interface introduced in version 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/domchildnode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/domchildnode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/domchildnode.ini.html","name":"DOMChildNode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``DOMChildNode`` is an interface introduced in version 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/DOMChildNode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


DOMChildNode
------------

``DOMChildNode`` is an interface introduced in version 8.0 for DOM nodes that can have siblings. It is implemented by ``DOMElement``, ``DOMText``, ``DOMComment``, ``DOMProcessingInstruction``, and ``DOMDocumentType``.

It provides ``before()`` and ``after()`` to insert nodes adjacent to the current node, ``replaceWith()`` to replace it, and ``remove()`` to detach it from its parent.

.. code-block:: php
   
   <?php
   
       $dom = new DOMDocument;
       $dom->loadHTML('<p>Hello <b>world</b></p>');
       $b = $dom->getElementsByTagName('b')->item(0);
       $b->remove();
   
   ?>


`Documentation <https://www.php.net/manual/en/class.domchildnode.php>`__

See also `DOMChildNode Class <https://www.php.net/manual/en/class.domchildnode.php>`_ and `DOMParentNode Class <https://www.php.net/manual/en/class.domparentnode.php>`_.

Related : :ref:`Document Object Model (DOM) <dom>`, :ref:`Interface <interface>`, :ref:`DOMParentNode <domparentnode>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`SplSubject <splsubject>`

Added in PHP 8.0
