.. _class-constant:
.. _static-constant:
.. _interface-constant:
.. _trait-constant:
.. _enum-constant:
.. meta::
	:description:
		Static Constant: Static constants are constants that are defined inside a class, interface, trait (since PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Constant
	:twitter:description: Static Constant: Static constants are constants that are defined inside a class, interface, trait (since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Constant
	:og:type: article
	:og:description: Static constants are constants that are defined inside a class, interface, trait (since PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/class-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Static Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 05:22:49 +0000","dateModified":"Mon, 13 Apr 2026 05:22:49 +0000","description":"Static constants are constants that are defined inside a class, interface, trait (since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Constant
---------------

Static constants are constants that are defined inside a class, interface, trait (since PHP 8.2) and enumeration. 

Static constants have a visibility. Visibility may be ``public``, ``protected``, ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by children classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, not dynamically created. 

Static constant syntax is the same than for enumeration cases.

.. code-block:: php
   
   <?php
   
       class X {
           public  const FOO = 1;
           private const BAR = 2;
           private const string TYPE = 'valid';
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

See also https://pangea.ai/resources/everything-you-should-know-about-php-const-in-class, https://www.codewithharry.com/tutorial/php-class-constants, https://dev.to/ahmet_gedik778845/php-83-typed-constants-in-production-2cpa

Related : :ref:`Visibility <visibility>`, :ref:`Final Keyword <final>`, :ref:`Constants In Trait <constant-in-trait>`, :ref:`Constants <constant>`, :ref:`Dynamic Constant <dynamic-constant>`, :ref:`Special Constant <special-constant>`, :ref:`Class Constant Syntax <class-constant-syntax>`, :ref:`define() <define>`, :ref:`Literal <literal>`, :ref:`New In Initializers <new-in-initializer>`
