.. _unbacked-enum:
.. meta::
	:description:
		Unbacked Enum: Unbacked enums are enumeration without a string or integer equivalent for each of its cases.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unbacked Enum
	:twitter:description: Unbacked Enum: Unbacked enums are enumeration without a string or integer equivalent for each of its cases
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Unbacked Enum
	:og:type: article
	:og:description: Unbacked enums are enumeration without a string or integer equivalent for each of its cases
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unbacked-enum.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Unbacked Enum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Unbacked enums are enumeration without a string or integer equivalent for each of its cases","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Unbacked Enum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Unbacked Enum
-------------

Unbacked enums are enumeration without a string or integer equivalent for each of its cases.

Unbacked enums are the default cases, and are implied when not mentioned. The opposite is backed enum.

.. code-block:: php
   
   <?php
   
   enum Ecclectic {
       case PHP;
       case ELEPHPANT;
       case SYNTAX_ERROR;
       case SPADE;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.enumerations.php>`__

Related : :ref:`Enumeration (enum) <enum>`, :ref:`Backed Enum <backed-enum>`, :ref:`BackedEnum <backedenum>`

Added in PHP 8.1
