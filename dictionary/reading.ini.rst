.. _reading:
.. meta::
	:description:
		Reading: Reading is the action to access a value in a data container, to make use of it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reading
	:twitter:description: Reading: Reading is the action to access a value in a data container, to make use of it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reading
	:og:type: article
	:og:description: Reading is the action to access a value in a data container, to make use of it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reading.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Reading","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 15:14:39 +0000","dateModified":"Tue, 28 Jan 2025 15:14:39 +0000","description":"Reading is the action to access a value in a data container, to make use of it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Reading.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Reading
-------

Reading is the action to access a value in a data container, to make use of it. The value is simply accessed, not changed.

Reading happens when a value is passed as an argument, used as an operand with an operator, or assigned to another variable.

This operation is usually the counterpart of writing. It may also happen at the same time.

.. code-block:: php
   
   <?php
   
   $x = 1;
   
   echo $x; // reading 1
   
   ?>


Related : :ref:`Writing <writing>`
