.. _hypot:
.. meta::
	:description:
		hypot(): ``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: hypot()
	:twitter:description: hypot(): ``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: hypot()
	:og:type: article
	:og:description: ``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/hypot.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hypot.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hypot.ini.html","name":"hypot()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/hypot().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


hypot()
-------

``hypot()`` is a PHP native function, that computes the length of the hypotenuse on a right triangle, given the length of the two other sides.

``hypot()`` is the same as calculating ``sqrt(pow($a, 2) + pow($b, 2))`` or ``sqrt($a ** 2 + $b ** 2)``. It is also the length of a segment from the origin to a point of coordinates ``($a, $b)``.


.. code-block:: php
   
   <?php
   
       $x = 3;
       $y = 4;
       var_dump(hypot($x, $y));
   
   ?>


`Documentation <https://www.php.net/manual/en/function.hypot.php>`__

Related : :ref:`Exponent <power>`, :ref:`sqrt() <sqrt>`
