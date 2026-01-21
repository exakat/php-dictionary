.. _mbstring:
.. _multibyte-string:
.. meta::
	:description:
		Multibyte String: ``mbstring`` provides function to process multibyte strings functions.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Multibyte String
	:twitter:description: Multibyte String: ``mbstring`` provides function to process multibyte strings functions
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Multibyte String
	:og:type: article
	:og:description: ``mbstring`` provides function to process multibyte strings functions
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mbstring.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Multibyte String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:20:47 +0000","dateModified":"Tue, 20 Jan 2026 07:20:47 +0000","description":"``mbstring`` provides function to process multibyte strings functions","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Multibyte String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Multibyte String
----------------

``mbstring`` provides function to process multibyte strings functions. Moreover, ``mbstring`` converts from and to various character encodings.

.. code-block:: php
   
   <?php
   /* Convert EUC-JP to UTF-7 */
   $str = mb_convert_encoding($str, \UTF-7\, \EUC-JP\);
   ?>


`Documentation <https://www.php.net/manual/en/book.mbstring.php>`__

Related : :ref:`Iconv <iconv>`, :ref:`Encoding <encoding>`
