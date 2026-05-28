.. _space:
.. meta::
	:description:
		Space: Space is the `` `` character: it is an invisible character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Space
	:twitter:description: Space: Space is the `` `` character: it is an invisible character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Space
	:og:type: article
	:og:description: Space is the `` `` character: it is an invisible character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/space.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Space","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"Space is the `` `` character: it is an invisible character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Space.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Space
-----

Space is the `` `` character: it is an invisible character. It serves as a separator between tokens, and is mostly unused by PHP execution engine.

Space is part of a class of invisible characters, called whitespaces, along with new line ``\n``, carriage return ``\r``, line feed ``\f`` and horizontal tabulation ``\t``.

Spaces inside PHP code usually carry no value but to separate visually elements in the code. They are sometimes important, as in designing floats, or not important, with some operators, ``$a []= 1`` is actually the same as ``$a[] = 1`` or ``$a [ ] = 1``.

Spaces outside the PHP tags are important, as they are delivered as is to the client. Any white space set before the opening ``<?php`` PHP tag may be send before PHP code is executed, leading to the infamous ``Cannot modify header information - headers already sent``


.. code-block:: php
   
   <?php
   
       // space is mostly ignored in PHP code
       $string = ' a ';
       // space is important inside literal, such as strings
       
       echo 1 . 2; // here, space is important
       echo 1.2; // here, space is important
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Whitespace_character>`__

See also `Spaces in a PHP file. Unexpected output <https://designdebt.club/spaces-in-a-php-file/>`_.

Related : :ref:`Heredocs <heredoc>`, :ref:`Indentation <indentation>`, :ref:`Non Breakable Spaces <non-breakable-space>`, :ref:`Nowdocs <nowdoc>`, :ref:`Tabulation <tabulation>`
