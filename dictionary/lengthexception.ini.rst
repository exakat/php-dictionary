.. _lengthexception:
.. meta::
	:description:
		LengthException: The LengthException exception is thrown if a length is invalid.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: LengthException
	:twitter:description: LengthException: The LengthException exception is thrown if a length is invalid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: LengthException
	:og:type: article
	:og:description: The LengthException exception is thrown if a length is invalid
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/lengthexception.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"LengthException","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The LengthException exception is thrown if a length is invalid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/LengthException.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


LengthException
---------------

The LengthException exception is thrown if a length is invalid.

LengthException are defined by the SPL extension. It is not natively used. 

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
