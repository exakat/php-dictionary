.. _keyword:
.. _php-keyword:
.. meta::
	:description:
		Keyword: PHP has a list of keywords, which are also called reserved words.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Keyword
	:twitter:description: Keyword: PHP has a list of keywords, which are also called reserved words
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Keyword
	:og:type: article
	:og:description: PHP has a list of keywords, which are also called reserved words
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/keyword.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Keyword","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:35 +0000","dateModified":"Mon, 19 Jan 2026 14:11:35 +0000","description":"PHP has a list of keywords, which are also called reserved words","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Keyword.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Keyword
-------

PHP has a list of keywords, which are also called reserved words. Those are names used with some functions or operators. 

Keywords are not allowed in function, constant, class, interface, enum and trait names. They are allowed in method, properties, variables and class constant names.

While legit, it is usually recommended to avoid using PHP keywords as identifiers, so as to prevent confusion.

.. code-block:: php
   
   <?php
   
   class MyNamespace {
   	function array() {
   		return array();
   	}
   }
   
   print_r((new myNamespace)->array());
   
   class X {
       const array ARRAY = array(); // possible confusion here
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.keywords.php>`__
