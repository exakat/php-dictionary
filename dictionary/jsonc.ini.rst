.. _jsonc:
.. meta::
	:description:
		JSON Lines (JSONC): JSONC (JSON with Comments) is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JSON Lines (JSONC)
	:twitter:description: JSON Lines (JSONC): JSONC (JSON with Comments) is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: JSON Lines (JSONC)
	:og:type: article
	:og:description: JSONC (JSON with Comments) is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/jsonc.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"JSON Lines (JSONC)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Apr 2026 07:31:51 +0000","dateModified":"Sat, 11 Apr 2026 07:31:51 +0000","description":"JSONC (JSON with Comments) is a superset of JSON that extends its functionality by allowing single-line ``\/\/`` and multi-line ``\/* *\/`` comments","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/JSON Lines (JSONC).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


JSON Lines (JSONC)
------------------

JSONC (JSON with Comments) is a superset of JSON that extends its functionality by allowing single-line ``//`` and multi-line ``/* */`` comments.
 
This feature is commonly used in configuration files to improve readability, enabling developers to annotate data directly within the JSON structure.
 
Unlike standard JSON, which does not support comments, JSONC retains full compatibility with valid JSON. However, the reverse is not true: not all JSONC files are valid JSON.

.. code-block:: php
   
   <?php
   
   $JSONL = <<<JSONL
   {a:1}
   {b:2}
   JSONL;
   
   foreach(explode(\n, $JSONL) as $line) {
       print_r(json_decode($line));
   }
   
   /**
   stdClass Object
   (
       [a] => 1
   )
   stdClass Object
   (
       [b] => 2
   )
   */
   
   ?>


`Documentation <https://github.com/aleron75/jsonc>`__

See also https://jsonc.org/

Related : :ref:`json_decode() <json_decode>`, :ref:`JSON Lines (JSONL) <jsonl>`, :ref:`JavaScript Object Notation (JSON) <json>`
