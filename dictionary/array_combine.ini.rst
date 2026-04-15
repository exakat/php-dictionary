.. _array_combine:
.. meta::
	:description:
		array_combine(): ``array_combine()`` creates an array from an array of keys and an array of values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: array_combine()
	:twitter:description: array_combine(): ``array_combine()`` creates an array from an array of keys and an array of values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: array_combine()
	:og:type: article
	:og:description: ``array_combine()`` creates an array from an array of keys and an array of values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/array_combine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"array_combine()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``array_combine()`` creates an array from an array of keys and an array of values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/array_combine().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


array_combine()
---------------

``array_combine()`` creates an array from an array of keys and an array of values. 

Both arguments are treated as lists: their respective keys are discarded, and only their positions are used. The arrays are not sorted. 

Both arguments must have the same number of elements.

``array_combine()`` is the opposite of ``array_keys`` and ``array_values`` together.


.. code-block:: php
   
   <?php
   
       // adapted from the PHP manual example
       $a = ['green',  4 => 'red', 'c' => 'yellow'];
       $b = ['avocado', 'apple', 'banana'];
       $c = array_combine($a, $b);
   
       print_r($c);
       
       /**
          Array
       (
           [green] => avocado
           [red] => apple
           [yellow] => banana
       )
       */
       
       var_dump($a === array_combine(array_keys($a), array_values($a)));
       
   ?>


`Documentation <https://www.php.net/manual/en/function.array-combine.php>`__

Related : :ref:`array_keys() <array_keys>`, :ref:`array_values() <array_values>`
