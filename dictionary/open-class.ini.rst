.. _open-class:
.. _monkey-patching:
.. _controlled-monkey-patching:
.. meta::
	:description:
		Open Class: Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Open Class
	:twitter:description: Open Class: Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Open Class
	:og:type: article
	:og:description: Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/open-class.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/open-class.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/open-class.ini.html","name":"Open Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:08:44 +0000","dateModified":"Thu, 09 Jul 2026 09:08:44 +0000","description":"Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Open Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Open Class
----------

Open classes allow external code to add or replace methods on an existing class after it has been defined, including built-in or third-party classes. This is sometimes called controlled monkey-patching when the language provides guard-rails to avoid unintended conflicts.

Languages such as Ruby expose this feature natively: any class can be reopened with ``class X ... end`` and new methods are merged in. The class remains open throughout the program's lifetime, so any part of the codebase can contribute methods.

PHP does not support open classes. Once a class is defined its set of methods is fixed. The closest approximations are:

+ Traits, which must be composed at the point of class definition, not after.
+ ``__call`` / ``__callStatic`` magic methods, which dispatch unknown method calls dynamically but without type-level visibility.
+ Wrapper or decorator classes that delegate to the original.

None of these allow retrofitting a method onto a class that has already been fully declared.

.. code-block:: php
   
   <?php
   
       // PHP does not support reopening a class.
       // The following is illustrative of what the feature would look like,
       // but it is a syntax error in PHP.
       
       class MyString {
           public function upper(): string { return strtoupper($this->value); }
       }
       
       // Hypothetical open-class syntax (NOT valid PHP):
       // open class MyString {
       //     public function lower(): string { return strtolower($this->value); }
       // }
   
   ?>


See also `Ruby open classes <https://ruby-doc.org/docs/ruby-doc-bundle/ProgrammingRuby/book/classes.html>`_.

Related : :ref:`Trait <trait>`, :ref:`Use In Traits <use-trait>`, :ref:`__call() Method <-__call>`, :ref:`__callStatic() Method <-__callstatic>`, :ref:`Mixin <mixin>`
