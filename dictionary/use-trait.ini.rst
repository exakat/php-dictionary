.. _use-trait:
.. meta::
	:description:
		Use In Traits: ``use`` is a keyword for traits and classes: it imports another trait in the current structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Use In Traits
	:twitter:description: Use In Traits: ``use`` is a keyword for traits and classes: it imports another trait in the current structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Use In Traits
	:og:type: article
	:og:description: ``use`` is a keyword for traits and classes: it imports another trait in the current structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/use-trait.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Use In Traits","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 20 Aug 2025 21:10:04 +0000","dateModified":"Wed, 20 Aug 2025 21:10:04 +0000","description":"``use`` is a keyword for traits and classes: it imports another trait in the current structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Use In Traits.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Use In Traits
-------------

``use`` is a keyword for traits and classes: it imports another trait in the current structure. 

The import federates all the defined structures in both traits and classes: the methods, the properties and the constants. 

There may be naming conflicts between the imported traits and the host structure: the conflicts may be between an import and the host structure, or between two distinct imported traits.

In that case, there is a mechanism to resolve the conflicts: the ``insteadof`` keyword allows the host to choose between several competing implementation. 

The ``as`` keyword is also available to create aliases from the import structures. These aliases shall not introduce new naming conflicts.

.. code-block:: php
   
   <?php
   
   trait T {
       function foo() {}
   }
   
   trait T2 {
       use T {
           T::foo as goo; // aliasing
           T::foo insteadof foo; // aliasing
           T2::foo as hoo; // aliasing
       }
       
       function foo() {}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.importing.php>`__

Related : :ref:`Use <use>`, :ref:`Trait <trait>`
