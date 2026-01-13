.. _class_alias:
.. meta::
	:description:
		class_alias(): The ``class_alias()`` function creates an alias for a class, interface, enum or trait.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: class_alias()
	:twitter:description: class_alias(): The ``class_alias()`` function creates an alias for a class, interface, enum or trait
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: class_alias()
	:og:type: article
	:og:description: The ``class_alias()`` function creates an alias for a class, interface, enum or trait
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class_alias.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"class_alias()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"The ``class_alias()`` function creates an alias for a class, interface, enum or trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/class_alias().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


class_alias()
-------------

The ``class_alias()`` function creates an alias for a class, interface, enum or trait. Then, the alias may be used in place of the original name anywhere in the application, including in ``use`` expressions. 

In PHP 8.3, class_alias() supports the creation of aliases with native PHP classes. 

class_alias() is also usable on interfaces, enumerations and traits. 

Once created, the objects are of the original class. The alias name doesn't stick to the objects, and it is not possible to know if the object was created as an alias or the original class. The alias may be used with types. 


.. code-block:: php
   
   <?php
   
   class_alias(stdClass::class, StandardClass::class);
   
   $object = new StandardClass();
   
   // stdClass
   print gettype($object);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.class-alias.php>`__

See also `PHP: Using class_alias to maintain BC while moving/renaming classes <https://www.schmengler-se.de/en/2016/09/php-using-class_alias-to-maintain-bc-while-move-rename-classes/>`_

Related : :ref:`Use <use>`
