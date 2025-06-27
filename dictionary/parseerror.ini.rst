.. _parseerror:
.. meta::
	:description:
		ParseError: A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ParseError
	:twitter:description: ParseError: A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ParseError
	:og:type: article
	:og:description: A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parseerror.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"ParseError","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 26 Jun 2025 05:09:38 +0000","dateModified":"Thu, 26 Jun 2025 05:09:38 +0000","description":"A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ParseError.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ParseError
----------

A ParseError is thrown when an error occurs while parsing PHP code, such as when eval() is called or when including non-compilable code. 

.. code-block:: php
   
   <?php
   
   try {
   	eval (' A A ');
   } catch (ParseError $e) {
   	echo "This is not PHP code";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.parseerror.php>`__

See also https://www.ionos.com/help/hosting/troubleshooting-for-php/what-is-a-parse-error/, https://php-errors.readthedocs.io/en/latest/syntaxerror.html

Related : :ref:`Error <error>`, :ref:`Eval() <eval>`

Added in PHP 7.0+
