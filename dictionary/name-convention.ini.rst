.. _name-convention:
.. _naming-convention:
.. meta::
	:description:
		Name Conventions: A naming convention is a way to write a name for a structure, with a specific format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Name Conventions
	:twitter:description: Name Conventions: A naming convention is a way to write a name for a structure, with a specific format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Name Conventions
	:og:type: article
	:og:description: A naming convention is a way to write a name for a structure, with a specific format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/name-convention.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/name-convention.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/name-convention.ini.html","name":"Name Conventions","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"A naming convention is a way to write a name for a structure, with a specific format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Name Conventions.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Name Conventions
----------------

A naming convention is a way to write a name for a structure, with a specific format.

There are technical conventions, which leads the PHP engine to refuse a name, such as starting a class name with a number.

There are developer conventions, which are a community practice, that fits within the technical conventions. For example, constants are written in upper case.

Here are technical conventions for PHP: 

+ Variables, properties: they start with a ``$`` sign, followed by a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``$[a-zA-Z_][a-zA-Z0-9_]*``
+ Functions, methods: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Classes, traits, enumerations, interfaces: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Constants, global or class: they start with a letter or underscore, then by letters, digits and underscore. There have no length limit. As a regex: ``[a-zA-Z_][a-zA-Z0-9_]*``
+ Array index: they must be valid strings or integers. 



.. code-block:: php
   
   <?php
   
       // here, foo is the name of a function
       function foo() {}
       
       // the name is used to call the function
       foo();
   
   ?>


`Documentation <https://www.php.net/manual/en/language.variables.basics.php>`__

Related : :ref:`Namespaces <namespace>`, :ref:`Anonymous <anonymous>`, :ref:`Case Sensitivity <case-sensitivity>`, :ref:`Namespace Name <namespace-name>`, :ref:`Structure <structure>`, :ref:`Word Combination <word-combinaison>`, :ref:`Close Naming <close-naming>`, :ref:`Naming Conflict <naming-conflict>`, :ref:`Reserved Names <reserved-name>`, :ref:`Semantics <semantics>`, :ref:`Static Constant <class-constant>`
