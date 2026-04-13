.. _trim:
.. meta::
	:description:
		trim: The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: trim
	:twitter:description: trim: The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: trim
	:og:type: article
	:og:description: The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/trim.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"trim","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Apr 2026 05:56:53 +0000","dateModified":"Thu, 09 Apr 2026 05:56:53 +0000","description":"The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/trim.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


trim
----

The ``trim()`` function is used to remove whitespaces from the beginning and end of a string, at the same time. 

By default, it removes any of the following characters from the start and end of the string:

+ Space (``" "``)
+ Horizontal tab (``\t``)
+ Newline (``\n``)
+ Carriage return (``\r``)
+ Null-byte (``\0``)

It is also possible to provide a list of single characters 

This function does not support multi-bytes characters. It actually uses single bytes characters, and may leave inconsistent characters, or, with luck, it may actually removes the characters. Multibyte trim shall be done with ``mb_trim()``.

``trim()`` removes all the provided characters, as long as it finds them leading or trailing the string. It is not possible to remove only one characters with this function.

``trim()`` is completed with ``ltrim()``, which is removing characters on the left part of the string, and  with ``rtrim()``, which is removing characters on the right part of the string.

.. code-block:: php
   
   <?php
   
       $string = \n\t PHP;
       $trimmed = trim($string);
       // 'PHP'
   
       $b = 'aaaaaab';
       print trim($a, 'a'); //b
   
       $a = '我是法国人';
       print $a;               //我是法国人
       print trim($a, '人我'); //��法国 
   
   ?>


`Documentation <https://www.php.net/manual/en/function.trim.php>`__

See also https://benjamincrozat.com/php-trim
