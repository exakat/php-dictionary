.. _json_encode:
.. meta::
	:description:
		json_encode(): ``json_encode()`` encodes a data structure into a JSON string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: json_encode()
	:twitter:description: json_encode(): ``json_encode()`` encodes a data structure into a JSON string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: json_encode()
	:og:type: article
	:og:description: ``json_encode()`` encodes a data structure into a JSON string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/json_encode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"json_encode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``json_encode()`` encodes a data structure into a JSON string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/json_encode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


json_encode()
-------------

``json_encode()`` encodes a data structure into a JSON string.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.


.. code-block:: php
   
   <?php
   
   $data = [1,2,3];
   try {
       $json = json_encode($data);
   } catch(ValueError $e) {
       print "JSON encoding error";
   }
   // $json === '[1,2,3]';
   
   ?>


`Documentation <https://www.php.net/manual/en/function.json-encode.php>`__

Related : :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`JSON Lines (JSONC) <jsonc>`, :ref:`json_decode() <json_decode>`
