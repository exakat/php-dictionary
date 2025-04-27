.. _json:
.. meta::
	:description:
		JavaScript Object Notation (JSON): JSON (JavaScript Object Notation) is a lightweight data-interchange format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JavaScript Object Notation (JSON)
	:twitter:description: JavaScript Object Notation (JSON): JSON (JavaScript Object Notation) is a lightweight data-interchange format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: JavaScript Object Notation (JSON)
	:og:type: article
	:og:description: JSON (JavaScript Object Notation) is a lightweight data-interchange format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/json.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"JavaScript Object Notation (JSON)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"JSON (JavaScript Object Notation) is a lightweight data-interchange format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/JavaScript Object Notation (JSON).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


JavaScript Object Notation (JSON)
---------------------------------

JSON (JavaScript Object Notation) is a lightweight data-interchange format. It is easy for humans to read and write. It is easy for machines to parse and generate. It is based on a subset of the JavaScript Programming Language Standard ECMA-262 3rd Edition - December 1999.

.. code-block:: php
   
   <?php
   $array = array('a' => 1, 'b' => "c", 'c' => [3, 4], 'd' => new stdclass());
   
   echo json_encode($arr);
   // displays {"a":1,"b":"c","c":[3,4],"d":{}}
   
   ?>


`Documentation <https://www.php.net/json>`__

See also `JSON home <https://www.json.org/json-en.html>`_

Added in PHP 5.0+
