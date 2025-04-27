.. _new-in-initializer:
.. _new-initializer:
.. meta::
	:description:
		New In Initializers: It is possible to use a new expression for default values of static variables, arguments and properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: New In Initializers
	:twitter:description: New In Initializers: It is possible to use a new expression for default values of static variables, arguments and properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: New In Initializers
	:og:type: article
	:og:description: It is possible to use a new expression for default values of static variables, arguments and properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/new-in-initializer.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"New In Initializers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:47:06 +0000","dateModified":"Fri, 10 Jan 2025 09:47:06 +0000","description":"It is possible to use a new expression for default values of static variables, arguments and properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/New In Initializers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


New In Initializers
-------------------

It is possible to use a new expression for default values of static variables, arguments and properties.

.. code-block:: php
   
   <?php
   
   function headers($a = new B()) : B {
       return $a;
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/new_in_initializers>`__

See also `PHP RFC: New in initializers <https://wiki.php.net/rfc/new_in_initializers>`_

Added in PHP 8.1+
