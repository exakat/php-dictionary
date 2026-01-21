.. _space:
.. meta::
	:description:
		Space: Space is the `` `` (invisible) character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Space
	:twitter:description: Space: Space is the `` `` (invisible) character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Space
	:og:type: article
	:og:description: Space is the `` `` (invisible) character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/space.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Space","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"Space is the `` `` (invisible) character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Space.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Space
-----

Space is the `` `` (invisible) character. It serves as a separator between tokens, and is mostly unused by PHP execution engine.

Space is part of a class of invisible characters, called whitespaces, along with new line ``\n``, carriage return ``\r``, line feed ``\f`` and horizontal tabulation ``\t``.

.. code-block:: php
   
   <?php
   
   // space is mostly ignored in PHP code
   $string = ' a ';
   // space is important inside literal, such as strings
   
   echo 1 . 2; // here, space is important
   echo 1.2; // here, space is important
   
   ?>

