.. _nowdoc:
.. meta::
	:description:
		Nowdocs: Nowdocs is a string syntax, similar to heredoc, and without internal parsing.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Nowdocs
	:twitter:description: Nowdocs: Nowdocs is a string syntax, similar to heredoc, and without internal parsing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Nowdocs
	:og:type: article
	:og:description: Nowdocs is a string syntax, similar to heredoc, and without internal parsing
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/nowdoc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Nowdocs","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"Nowdocs is a string syntax, similar to heredoc, and without internal parsing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Nowdocs.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Nowdocs
-------

Nowdocs is a string syntax, similar to heredoc, and without internal parsing. They are similar to single quoted strings, compared to double quoted ones.

The Nowdocs syntax uses an arbitrary delimiter, which has to be enclosed in single quotes. The same delimiter will mark the end of the string.

Nowdocs are convenient for large amount of text, that has to be hardcoded. Smaller string will be better suited with single-quotes, while even longer text should be stored in an external storage, such as a file.

It is possible to indent the text in a nowdocs string: to avoid this indentation to be passed at execution time, the final delimiter may be indented too. Its indentation will be removed from the parsed text.

.. code-block:: php
   
   <?php
   
   $nowdoc = <<<'DELIM'
   This is a long text.
   
   $variable will not be replaced, and the text stays intact.
   
   DELIM;
   
   $nowdoc = <<<'DELIM'
           This still will start at the first word, not at the beginning of the string.
           DELIM;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php#language.types.string.syntax.nowdoc>`__

Related : :ref:`Heredocs <heredoc>`, :ref:`String <string>`

Added in PHP 5.5
