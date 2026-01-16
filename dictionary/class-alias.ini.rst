.. _class-alias:
.. meta::
	:description:
		Class Aliases: It is possible to make an alias of a class and call it with this new name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class Aliases
	:twitter:description: Class Aliases: It is possible to make an alias of a class and call it with this new name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Class Aliases
	:og:type: article
	:og:description: It is possible to make an alias of a class and call it with this new name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-alias.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Class Aliases","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"It is possible to make an alias of a class and call it with this new name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Class Aliases.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Class Aliases
-------------

It is possible to make an alias of a class and call it with this new name. It either rely on the `use` expression, preferable at the beginning of the namespace, or the class_alias() function, for dynamic and application-wide aliases. 

`use` expressions are valid only in one file, while class_alias() impacts the whole application, once it is called. class_alias() may also be used with dynamic elements, such as variables.

.. code-block:: php
   
   <?php
   
   use a as b;
   
   class_alias('a', 'c');
   
   class a {
       function __construct() {
           print __CLASS__;
       }
   }
   
   new a;
   new b;
   new c;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

See also https://php.watch/versions/8.3/class_alias-php-built-in-classes-supported, https://alanastorm.com/php_magic_methods_and_class_aliases/, https://dev.to/greg0ire/how-to-deprecate-a-type-in-php-48cf /

Related : :ref:`Use <use>`
