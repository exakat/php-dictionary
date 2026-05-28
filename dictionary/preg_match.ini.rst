.. _preg_match:
.. meta::
	:description:
		Preg_match: ``preg_match()`` searches a string for a match to the regular expression given in pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Preg_match
	:twitter:description: Preg_match: ``preg_match()`` searches a string for a match to the regular expression given in pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Preg_match
	:og:type: article
	:og:description: ``preg_match()`` searches a string for a match to the regular expression given in pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/preg_match.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Preg_match","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 28 May 2026 06:09:54 +0000","dateModified":"Thu, 28 May 2026 06:09:54 +0000","description":"``preg_match()`` searches a string for a match to the regular expression given in pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Preg_match.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Preg_match
----------

``preg_match()`` searches a string for a match to the regular expression given in pattern.

``preg_match()`` only returns the first found match is returned. When several matchs are expected, use this function recursively with the ``$offset`` pattern, or call ``preg_match_all()``. 

The first argument is the regex, and the second argument is the string being searched. 

The third argument, when provided, receives the results of the search, if any. It also contains the capturing sub patterns results. The variable content is replaced by an array: references are also lost. When an error occurs, the variable is left intact.

An ``$offset`` argument is available, to start the search beyond the beginning of the string.

``preg_match()`` returns 1 if there is at least on matched string, and 0 otherwise. It also returns ``false`` in case of error during execution, such as invalid regex, or passing backtracking limits. It is recommended to use ``===`` with its result.

.. code-block:: php
   
   <?php
   
       preg_match('/(a)/i', 'aAba', $r);
       print_r($r); // ['a', 'a']
   
   ?>


`Documentation <https://www.php.net/manual/en/function.preg-match.php>`__

Related : :ref:`Regular Expression <regex>`, :ref:`Strpos() Syndrome <strpos-syndrom>`
