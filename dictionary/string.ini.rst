.. _string:
.. meta::
	:description:
		String: A string is series of characters, where a character is the same as a byte.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: String
	:twitter:description: String: A string is series of characters, where a character is the same as a byte
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: String
	:og:type: article
	:og:description: A string is series of characters, where a character is the same as a byte
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/string.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"String","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 06 Aug 2025 19:29:35 +0000","dateModified":"Wed, 06 Aug 2025 19:29:35 +0000","description":"A string is series of characters, where a character is the same as a byte","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/String.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


String
------

A string is series of characters, where a character is the same as a byte. This means that PHP only supports a 256-character set, and hence does not offer native Unicode support. 

.. code-block:: php
   
   <?php
   
   $string = 'Hello world';
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.string.php>`__

Related : :ref:`Stringable <stringable>`, :ref:`Single Quotes Strings <single-quote>`, :ref:`Double Quotes Strings <double-quote>`, :ref:`Magic Methods <magic-method>`, :ref:`sprintf <sprintf>`, :ref:`sprintf <vprintf>`, :ref:`Concatenation <concatenation>`, :ref:`Curly Brackets <curly-bracket>`, :ref:`Format <format>`, :ref:`Heredocs <heredoc>`, :ref:`Interpolation <interpolation>`, :ref:`Nowdocs <nowdoc>`, :ref:`Scalar Types <scalar-typehint>`, :ref:`String Interpolation <string-interpolation>`, :ref:`Case Sensitivity <case-sensitivity>`, :ref:`negative-index <negative-index>`, :ref:`Scalar Types <scalar-type>`, :ref:`sprintf <printf>`

Related packages : `symfony/string <https://packagist.org/packages/symfony/string>`_, `voku/stringy <https://packagist.org/packages/voku/stringy>`_
