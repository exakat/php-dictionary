.. _indentation:
.. _indenting:
.. meta::
	:description:
		Indentation: Indentation is a convention governing the indentation of blocks of code to convey program structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Indentation
	:twitter:description: Indentation: Indentation is a convention governing the indentation of blocks of code to convey program structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Indentation
	:og:type: article
	:og:description: Indentation is a convention governing the indentation of blocks of code to convey program structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/indentation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Indentation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Indentation is a convention governing the indentation of blocks of code to convey program structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Indentation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Indentation
-----------

Indentation is a convention governing the indentation of blocks of code to convey program structure.

.. code-block:: php
   
   <?php
   
   function headers() : never {
       // expected indentation
       headers('Location: https://www.exakat.io/');
   
   // badly indented block
   die();
   }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Indentation_style>`__
