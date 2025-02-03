.. _heredoc:
.. meta::
	:description:
		Heredocs: Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Heredocs
	:twitter:description: Heredocs: Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Heredocs
	:og:type: article
	:og:description: Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/heredoc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Heredocs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 23 Jan 2025 14:24:26 +0000","dateModified":"Thu, 23 Jan 2025 14:24:26 +0000","description":"Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Heredocs.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Heredocs
--------

Heredoc is a string syntax, similar to nowdoc, with internal variable interpolation. They behave like double quoted strings.

The Heredocs syntax uses an arbitrary delimiter. The same delimiter will mark the end of the string.

Heredocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with double quotes, while even longer text should be processed with a templating system.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.


.. code-block:: php
   
   <?php
   
   $heredoc = <<<DELIM
   This is a long text.
   
   $variable will not be replaced, and the text stays intact.
   
   DELIM;
   
   $heredoc = <<<DELIM
       This is an indented text.
       DELIM;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.heredoc>`__

Related : :ref:`Nowdocs <nowdoc>`, :ref:`String <string>`

Added in PHP 5.5
