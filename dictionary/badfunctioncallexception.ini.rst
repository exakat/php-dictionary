.. _badfunctioncallexception:
.. meta::
	:description:
		BadFunctioncallException: The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: BadFunctioncallException
	:twitter:description: BadFunctioncallException: The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: BadFunctioncallException
	:og:type: article
	:og:description: The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/badfunctioncallexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"BadFunctioncallException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/BadFunctioncallException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


BadFunctioncallException
------------------------

The ``BadFunctioncallException`` exception is thrown if callback refers to an undefined function or if some arguments are missing.

``BadFunctioncallException`` are defined by the SPL extension. It is not natively used. 

.. code-block:: php
   
   <?php
   
   function foo(string $s) {
       if (empty($s)) {
          throw new \UnexpectedValueException('Foo() expects a non-empty string');
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.lengthexception.php>`__

Related : :ref:`Exception <exception>`

Added in PHP 5.1
