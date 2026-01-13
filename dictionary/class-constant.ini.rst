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

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Static Constant","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 15:16:18 +0000","dateModified":"Fri, 27 Jun 2025 15:16:18 +0000","description":"Static constants are constants that are defined inside a class, interface, trait (since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Constant.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Constant
---------------

Static constants are constants that are defined inside a class, interface, trait (since PHP 8.2) and enumeration. 

Static constants have a visibility. Visibility may be ``public``, ``protected``, ``private``. By default, and for backward compatibility, a constant without a visibility is ``public``.

Static constants may also be overwritten by children classes. They can also use the ``final`` keyword, to avoid such behavior.

Static constants are defined at coding time, and cannot be changed later, not dynamically created. 

Static constant syntax is the same than for enumeration cases. 


.. code-block:: php
   
   <?php
   
   class x {
       public  const FOO = 1;
       private const BAR = 2;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.constants.php>`__

Related : :ref:`Visibility <visibility>`, :ref:`Final Keyword <final>`, :ref:`Constants In Trait <constant-in-trait>`, :ref:`Constants <constant>`, :ref:`Dynamic Constant <dynamic-constant>`, :ref:`Special Constant <special-constant>`
