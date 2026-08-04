.. _promoted-property:
.. meta::
	:description:
		Promoted Properties: Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Promoted Properties
	:twitter:description: Promoted Properties: Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Promoted Properties
	:og:type: article
	:og:description: Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/promoted-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/promoted-property.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/promoted-property.ini.html","name":"Promoted Properties","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 11:17:17 +0000","dateModified":"Tue, 04 Aug 2026 11:17:17 +0000","description":"Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Promoted Properties.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Promoted Properties
-------------------

Promoted properties are a class's arguments, which are declared as properties and automatically assigned their value at instantiation.

Introduced in version 8.0, constructor property promotion lets a visibility modifier, ``public``, ``protected``, or ``private``, and optionally a type declaration, be added directly to a constructor parameter. PHP then declares a property of the same name on the class and assigns it the parameter's value automatically, without any explicit ``$this->property = $property;`` line inside the constructor body.

This mainly removes boilerplate in classes whose constructor does nothing but assign incoming arguments to properties, such as data transfer objects or value objects. Promoted and non-promoted parameters can be mixed in the same constructor, but a promoted property cannot also have a separate property declaration elsewhere in the class, and the feature is not available in abstract constructors or interface methods, since those have no body to promote into.

.. code-block:: php
   
   <?php
       
       class X {
           function __construct($property, public int $promotedProperty) {
               $this->property = $property; // manual initialization
               
               // not initilization of $this->promotedProperty, as it is automatic
               echo $promotedProperty; // the variable version is available for further processing
               echo $this->promotedProperty; // the property is available immediately
           }
       }
       
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.decon.php#language.oop5.decon.constructor.promotion>`__

See also `Class constructor property promotion <https://php.watch/versions/8.0/constructor-property-promotion>`_.

Related : :ref:`Properties <property>`, :ref:`Class <class>`, :ref:`Constructor <constructor>`, :ref:`Property Type Declaration <type-declaration-property>`, :ref:`Var <var>`

Added in PHP 8.0
