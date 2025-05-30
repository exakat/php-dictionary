.. _non-breakable-space:
.. meta::
	:description:
		Non Breakable Spaces: Space is one of the base ascii character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non Breakable Spaces
	:twitter:description: Non Breakable Spaces: Space is one of the base ascii character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non Breakable Spaces
	:og:type: article
	:og:description: Space is one of the base ascii character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/non-breakable-space.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Non Breakable Spaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"Space is one of the base ascii character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Non Breakable Spaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Non Breakable Spaces
--------------------

Space is one of the base ascii character. They are often used to separate words, and are forbidden from being used in names. 

PHP supports Unicode characters, and some of the characters are called : non breaking spaces. They behave like a space, by displaying a blank area. Yet, they are recognized internally as a non-space, and can be used in a name.

Non-breakable spaces are useful for tests, as they make the testing name more readable. They are also quite rare, and confusing for newcomers.


.. code-block:: php
   
   <?php
   
   // This is a space, it won't compile
   const A B = 1;
   
   // This is a non breakabe space, it compile and is not visibly different from the line above
   const A B = 1;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Non-breaking_space>`__

See also `Non breakable space in PHP <https://3v4l.org/ATkWY>`_
