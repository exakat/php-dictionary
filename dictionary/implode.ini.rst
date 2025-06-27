.. _implode:
.. meta::
	:description:
		implode(): The implode() function is used to join elements of an array into a glue, placed between each element.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: implode()
	:twitter:description: implode(): The implode() function is used to join elements of an array into a glue, placed between each element
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: implode()
	:og:type: article
	:og:description: The implode() function is used to join elements of an array into a glue, placed between each element
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/implode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"implode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 24 Jun 2025 20:06:53 +0000","dateModified":"Tue, 24 Jun 2025 20:06:53 +0000","description":"The implode() function is used to join elements of an array into a glue, placed between each element","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/implode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


implode()
---------

The implode() function is used to join elements of an array into a glue, placed between each element.

implode() uses the first argument as the separator, and the second as the array. In older versions of PHP, this order could be reversed, but it recommended to avoid using it, as that feature was removed.

implode() has an alias called ``join()``.

implode() converts the elements of the array to string before merging them in a string. In particular, objects are converted to string with the magic-method, and (sub-)arrays are converted to ``Array``, with a warning. Backed enumerations are not usable with that function.

.. code-block:: php
   
   <?php
   
   declare(strict_types=1);
   
   class x {
       function __toString() {
           return 'c';
       }
   }
   
   $x = new x();
   echo join('a', ['a', 'b', new x()]);
   
   ?>


`Documentation <https://www.php.net/manual/en/function.implode.php>`__
