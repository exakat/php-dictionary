.. _encoding-text:
.. _text-encoding:
.. meta::
	:description:
		Text Encoding: Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Text Encoding
	:twitter:description: Text Encoding: Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Text Encoding
	:og:type: article
	:og:description: Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/encoding-text.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Text Encoding","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Text Encoding.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Text Encoding
-------------

Encoding is the way characters are organized to hold a meaning while being transmitted, stored or manipulated. 

Encoding applies to PHP scripts, which should be UTF-8 encoded, although it might support other formats.

Encoding applies to incoming and outgoing data.

Encoding operations are provided with ``ext/mbstring``, ``ext/iconv`` and ``ext/intl`` extensions. 

Encoding is also used for code : the source is encoded when it is transformed in an unreadable yet still executable form. 


.. code-block:: php
   
   <?php
   $text = "This is the Euro symbol '€'.";
   
   echo 'Original : ', $text, PHP_EOL;
   echo 'TRANSLIT : ', iconv("UTF-8", "ISO-8859-1//TRANSLIT", $text), PHP_EOL;
   echo 'IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), PHP_EOL;
   echo 'Plain    : ', iconv("UTF-8", "ISO-8859-1", $text), PHP_EOL;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.static.php#language.oop5.static.properties>`__

Related : :ref:`Multibyte String <mbstring>`, :ref:`Iconv <iconv>`, :ref:`Internationalization Functions <intl>`
