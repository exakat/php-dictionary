.. _writing:
.. meta::
	:description:
		Writing: Writing is the action to replace a value in a data container with another one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Writing
	:twitter:description: Writing: Writing is the action to replace a value in a data container with another one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Writing
	:og:type: article
	:og:description: Writing is the action to replace a value in a data container with another one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/writing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Writing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"Writing is the action to replace a value in a data container with another one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Writing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Writing
-------

Writing is the action to replace a value in a data container with another one. It does not need to be read. The value is simply changed.

Writing happens when a value is being assigned a new value, used with some operators such as ``++`` or ``--``. 

This operation is usually the counterpart of reading. It may also happen at the same time.

.. code-block:: php
   
   <?php
   
   $x = 1; // writing 1
   
   ++$x; // reading 1 and writing 2 
   
   echo $x; // reading 2
   
   ?>


Related : :ref:`Reading <reading>`
