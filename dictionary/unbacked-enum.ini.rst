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


Unbacked Enum
-------------

Unbacked enums are enumeration without a string or integer equivalent for each of its cases.

Unbacked enums are the default cases, and are implied when not mentionned. The opposite is backed enum.

.. code-block:: php
   
   <?php
   
   enum Ecclectic {
       case PHP;
       case ELEPHPANT;
       case SYNTAX_ERROR;
       case SPADE = 'spade';
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.enumerations.php>`__

Related : :ref:`Enumeration (enum) <enum>`, :ref:`Backed Enum <backed-enum>`

Added in PHP 8.1
