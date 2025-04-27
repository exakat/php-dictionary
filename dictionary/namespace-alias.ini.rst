.. _namespace-alias:
.. meta::
	:description:
		Namespace Alias: PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespace Alias
	:twitter:description: Namespace Alias: PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Namespace Alias
	:og:type: article
	:og:description: PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/namespace-alias.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Namespace Alias","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Namespace Alias.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Namespace Alias
---------------

PHP can alias, or import, constants, functions, classes, interfaces, traits, enumerations and namespaces. 

This makes the code shorter, as the imported structure can be called with its alias name, instead of the fully qualified name. 

Aliasing solves naming conflicts, by giving another local name to any structure. 


.. code-block:: php
   
   <?php
   
   namespace a {
       class x {
       }
   }
   
   namespace b {
       use a\x as aX;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

Related : :ref:`Use Alias <use-alias>`

Added in PHP 5.3
