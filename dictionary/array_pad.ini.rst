.. _array_pad:
.. meta::
	:description:
		array_pad(): ``array_pad()`` is a PHP native function which complete an array up to ``$length`` elements with a specified ``$value``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_pad()
	:twitter:description: array_pad(): ``array_pad()`` is a PHP native function which complete an array up to ``$length`` elements with a specified ``$value``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_pad()
	:og:type: article
	:og:description: ``array_pad()`` is a PHP native function which complete an array up to ``$length`` elements with a specified ``$value``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_pad.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_pad()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 02 May 2026 09:24:43 +0000","dateModified":"Sat, 02 May 2026 09:24:43 +0000","description":"``array_pad()`` is a PHP native function which complete an array up to ``$length`` elements with a specified ``$value``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_pad().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_pad()
-----------

``array_pad()`` is a PHP native function which complete an array up to ``$length`` elements with a specified ``$value``. When ``$length`` is positive, the padding is to the right, and when ``$length`` is negative, it is a padding to the left.

Literal values are copied, while objects are only copied at the reference level: the same object occupies all the requested slots, they are not cloned or made distinct in any way.

``array_fill()`` may easily lead to memory exhaustion, given ``$count`` is large enough.


.. code-block:: php
   
   <?php
   
       $array = [1];
       $array = array_pad($array, 3, 2); 
       $array === [1, 2, 2];
       
       $array = [1];
       $array = array_pad($array, -3, 4); 
       $array === [4, 4, 1];
       
       $x = new stdClass();
       $x->i = 1;
       
       $array = array_pad([], 2, $x);
       $array[1]->i = 3;
       echo $array[0]->i; // also 3 
   
   ?>


`Documentation <https://www.php.net/manual/en/function.array-pad.php>`__

See also https://clouddevs.com/php/array_pad-function/

Related : :ref:`range() <range>`, :ref:`array_fill() <array_fill>`
