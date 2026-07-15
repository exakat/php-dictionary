.. _array_fill:
.. meta::
	:description:
		array_fill(): ``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_fill()
	:twitter:description: array_fill(): ``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_fill()
	:og:type: article
	:og:description: ``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_fill.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_fill.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_fill.ini.html","name":"array_fill()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:58 +0000","dateModified":"Mon, 15 Jun 2026 11:03:58 +0000","description":"``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_fill().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_fill()
------------

``array_fill()`` is a PHP native function which creates an array with ``$count`` times a specified ``$value``, starting at integer offset ``$start_index``. 

Literal values are copied, while objects are only copied at the reference level: the same object occupies all the requested slots, they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.


.. code-block:: php
   
   <?php
   
       $array = [1, 1, 1];
       $array = array_fill(0, 3, 1); 
       
       $array = [-3 => 2, 2, 2];
       $array = array_fill(-3, 3, 2); 
       
       $x = new stdClass();
       $x->i = 1;
       
       $array = array_fill(0, 2, $x);
       $array[1]->i = 3;
       echo $array[0]->i; // also 3 
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-fill.php>`__

See also `Understanding and Implementing PHP's `array_fill()` Function <https://reintech.io/blog/understanding-implementing-php-array-fill-function>`_ and `PHP array_fill( ) Function <https://medium.com/@ok4304571/php-array-fill-function-bde394c4b4d8>`_.

Related : :ref:`range() <range>`, :ref:`array_pad() <array_pad>`
