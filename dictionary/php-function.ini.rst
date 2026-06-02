.. _php-function:
.. meta::
	:description:
		PHP Native Function: PHP defines its own native functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: PHP Native Function
	:twitter:description: PHP Native Function: PHP defines its own native functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: PHP Native Function
	:og:type: article
	:og:description: PHP defines its own native functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/php-function.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"PHP Native Function","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"PHP defines its own native functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/PHP Native Function.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


PHP Native Function
-------------------

PHP defines its own native functions. They are part of the core extensions, which are always compiled, or extensions. 

PHP native function do not have a definition available, unlike component or custom functions. They are handled by the PHP engine, and documented.

For example, ``strlen`` is a PHP native function, which measures the length of a string, in bytes. There are a lot of PHP functions available.

PHP native interfaces may be disabled at startup, with the ``disabled_functions`` directive.

It is possible to reach PHP native function definitions on the php.net website by adding their name in the URL. For example: ``https://www.php.net/strlen``.


.. code-block:: php
   
   <?php
   
       print_r(get_defined_functions());
   
   ?>


`Documentation <https://www.php.net/manual/en/language.functions.php>`__

See also `PHP Safari: see how they are used in the wild <https://php-safari.com/>`_ and `php.net/strlen <https://www.php.net/strlen>`_.

Related : :ref:`Functions <function>`, :ref:`Custom Function <custom-function>`
