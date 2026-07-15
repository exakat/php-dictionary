.. _encode:
.. meta::
	:description:
		Encode: To encode is to transform a piece of data, from a human readable format to a specialized format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Encode
	:twitter:description: Encode: To encode is to transform a piece of data, from a human readable format to a specialized format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Encode
	:og:type: article
	:og:description: To encode is to transform a piece of data, from a human readable format to a specialized format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/encode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/encode.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/encode.ini.html","name":"Encode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:55 +0000","dateModified":"Fri, 19 Jun 2026 21:24:55 +0000","description":"To encode is to transform a piece of data, from a human readable format to a specialized format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Encode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Encode
------

To encode is to transform a piece of data, from a human readable format to a specialized format.

The conversion is lossless, and shall be reverted with a decode operation.

.. code-block:: php
   
   <?php
   
       // convert an array to a JSON string
       // This is also called 'encoding', and may be decoded
       $array = ['a' => 1];
       $json = json_encode($array);
       
       $original = json_decode($json);
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Character_encoding>`__

See also `PHP: Useful Encoding and decoding Functions You Need to Know <https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f>`_.

Related : :ref:`Decode <decode>`, :ref:`Convert <convert>`
