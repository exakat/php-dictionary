.. _authenticate:
.. meta::
	:description:
		Authenticate: Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Authenticate
	:twitter:description: Authenticate: Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Authenticate
	:og:type: article
	:og:description: Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/authenticate.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Authenticate","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Authenticate.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Authenticate
------------

Functions declared with void as their return type must either omit their return statement altogether, or use an empty return statement. null is not a valid return value for a void function. 

Void function may throw exceptions or return without a parameter.

Null and void are two different notions. 


.. code-block:: php
   
   <?php
   
   function foo(&$a) : void {
       $a++;
       
       // No return used here
   }
   
   $b = 0;
   foo($b);
   
   ?>


`Documentation <https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions>`__

Related : :ref:`Null <null>`

Added in PHP 8.0
