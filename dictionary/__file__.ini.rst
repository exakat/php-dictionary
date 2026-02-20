.. _-__file__:
.. meta::
	:description:
		__FILE__: ``__FILE__`` holds the current file name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __FILE__
	:twitter:description: __FILE__: ``__FILE__`` holds the current file name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __FILE__
	:og:type: article
	:og:description: ``__FILE__`` holds the current file name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__file__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__FILE__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 21:23:12 +0000","dateModified":"Thu, 19 Feb 2026 21:23:12 +0000","description":"``__FILE__`` holds the current file name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__FILE__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__FILE__
--------

``__FILE__`` holds the current file name.

The file name includes it absolute path (e.g. ``/tmp/path/to/file.txt``). It also uses the file actual case.

When used without a file, aka in command line, ``__FILE__`` contains ``Command line code``.

``__FILE__`` is often used with ``__LINE__``, which holds the line number.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combinaison of uppercase and lower case.

.. code-block:: php
   
   <?php
   
       function foo() {
           echo __FILE__; // /tmp/test.php
       }
   
   foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`Magic Constants <magic-constant>`, :ref:`__LINE__ <-__line__>`
