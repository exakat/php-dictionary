.. _sqrt:
.. meta::
	:description:
		sqrt(): ``sqrt()`` is a PHP native function, that computes the square root of a number.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: sqrt()
	:twitter:description: sqrt(): ``sqrt()`` is a PHP native function, that computes the square root of a number
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: sqrt()
	:og:type: article
	:og:description: ``sqrt()`` is a PHP native function, that computes the square root of a number
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sqrt.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"sqrt()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 May 2026 08:27:53 +0000","dateModified":"Wed, 06 May 2026 08:27:53 +0000","description":"``sqrt()`` is a PHP native function, that computes the square root of a number","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/sqrt().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


sqrt()
------

``sqrt()`` is a PHP native function, that computes the square root of a number. That function takes a integer or a float, and returns the same types, depending on the actual value of the result.

``sqrt()`` is not a specifically slow function.


.. code-block:: php
   
   <?php
   
       $a = 4;
       var_dump(sqrt($a));
       
       $b = 5;
       var_dump(sqrt($b));
   
   ?>


`Documentation <https://www.php.net/manual/en/function.sqrt.php>`__

Related : :ref:`Exponent <power>`
