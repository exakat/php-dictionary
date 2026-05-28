.. _reverse-regex:
.. meta::
	:description:
		Reverse Regex: A reverse regex is a library that produces a string based on a regex.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Reverse Regex
	:twitter:description: Reverse Regex: A reverse regex is a library that produces a string based on a regex
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Reverse Regex
	:og:type: article
	:og:description: A reverse regex is a library that produces a string based on a regex
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/reverse-regex.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A never-returning function must not return.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/A never-returning function must not return.html","name":"Reverse Regex","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"A reverse regex is a library that produces a string based on a regex","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Reverse Regex.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Reverse Regex
-------------

A reverse regex is a library that produces a string based on a regex. The resulting string satisfy the regex.

Such tool is good for testing, so as to find possible regexploits, or simple loopholes in the original regex.

.. code-block:: php
   
   <?php
   
       preg_match('/(foo)(bar)(baz)/', 'foobarbaz', $matches, PREG_OFFSET_CAPTURE);
       print_r($matches);
   
   ?>


`Documentation <https://www.php.net/preg_match>`__

Related : :ref:`Regular Expression <regex>`

Related packages : `icomefromthenet/reverseregex <https://packagist.org/packages/icomefromthenet/reverseregex>`_, `pointybeard/reverse-regex <https://packagist.org/packages/pointybeard/reverse-regex>`_
