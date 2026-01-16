.. _convert:
.. meta::
	:description:
		Convert: To convert is to transform a piece of data, from one format to another.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Convert
	:twitter:description: Convert: To convert is to transform a piece of data, from one format to another
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Convert
	:og:type: article
	:og:description: To convert is to transform a piece of data, from one format to another
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/convert.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Convert","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"To convert is to transform a piece of data, from one format to another","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Convert.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Convert
-------

To convert is to transform a piece of data, from one format to another. 

The conversion may be lossless, when it may be reverted without loss of information. It is lossfull when it cannot be reverted, or if this operation is very expensive. 

PHP has several conversion systems: 

+ cast, with ``(int)``, ``(array)``, ``(string)``, etc
+ string format conversion, with ``iconv()``, ``mb_convert_encoding()``, or ``UConverter::transcode``.
+ number base conversion, with ``base_convert()`` and ``intval()``.

To convert may also be called cast, encode/decode, escape, crypt/decrypt, hash, sign, etc. depending on the context.

.. code-block:: php
   
   <?php
   
   // convert an array to a JSON string
   // This is also called 'encoding', and may be decoded
   $array = ['a' => 1];
   $json = json_encode($array);
   
   // convert a string to its MD5 signature
   // it cannot be reverted easily, and it is considered lossful
   $string = 'PHP rocks';
   $hash = md5($string);
   
   ?>


Related : :ref:`Cast Operator <cast>`, , , :ref:`Escape Data <escape>`, , , :ref:`Hash <hash>`, :ref:`Sign <sign>`
