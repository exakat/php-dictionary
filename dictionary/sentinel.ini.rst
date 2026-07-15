.. _sentinel:
.. _sentinel-value:
.. meta::
	:description:
		Sentinel: A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sentinel
	:twitter:description: Sentinel: A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sentinel
	:og:type: article
	:og:description: A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sentinel.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sentinel.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sentinel.ini.html","name":"Sentinel","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jul 2026 09:29:07 +0000","dateModified":"Fri, 10 Jul 2026 09:29:07 +0000","description":"A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sentinel.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sentinel
--------

A sentinel is a special, reserved value used to signal a specific condition, such as the end of a sequence, an absence of data, or an error, instead of adding a separate flag or an exception for it. A sentinel is drawn from the very same domain as legitimate data, which creates ambiguity whenever it collides with an actual value: this is exactly the mechanism behind the famous ``strpos()`` syndrome.

Common sentinels include ``-1`` as a 'not found' index, the null terminator ``\0`` marking the end of a C string, ``EOF`` while reading a file, and a dedicated, otherwise-unreachable object used as the default value of a parameter, to detect that no argument was actually passed.

PHP relies on sentinels extensively: ``false`` is the sentinel returned by many string and array functions to mean 'nothing found', ``feof()`` is the sentinel condition of a read loop, and ``INF``, ``-INF`` and ``NAN`` act as sentinels for numeric overflow and invalid operations.

.. code-block:: php
   
   <?php
   
       $handle = fopen('data.txt', 'r');
       while (!feof($handle)) { // feof() is the sentinel condition
           $line = fgets($handle);
       }
   
       // a dedicated object as a sentinel default, to detect a missing argument
       final class Undefined {}
       const UNDEFINED = new Undefined();
   
       function greet(string $name, mixed $mood = UNDEFINED) {
           if ($mood === UNDEFINED) {
               $mood = 'happy';
           }
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Sentinel_value>`__

See also `How to Use Redis Sentinel with PHP <https://oneuptime.com/blog/post/2026-03-31-redis-sentinel-php/view>`_.

Related : :ref:`Strpos() Syndrome <strpos-syndrom>`, :ref:`Null <null>`, :ref:`False <false>`, :ref:`Default Value <default-value>`, :ref:`Magic Values <magic-value>`, :ref:`array_search <array_search>`
