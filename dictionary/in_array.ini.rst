.. _in_array:
.. meta::
	:description:
		in_array(): The in_array() function checks if a value exists in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: in_array()
	:twitter:description: in_array(): The in_array() function checks if a value exists in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: in_array()
	:og:type: article
	:og:description: The in_array() function checks if a value exists in an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/in_array.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"in_array()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"The in_array() function checks if a value exists in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/in_array().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


in_array()
----------

The in_array() function checks if a value exists in an array. It is important to use the third parameter 'strict' (set to true) to ensure type safety and avoid unexpected behavior due to PHP's loose comparison rules.

A surprising pitfall is misplaced parentheses, which can lead to valid but incorrect logic: ``if (in_array($a, $b) == $c)`` vs ``if (in_array($a, $b == $c))``.

.. code-block:: php
   
   <?php
   
   $array = [1, 2, '3', 4];
   
   // Loose comparison (default): returns true
   var_dump(in_array(3, $array)); 
   
   // Strict comparison: returns false
   var_dump(in_array(3, $array, true));
   
   // Misplaced parenthesis pitfall
   $a = 1;
   $b = [1, 2, 3];
   $c = true;
   
   // Correct usage
   if (in_array($a, $b) === $c) {
       echo 'Found';
   }
   
   // Potentially incorrect but valid syntax
   if (in_array($a, $b === $c)) {
       echo 'Valid PHP, but unlikely what was intended';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/function.in-array.php>`__

See also https://php-tips.readthedocs.io/en/latest/tips/misplaced_parenthesis.html, https://3v4l.org/YN2FK

Related : 
