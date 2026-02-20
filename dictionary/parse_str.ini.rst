.. _parse_str:
.. meta::
	:description:
		parse_str(): ``parse_str()`` parses a query string and extracts its components (name and value) in an array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: parse_str()
	:twitter:description: parse_str(): ``parse_str()`` parses a query string and extracts its components (name and value) in an array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: parse_str()
	:og:type: article
	:og:description: ``parse_str()`` parses a query string and extracts its components (name and value) in an array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/parse_str.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"parse_str()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 20:31:17 +0000","dateModified":"Wed, 18 Feb 2026 20:31:17 +0000","description":"``parse_str()`` parses a query string and extracts its components (name and value) in an array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/parse_str().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


parse_str()
-----------

``parse_str()`` parses a query string and extracts its components (name and value) in an array. 

The resulting array uses the names of the variables in the query string as keys, and the value in the query string as values. 

``parse_str()`` handles some special conventions: ``[]`` turns the variable into an array, including multidimensional arrays and hash. Dots ``.`` and spaces `` `` are replaced automatically with underscore ``_``, as they are not allowed in PHP variables. This is a legacy leftover, as no variable is created anymore.

All parsed values are strings or arrays. They may be numeric strings, though.

``parse_str()`` used to allow the second parameter, for the results, to be omitted. Then, it would write the new variables in the current context, with a possible serious security effect. This is not possible anymore since PHP 8.0.

.. code-block:: php
   
   <?php
   
   parse_str("a=1&b[]=3", $array);
   
   print_r($array);
   /**
     * [a => 1
     *  b => [
     *    3
     *   ]
     * ]
     */
   ?>


`Documentation <https://www.php.net/manual/en/function.parse-str.php>`__

See also https://tools.ietf.org/html/rfc3986
