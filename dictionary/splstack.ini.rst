.. _splstack:
.. meta::
	:description:
		SplStack: The SplStack class is part of the Standard PHP Library, SPL.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplStack
	:twitter:description: SplStack: The SplStack class is part of the Standard PHP Library, SPL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplStack
	:og:type: article
	:og:description: The SplStack class is part of the Standard PHP Library, SPL
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splstack.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SplStack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Mar 2026 19:35:01 +0000","dateModified":"Wed, 25 Mar 2026 19:35:01 +0000","description":"The SplStack class is part of the Standard PHP Library, SPL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplStack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplStack
--------

The SplStack class is part of the Standard PHP Library, SPL. It provides a stack data structure, Last‑In, First‑Out or LIFO, by extending SplDoublyLinkedList and setting the iteration mode to treat the list as a stack.

.. code-block:: php
   
   <?php
   
   $q = new SplStack();
   $q[] = 1;
   $q[] = 2;
   $q[] = 3;
   foreach ($q as $elem)  {
    echo $elem.\n;
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.splstack.php>`__

Related : :ref:`SplDoublyLinkedList <spldoublylinkedlist>`, :ref:`Last In, First Out (LIFO) <lifo>`
