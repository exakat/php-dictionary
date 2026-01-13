.. _void:
.. meta::
	:description:
		Void: Void is a return type.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Void
	:twitter:description: Void: Void is a return type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Void
	:og:type: article
	:og:description: Void is a return type
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/void.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Void","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Void is a return type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Void.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Void
----

Void is a return type. It marks methods which do not return anything. 

Indeed, void methods should not use the return statement, or, when they do, use it without any argument. 

Void is only possible with methods, closures, functions and arrow functions. It makes no sense with properties or parameters.


.. code-block:: php
   
   <?php
   
   function foo() : void {}
   
   ?>


`Documentation <https://www.php.net/manual/en/migration71.new-features.php#migration71.new-features.void-functions>`__

See also `Type Hinting No Return(Void) <https://riptutorial.com/php/example/20542/type-hinting-no-return-void->`_

Related : :ref:`Null <null>`

Added in PHP 7.1
