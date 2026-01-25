.. _regex:
.. _preg:
.. meta::
	:description:
		Regular Expressions: A regular expression is a sequence of characters that specifies a search pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Regular Expressions
	:twitter:description: Regular Expressions: A regular expression is a sequence of characters that specifies a search pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Regular Expressions
	:og:type: article
	:og:description: A regular expression is a sequence of characters that specifies a search pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/regex.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Regular Expressions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 13:19:01 +0000","dateModified":"Thu, 22 Jan 2026 13:19:01 +0000","description":"A regular expression is a sequence of characters that specifies a search pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Regular Expressions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Regular Expressions
-------------------

A regular expression is a sequence of characters that specifies a search pattern. PHP currently uses the PCRE library, and used to have 2 such libraries.

.. code-block:: php
   
   <?php
     preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
     print_r($matches);
   ?>


`Documentation <https://www.php.net/preg_match>`__

See also https://medium.com/@olivia.j.01101001/how-to-use-php-regular-expressions-for-pattern-matching-and-data-validation-d58dacb06ea1, https://www.jotform.com/blog/php-regular-expressions/
