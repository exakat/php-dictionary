.. _fully-qualified-name:
.. _fqn:
.. _fqcn:
.. meta::
	:description:
		Fully Qualified Name: A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function : it includes its namespace name.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fully Qualified Name
	:twitter:description: Fully Qualified Name: A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function : it includes its namespace name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fully Qualified Name
	:og:type: article
	:og:description: A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function : it includes its namespace name
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fully-qualified-name.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fully Qualified Name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 17 Jan 2026 06:56:36 +0000","dateModified":"Sat, 17 Jan 2026 06:56:36 +0000","description":"A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function : it includes its namespace name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fully Qualified Name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fully Qualified Name
--------------------

A fully qualified name, or a fully qualified class name, is a unique identifier for the PHP name of a constant, class, trait, interface, enum or function : it includes its namespace name.

PHP names may be fully qualified, unqualified or relative.

.. code-block:: php
   
   <?php
   
   namespace A {
       const B = 1;
       
       function foo() {
           // This is a local name : the namespace A is optional. 
           // The fully qualified name is \A\B;
           echo B;
           
           // This is a fully qualified name
           echo \A\B;
       }
   }
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.rules.php>`__

Related : :ref:`Use <use>`, :ref:`Namespaces <namespace>`, :ref:`Relative Types <relative-types>`

Added in PHP 5.3
