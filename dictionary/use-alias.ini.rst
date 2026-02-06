.. _use-alias:
.. meta::
	:description:
		Use Alias: The ``use`` operator can create aliases for a class, function or constant.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use Alias
	:twitter:description: Use Alias: The ``use`` operator can create aliases for a class, function or constant
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Use Alias
	:og:type: article
	:og:description: The ``use`` operator can create aliases for a class, function or constant
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/use-alias.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/Attempt to unset static property %s::$%s.html","name":"Use Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 16:59:02 +0000","dateModified":"Mon, 26 Jan 2026 16:59:02 +0000","description":"The ``use`` operator can create aliases for a class, function or constant","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Use Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Use Alias
---------

The ``use`` operator can create aliases for a class, function or constant. After the declaration of the alias, it is possible to use the original class with the alias name. 

With PHP fallback mechanism, it is possible to declare locally a function with the name of a native PHP function. This is useful to mock such functions.

.. code-block:: php
   
   <?php
   
   use A as B;
   use const C as D;
   use function foo as strtlower; // very confusing
   
   
   class A {}
   
   new A;
   new B;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

Related : :ref:`Alias <alias>`, :ref:`As <as>`, :ref:`Namespace Alias <namespace-alias>`, :ref:`Namespaces <namespace>`, :ref:`Use <use>`, :ref:`Mock <mock>`
