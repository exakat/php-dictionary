.. _non-breakable-space:
.. _unbreakable-space:
.. meta::
	:description:
		Non Breakable Spaces: Space is one of the base ASCII characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Non Breakable Spaces
	:twitter:description: Non Breakable Spaces: Space is one of the base ASCII characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Non Breakable Spaces
	:og:type: article
	:og:description: Space is one of the base ASCII characters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/non-breakable-space.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Non Breakable Spaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 17 May 2026 07:43:05 +0000","dateModified":"Sun, 17 May 2026 07:43:05 +0000","description":"Space is one of the base ASCII characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Non Breakable Spaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Non Breakable Spaces
--------------------

Space is one of the base ASCII characters. They are often used to separate words, and are forbidden from being used in names. 

PHP supports Unicode characters, and some of the characters are called: non breaking spaces. They behave like a space, by displaying a blank area. Yet, they are recognized internally as a non-space, and can be used in a name.

Non-breakable spaces are useful for tests, as they make the testing name more readable. They are also quite rare, and confusing for newcomers.

Unbreakable spaces is ``\u{00A0}`` as a PHP escape sequence, or ``\xc2\xa0`` as ASCII characters; it is the HTML escape sequence ``&nbsp;``.

.. code-block:: php
   
   <?php
   
       // This is a space, PHP doesn't compile this code
       const A B = 1;
   
       // This is a non breakabe space, it compile and is not visibly different from the line above
       const A B = 1;
       echo A B;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Non-breaking_space>`__

See also `Non breakable space in PHP <https://3v4l.org/ATkWY>`_, `Handling Invisible characters with PHP <https://dev.to/yasserelgammal/handling-invisible-characters-with-php-1507>`_, `Non-Breaking Spaces and UTF-8 Madness <https://www.bigmessowires.com/2021/10/14/non-breaking-spaces-and-utf-8-madness/>`_ and `Using non-breakable spaces in test method names <https://mnapoli.fr/using-non-breakable-spaces-in-test-method-names>`_.

Related : :ref:`Space <space>`
