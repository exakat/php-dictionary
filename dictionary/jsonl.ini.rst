.. _jsonl:
.. _ndjson:
.. meta::
	:description:
		JSON Lines (JSONL): JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JSON Lines (JSONL)
	:twitter:description: JSON Lines (JSONL): JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: JSON Lines (JSONL)
	:og:type: article
	:og:description: JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/jsonl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"JSON Lines (JSONL)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/JSON Lines (JSONL).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


JSON Lines (JSONL)
------------------

JSONL, JSON Lines, is a text-based format where each line is a valid, independent JSON object, separated by newline characters. 

It is ideal for storing structured data, large datasets, and logging, as it allows for streaming and processing files line-by-line without loading the entire file into memory. It is also known as newline-delimited JSON (NDJSON).

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


`Documentation <https://github.com/indykoning/php-jsonl>`__

See also https://jsonlines.org/

Related : :ref:`json_decode() <json_decode>`, :ref:`JSON Lines (JSONC) <jsonc>`, :ref:`JavaScript Object Notation (JSON) <json>`
