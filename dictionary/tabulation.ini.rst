.. _tabulation:
.. meta::
	:description:
		Tabulation: A tabulation is a whitespace character, that often represents the equivalent of four spaces characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Tabulation
	:twitter:description: Tabulation: A tabulation is a whitespace character, that often represents the equivalent of four spaces characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Tabulation
	:og:type: article
	:og:description: A tabulation is a whitespace character, that often represents the equivalent of four spaces characters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/tabulation.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Tabulation","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 16 Mar 2026 14:46:29 +0000","dateModified":"Mon, 16 Mar 2026 14:46:29 +0000","description":"A tabulation is a whitespace character, that often represents the equivalent of four spaces characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Tabulation.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Tabulation
----------

A tabulation is a whitespace character, that often represents the equivalent of four spaces characters.

A tabulation is represented by the escape sequence ``\t``, in double quote strings. It is also the ASCII code 9.

Tabulations are important when formatting code, and are opposed to spaces. 

Tabulations are important for heredoc syntax, in particular in its relaxed syntax.

There are horizontal tabulations, which are the most commonly used, and vertical tabulation, with the ASCII code 11 and sequence ``\v``.

.. code-block:: php
   
   <?php
   
       echo "\t";
       echo chr(9); // ASCII code 9
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Tab_character>`__

See also https://mojoauth.com/special-characters/vertical-tab-v-in-php#understanding-the-usage-of-vertical-tab-v-in-php

Related : :ref:`Space <space>`, :ref:`Heredocs <heredoc>`
