.. _json_decode:
.. meta::
	:description:
		json_decode(): ``json_decode()`` decodes a JSON string into a data structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: json_decode()
	:twitter:description: json_decode(): ``json_decode()`` decodes a JSON string into a data structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: json_decode()
	:og:type: article
	:og:description: ``json_decode()`` decodes a JSON string into a data structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/json_decode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"json_decode()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:36:33 +0000","dateModified":"Mon, 26 Jan 2026 13:36:33 +0000","description":"``json_decode()`` decodes a JSON string into a data structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/json_decode().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


json_decode()
-------------

``json_decode()`` decodes a JSON string into a data structure.

In case an error arise during parsing, a ``null`` value is returned, as the default value. This error may be confused with the decoding of the ``'null'`` string, which is a valid JSON value. It may also raise a ``ValueError``, when the function is configured by ``JSON_THROW_ON_ERROR``.


.. code-block:: php
   
   <?php
   
   $json = '[1,2,3]';
   try {
       $variable = json_decode($json, flags: JSON_THROW_ON_ERROR);
   } catch(ValueError $e) {
       print JSON decoding error;
   }
   // $variable === [1,2,3];
   
   ?>


`Documentation <https://www.php.net/manual/en/function.json-decode.php>`__

Related : :ref:`JavaScript Object Notation (JSON) <json>`, , :ref:`Null <null>`, :ref:`Strpos() Syndrome <strpos-syndrom>`, :ref:`ValueError <valueerror>`
