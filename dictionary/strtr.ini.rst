.. _strtr:
.. meta::
	:description:
		strtr(): ``strtr()`` is a PHP native function that translates characters or replaces substrings in a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: strtr()
	:twitter:description: strtr(): ``strtr()`` is a PHP native function that translates characters or replaces substrings in a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: strtr()
	:og:type: article
	:og:description: ``strtr()`` is a PHP native function that translates characters or replaces substrings in a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/strtr.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtr.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtr.ini.html","name":"strtr()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 16 Jul 2026 13:44:12 +0000","dateModified":"Thu, 16 Jul 2026 13:44:12 +0000","description":"``strtr()`` is a PHP native function that translates characters or replaces substrings in a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/strtr().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


strtr()
-------

``strtr()`` is a PHP native function that translates characters or replaces substrings in a string.

It has two signatures. With three arguments, ``strtr($string, $from, $to)``, it replaces each character found in ``$from`` with the character at the same position in ``$to``. Both strings must have the same length; extra characters in the longer one are ignored.

With two arguments, ``strtr($string, $replace_pairs)``, it takes an array mapping substrings to their replacements. Unlike ``str_replace()``, ``strtr()`` replaces the longest matching keys first and does not rescan replaced text, which avoids double substitutions.

``strtr()`` is often faster than multiple chained ``str_replace()`` calls when doing several substitutions at once.


.. code-block:: php
   
   <?php
   
       echo strtr('Hello World', 'ol', '0L'); // HeLL0 W0rLd
   
       $trans = ['Hello' => 'Hi', 'World' => 'Earth'];
       echo strtr('Hello World', $trans); // Hi Earth
   
       // Longest keys are matched first
       $trans = ['a' => 'X', 'ab' => 'Y'];
       echo strtr('ab', $trans); // Y, not XB
   
   ?>


`Documentation <https://www.php.net/manual/en/function.strtr.php>`__

Related : :ref:`str_replace() <str_replace>`, :ref:`String <string>`, :ref:`strpos <strpos>`
