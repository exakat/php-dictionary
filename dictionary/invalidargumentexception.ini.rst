.. _invalidargumentexception:
.. meta::
	:description:
		InvalidArgumentException: Exception thrown if an argument is not of the expected type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: InvalidArgumentException
	:twitter:description: InvalidArgumentException: Exception thrown if an argument is not of the expected type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: InvalidArgumentException
	:og:type: article
	:og:description: Exception thrown if an argument is not of the expected type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/invalidargumentexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"InvalidArgumentException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Exception thrown if an argument is not of the expected type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/InvalidArgumentException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


InvalidArgumentException
------------------------

Exception thrown if an argument is not of the expected type. It is a LogicException, and it may be thrown when using SPL classes.

.. code-block:: php
   
   <?php
   
   function foo(string $a) {}
   
   // OK
   foo("abc");
   
   // KO : invalid argument
   foo(12);
   
   ?>


`Documentation <https://www.php.net/manual/en/class.invalidargumentexception.php>`__

Related : :ref:`LogicException <logicexception>`
