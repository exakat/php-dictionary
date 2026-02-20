.. _null:
.. meta::
	:description:
		Null: ``null`` is a special data type that represents a variable with no value or an undefined value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Null
	:twitter:description: Null: ``null`` is a special data type that represents a variable with no value or an undefined value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Null
	:og:type: article
	:og:description: ``null`` is a special data type that represents a variable with no value or an undefined value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/null.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Null","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 18 Feb 2026 19:27:14 +0000","dateModified":"Wed, 18 Feb 2026 19:27:14 +0000","description":"``null`` is a special data type that represents a variable with no value or an undefined value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Null.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Null
----

``null`` is a special data type that represents a variable with no value or an undefined value. It is used to indicate the absence of a value. In other words, when a variable is assigned the value null, it means that the variable exists but has no valid data. 

``null`` may be used as a default value for variables, parameter or properties that are expected to hold some value later but don't have a value assigned initially. It was also be used to unset a variable and free up memory, when using the operator ``(unset)``. 

There is also a design pattern called Null Pattern, although its main goal is to remove usage of null and replace it with an actual object.

.. code-block:: php
   
   <?php
   
   $a = null;
   
   function foo(?string $s = null) {}
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.null.php>`__

See also https://peakd.com/hive-168588/@crell/much-ado-about-null, https://afilina.com/null-hell, https://www.arhohuttunen.com/avoiding-unnecessary-null-checks/

Related : :ref:`Nullable <nullable>`, :ref:`Null Pattern <nullpattern>`, :ref:`Authentication <authentication>`, :ref:`Empty <empty>`, :ref:`Overflow <overflow>`, :ref:`Underflow <underflow>`, :ref:`Void <void>`, :ref:`Default Value <default-value>`, :ref:`json_decode() <json_decode>`, :ref:`Return Value <return-value>`, :ref:`Value <value>`
