.. _use:
.. meta::
	:description:
		Use: The use operator has three distinct usages.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use
	:twitter:description: Use: The use operator has three distinct usages
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Use
	:og:type: article
	:og:description: The use operator has three distinct usages
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/use.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Use","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 29 Aug 2025 20:22:21 +0000","dateModified":"Fri, 29 Aug 2025 20:22:21 +0000","description":"The use operator has three distinct usages","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Use.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Use
---

The use operator has three distinct usages. 

The use operator allows the import and aliasing of fully qualified names (such as classes, interfaces, constants, ...)  in the current namespace. 

When `use` used inside a class or a trait, it imports a trait and its methods and properties. It is also the place to solve naming conflicts.

When `use` is used with a closure, it imports the listed variables in the closure, from the defining environment.

.. code-block:: php
   
   <?php
   
   namespace \My\Space {
       // class importation with use
       use \Some\Other\Space\aClass as A;
       
       class B {
           // trait importation of use
           use MyTrait; 
       
           function foo() {
               $a = 1;
               // use imports the variable $a in the closure. Its value is accessible at execution time.
               $closure = function ($b) use ($a) { return $a + $b;}
           }
       }
       // class importation with use
       use \Some\Other\Space\aClass as A;
       
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

Related : :ref:`Fully Qualified Name <fully-qualified-name>`, :ref:`Use Alias <use-alias>`, :ref:`Closure <closure>`, :ref:`Trait <trait>`, :ref:`Use In Traits <use-trait>`, :ref:`Fully Qualified Name <fqn>`, :ref:`Class Aliases <class-alias>`, :ref:`Class Operator <class-operator>`, :ref:`class_alias() <class_alias>`, :ref:`Insteadof <insteadof>`
