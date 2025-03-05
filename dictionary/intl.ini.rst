.. _intl:
.. meta::
	:description:
		Internationalization Functions: The internationalization extension performs operations with locales.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Internationalization Functions
	:twitter:description: Internationalization Functions: The internationalization extension performs operations with locales
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Internationalization Functions
	:og:type: article
	:og:description: The internationalization extension performs operations with locales
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/intl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Internationalization Functions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"The internationalization extension performs operations with locales","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Internationalization Functions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Internationalization Functions
------------------------------

The internationalization extension performs operations with locales. For example, it formats dates according to country and language configurations. The operations include, and are not limited to, formatting, transliteration, encoding conversion, calendar operations, » UCA-conformant collation, locating text boundaries and working with locale identifiers, timezones and graphemes.

This extension is closely linked to the ICU library. 


.. code-block:: php
   
   <?php
   $us = new NumberFormatter('en_US', NumberFormatter::DECIMAL);
   echo $us->format(1234567).PHP_EOL;
   //1,234,567
   
   $zh = new NumberFormatter('zh_ZH', NumberFormatter::DECIMAL);
   echo $zh->format(1234567).PHP_EOL;
   //1,234,567
   
   $fr = new NumberFormatter('fr_FR', NumberFormatter::DECIMAL);
   echo $fr->format(1234567).PHP_EOL;
   //1 234 567
   
   ?>


`Documentation <https://www.php.net/manual/en/book.intl.php>`__

See also `ICU lib <https://icu.unicode.org/docs/>`_

Related : :ref:`Locale <locale>`, :ref:`Accessibility <a11y>`, :ref:`Accessibility <accessibility>`
