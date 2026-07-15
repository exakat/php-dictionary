.. _-__dir__:
.. meta::
	:description:
		__DIR__: ``__DIR__`` holds the directory of the current file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __DIR__
	:twitter:description: __DIR__: ``__DIR__`` holds the directory of the current file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __DIR__
	:og:type: article
	:og:description: ``__DIR__`` holds the directory of the current file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__dir__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__dir__.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__dir__.ini.html","name":"__DIR__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:12:46 +0000","dateModified":"Sun, 12 Jul 2026 20:12:46 +0000","description":"``__DIR__`` holds the directory of the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__DIR__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__DIR__
-------

``__DIR__`` holds the directory of the current file.

It is equivalent to ``dirname(__FILE__)``. The directory name does not have a trailing slash unless it is the root directory.

When used inside an include, the directory of the included file is returned.

This constant is case insensitive, and may be used with any combination of uppercase and lowercase.

.. code-block:: php
   
   <?php
   
       // Assume file is at /var/www/html/index.php
       echo __DIR__; // /var/www/html
   
       // Useful for requiring files relative to current script
       require __DIR__ . '/config.php';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`Magic Constants <magic-constant>`, :ref:`__FILE__ <-__file__>`, :ref:`__LINE__ <-__line__>`, :ref:`dirname <dirname>`, :ref:`Special Constant <special-constant>`
