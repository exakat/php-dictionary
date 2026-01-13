.. _unexpectedvalueexception:
.. meta::
	:description:
		UnexpectedValueException: The UnexpectedValueException exception is thrown if a value does not match with a set of expected values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: UnexpectedValueException
	:twitter:description: UnexpectedValueException: The UnexpectedValueException exception is thrown if a value does not match with a set of expected values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: UnexpectedValueException
	:og:type: article
	:og:description: The UnexpectedValueException exception is thrown if a value does not match with a set of expected values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unexpectedvalueexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"UnexpectedValueException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 27 Jul 2025 19:28:38 +0000","dateModified":"Sun, 27 Jul 2025 19:28:38 +0000","description":"The UnexpectedValueException exception is thrown if a value does not match with a set of expected values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/UnexpectedValueException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


UnexpectedValueException
------------------------

The UnexpectedValueException exception is thrown if a value does not match with a set of expected values.

This happens when the value is not in a list of expected values, or if it is outside an interval of validity.

This exception is mainly thrown by the Phar and SPL extensions.


.. code-block:: php
   
   <?php
   
   function foo(string $s) {
       if (empty($s)) {
          throw new \UnexpectedValueException('Foo() expects a non-empty string');
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.unexpectedvalueexception.php>`__

Related : :ref:`Exception <exception>`, :ref:`Phar <phar>`, :ref:`Standard PHP Library (SPL) <spl>`

Added in PHP 5.1
