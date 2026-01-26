.. _datastack:
.. meta::
	:description:
		Datastack: A data stack is a LIFO data structure: the last data added to the stack is the first to get out.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Datastack
	:twitter:description: Datastack: A data stack is a LIFO data structure: the last data added to the stack is the first to get out
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Datastack
	:og:type: article
	:og:description: A data stack is a LIFO data structure: the last data added to the stack is the first to get out
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/datastack.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Datastack","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 11:11:31 +0000","dateModified":"Mon, 26 Jan 2026 11:11:31 +0000","description":"A data stack is a LIFO data structure: the last data added to the stack is the first to get out","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Datastack.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Datastack
---------

A data stack is a LIFO data structure: the last data added to the stack is the first to get out.

In PHP, a data stack may be implemented with an array, and the ``array_push()`` (or ``$array[]`` operator) and the ``array_pop()`` functions. 

There is also a class called ``SplStack``, in the ``spl`` extension, and ``Ds\Stack`` in the ``ds`` extension.

.. code-block:: php
   
   <?php
   
   $stack = [];
   $stack[] = first;
   $stack[] = second;
   // same as array_push($stack, second);
   
   echo array_pop($stack); // Outputs: second
   
   ?>


Related : , , :ref:`Standard PHP Library (SPL) <spl>`
