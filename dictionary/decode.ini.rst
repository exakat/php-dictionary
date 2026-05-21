.. _decode:
.. meta::
	:description:
		Decode: To decode is to transform a piece of data, from a specialized format to a human readable one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Decode
	:twitter:description: Decode: To decode is to transform a piece of data, from a specialized format to a human readable one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Decode
	:og:type: article
	:og:description: To decode is to transform a piece of data, from a specialized format to a human readable one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/decode.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Decode","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 01 May 2026 16:33:54 +0000","dateModified":"Fri, 01 May 2026 16:33:54 +0000","description":"To decode is to transform a piece of data, from a specialized format to a human readable one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Decode.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Decode
------

To decode is to transform a piece of data, from a specialized format to a human readable one.

The conversion is lossless, and shall be reverted with an encode operation.

.. code-block:: php
   
   <?php
   
       // convert an array to a JSON string
       // This is also called 'encoding', and may be decoded
       $array = ['a' => 1];
       $json = json_encode($array);
       
       $original = json_decode($json);
   
   ?>


See also `PHP: Useful Encoding and decoding Functions You Need to Know <https://canopas.com/php-useful-encoding-and-decoding-functions-you-need-to-know-210e523a065f>`_.

Related : :ref:`Encode <encode>`, :ref:`Convert <convert>`
