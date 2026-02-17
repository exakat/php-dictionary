.. _glob:
.. meta::
	:description:
		glob(): glob() is a function that finds pathnames matching a pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: glob()
	:twitter:description: glob(): glob() is a function that finds pathnames matching a pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: glob()
	:og:type: article
	:og:description: glob() is a function that finds pathnames matching a pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/glob.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"glob()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 13 Feb 2026 12:47:06 +0000","dateModified":"Fri, 13 Feb 2026 12:47:06 +0000","description":"glob() is a function that finds pathnames matching a pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/glob().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


glob()
------

glob() is a function that finds pathnames matching a pattern.

The glob() function is not related to the global keyword.

.. code-block:: php
   
   <?php
   foreach (glob("*.txt") as $filename) {
       echo "$filename size " . filesize($filename) . "\n";
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.glob.php>`__
