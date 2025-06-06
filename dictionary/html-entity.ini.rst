.. _html-entity:
.. meta::
	:description:
		HTML Entity: HTML entities are special character sequences, that represents a single character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: HTML Entity
	:twitter:description: HTML Entity: HTML entities are special character sequences, that represents a single character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: HTML Entity
	:og:type: article
	:og:description: HTML entities are special character sequences, that represents a single character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/html-entity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"HTML Entity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"HTML entities are special character sequences, that represents a single character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/HTML Entity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


HTML Entity
-----------

HTML entities are special character sequences, that represents a single character. Such representation is not needed for simple characters, such as the Latin alphabet. On the other hand, they are needed for unusual characters, in particular when the encoding cannot be guaranteed to support it. 

They are also needed to display characters, which have a special meaning, such as double quote `"`, or the greater `>` and lesser signs `<`. 

HTML entities makes the source code longer, and harder to read. 

HTML entities may have a letter representation, while they always have a numeric representation. For example, the ampersand may be written `\&amp;` and `\&#38;`.

PHP has functions to decode (turn HTML entities into characters) and encode (turn characters into HTML entities) : htmlentities() and htmlentities_decode(), htmlspecialchars() and htmlspecialchars_decode(). The get_html_translation_table() provides the full list of supported entities. 


.. code-block:: php
   
   <?php
   
   echo htmlentities('&'); // &amp;
   
   print htmlentities_decode('&lt;A&gt;'); // <A>
   
   ?>


`Documentation <https://www.php.net/manual/en/function.htmlentities.php>`__

See also `Named character references <https://html.spec.whatwg.org/multipage/named-characters.html>`_
