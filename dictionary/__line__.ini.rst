.. _-__line__:
.. meta::
	:description:
		__LINE__: ``__LINE__`` holds the current line number in the current file.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __LINE__
	:twitter:description: __LINE__: ``__LINE__`` holds the current line number in the current file
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __LINE__
	:og:type: article
	:og:description: ``__LINE__`` holds the current line number in the current file
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__line__.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__LINE__","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 21:26:46 +0000","dateModified":"Thu, 19 Feb 2026 21:26:46 +0000","description":"``__LINE__`` holds the current line number in the current file","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__LINE__.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__LINE__
--------

``__LINE__`` holds the current line number in the current file.

The line numbers starts at 1. It is always available.

``__LINE__`` is often used with ``__FILE__``, which holds the file name.

This constant is written in uppercase, by convention. It is case insensitive, and may be used with any combinaison of uppercase and lower case.

.. code-block:: php
   
   <?php
   
       function foo() {
           echo __FILE__.':'.__LINE__; // /tmp/test.php:4
       }
   
   foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.magic.php>`__

Related : :ref:`Magic Constants <magic-constant>`, :ref:`__FILE__ <-__file__>`
