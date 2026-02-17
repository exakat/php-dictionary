.. _explode:
.. meta::
	:description:
		explode(): The ``explode()`` function is used to break an array into a list of elements, based on a separator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: explode()
	:twitter:description: explode(): The ``explode()`` function is used to break an array into a list of elements, based on a separator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: explode()
	:og:type: article
	:og:description: The ``explode()`` function is used to break an array into a list of elements, based on a separator
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/explode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"explode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 17 Feb 2026 10:24:24 +0000","dateModified":"Tue, 17 Feb 2026 10:24:24 +0000","description":"The ``explode()`` function is used to break an array into a list of elements, based on a separator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/explode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


explode()
---------

The ``explode()`` function is used to break an array into a list of elements, based on a separator.

``explode()`` uses the first argument as the separator, and the second as the string. 

``explode()``() has an alias called ``split()``.

``explode()`` creates an empty string when the separator is at the beginning or the end of the strings. It also build empty strings when the separator are next to each other. 

The separator has to be a static string. For dynamic separators, there is the ``preg_split()`` function.

``explode()`` has a third parameter to limit the number of read elements. It is useful to avoid spending too much resources (time, memory..) working on the string, when a maximum number of expected elements is known, and the string is not.

.. code-block:: php
   
   <?php
   
   print_r(explode('&', '&a=3&b') );
   // ['', 'a=3', 'b']
   
   ?>


`Documentation <https://www.php.net/manual/en/function.implode.php>`__

Related : 
