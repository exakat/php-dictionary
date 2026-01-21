.. _multi-byte:
.. _mb:
.. meta::
	:description:
		Multi-byte: Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multi-byte
	:twitter:description: Multi-byte: Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multi-byte
	:og:type: article
	:og:description: Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/multi-byte.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Multi-byte","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multi-byte.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multi-byte
----------

Multi-byte refers to string encoding where characters are coded over several bytes, rather than just one. 

In ASCII, the roman alphabet is coded over 1 character, making it mono-byte. But other languages, such as Chinese, needs for than one byte to represents all the ideograms. 

Unicode, for example, is multi-byte: 2 bytes. It may be encoded as UTF-8 (2 bytes), UTF-16 (4 bytes) or UTF-32 (8 bytes).

In PHP, string functions are single-byte. When needed, extensions such as ``iconv``, ``intl`` and ``mbstring`` are able to manipulate multi-byte characters without breaking them.

.. code-block:: php
   
   <?php
   
   print strlen(me); // 2 chars
   
   print strlen(我); // 3 chars
   
   print mb_strlen(我); // 1 chars
   
   ?>


See also https://medium.com/@gftea/character-encoding-ff9a14a10ec7
