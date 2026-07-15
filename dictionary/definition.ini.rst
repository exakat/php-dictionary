.. _definition:
.. meta::
	:description:
		Definition: A definition is the description of a particular constant, function, method, property, class, trait, interface or enum.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Definition
	:twitter:description: Definition: A definition is the description of a particular constant, function, method, property, class, trait, interface or enum
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Definition
	:og:type: article
	:og:description: A definition is the description of a particular constant, function, method, property, class, trait, interface or enum
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/definition.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/definition.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/definition.ini.html","name":"Definition","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Jun 2026 21:24:07 +0000","dateModified":"Fri, 19 Jun 2026 21:24:07 +0000","description":"A definition is the description of a particular constant, function, method, property, class, trait, interface or enum","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Definition.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Definition
----------

A definition is the description of a particular constant, function, method, property, class, trait, interface or enum. 

A variable also has a definition, also called an initialisation: variables have no formal definition. They use an unconditional assignation to do so.

The definition is also called a declaration. The declaration must happen before usage. 

Definitions happens in custom code, in libraries or in extensions. 

There are functions dedicated to listing defined elements: ``get_declared_constants()``, ``get_declared_traits()``, ``get_declared_interfaces()``, ``get_declared_classes()``, ``get_class_vars()`` and ``get_class_methods()``.

.. code-block:: php
   
   <?php
   
       //function declaration
       function foo() {
           print 'OK';
       }
       
       // call to the function foo
       foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.functions.php>`__

Related : :ref:`Call <call>`, :ref:`Class Autoloading <autoload>`, :ref:`Declaration <declaration>`, :ref:`Initialisation <initialisation>`
