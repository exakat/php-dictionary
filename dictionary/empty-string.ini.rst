.. _empty-string:
.. meta::
	:description:
		Empty String: The empty string is ``''``, ``""``, ``<<<STRING.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Empty String
	:twitter:description: Empty String: The empty string is ``''``, ``""``, ``<<<STRING
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Empty String
	:og:type: article
	:og:description: The empty string is ``''``, ``""``, ``<<<STRING
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/empty-string.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Empty String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 10:06:02 +0000","dateModified":"Thu, 05 Feb 2026 10:06:02 +0000","description":"The empty string is ``''``, ``\"\"``, ``<<<STRING","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Empty String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Empty String
------------

The empty string is ``''``, ``""``, ``<<<STRING
STRING`` (Heredoc syntax), or ``<<<'STRING'
STRING`` (Nowdoc syntax). Is it a string without any content. 

The empty string is the neutral element for concatenation: concatenating an empty string to another string does not change the latter.

The empty string may be used as error report: for example, ``substr()`` returns an empty string when the offset is beyong the string range.

The empty string often serves as a default value, for properties and variables.

Comparisons between ``''`` and other falsy values, such as 0 changed with PHP 8.0: it was true and became false.

The empty string is falsy: it is converted to the ``false`` boolean when implicit conversion is need, such as in a condition.

.. code-block:: php
   
   <?php
   
   $emptyString = '';
   
   ?>


Related : :ref:`String <string>`, :ref:`Heredocs <heredoc>`, :ref:`Nowdocs <nowdoc>`, :ref:`Falsy <falsy>`
