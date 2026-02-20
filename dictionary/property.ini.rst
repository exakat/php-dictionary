.. _property:
.. _member:
.. meta::
	:description:
		Properties: Class properties are variables, local to an object or a class.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Properties
	:twitter:description: Properties: Class properties are variables, local to an object or a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Properties
	:og:type: article
	:og:description: Class properties are variables, local to an object or a class
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Feb 2026 22:38:08 +0000","dateModified":"Thu, 19 Feb 2026 22:38:08 +0000","description":"Class properties are variables, local to an object or a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Properties
----------

Class properties are variables, local to an object or a class.

They might have visibility, chosen among : public (default), protected and private.

They might have a default value. By default it is null.

They might have a type, since PHP 7.4

They might be readonly, for properties which are only set once, and cannot be modified. 

They might be static, and not related to an object, but to a class. 

Property should be uniquely defined in a class. They may be redefined in children or parent when the visibility allows it.

Properties are also called members. 

.. code-block:: php
   
   <?php
   
   class X {
       private $property = 1;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php>`__

See also https://tutorials.supunkavinda.blog/php/oop-properties

Related : :ref:`Visibility <visibility>`, :ref:`static <static>`, :ref:`Readonly <readonly>`, :ref:`Attribute <attribute>`, :ref:`Default Value <default-value>`, :ref:`Magic Property <magic-property>`, :ref:`Dynamic Properties <dynamic-property>`, :ref:`Property Hook <property-hook>`, :ref:`Asymmetric Visibility <set-visibility>`, :ref:`Type System <type>`, :ref:`Asymmetric Visibility <asymmetric-visibility>`, :ref:`Data Container <data-container>`, :ref:`Static Property <static-property>`, :ref:`stdclass <stdclass>`, :ref:`Typed Property <typed-property>`, :ref:`Method <method>`, :ref:`Readable <readable>`, :ref:`Virtual Property <virtual-property>`, :ref:`Writable <writable>`
