.. _indentation:
.. _indenting:
.. meta::
	:description:
		Indentation: Indentation is a convention governing the layout of blocks of code to convey program structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Indentation
	:twitter:description: Indentation: Indentation is a convention governing the layout of blocks of code to convey program structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Indentation
	:og:type: article
	:og:description: Indentation is a convention governing the layout of blocks of code to convey program structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/indentation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Indentation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 19 Jan 2026 14:11:17 +0000","dateModified":"Mon, 19 Jan 2026 14:11:17 +0000","description":"Indentation is a convention governing the layout of blocks of code to convey program structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Indentation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Indentation
-----------

Indentation is a convention governing the layout of blocks of code to convey program structure.

For example, the body of code in a function should be indented one unit to the right, vis-a-vis the function keyword. 

Indentation may be done with spaces (2, 3, 4 or 5), or horizontal tabulations.

Indentation is part of the syntax of the heredoc strings.

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

Related : :ref:`Heredocs <heredoc>`, :ref:`Tabulation <tabulation>`, :ref:`Space <space>`
