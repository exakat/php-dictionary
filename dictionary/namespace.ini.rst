.. _namespace:
.. meta::
	:description:
		Namespaces: Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Namespaces
	:twitter:description: Namespaces: Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Namespaces
	:og:type: article
	:og:description: Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/namespace.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Namespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 20 Jan 2026 07:21:26 +0000","dateModified":"Tue, 20 Jan 2026 07:21:26 +0000","description":"Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Namespaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Namespaces
----------

Namespaces are a way to encapsulate items like classes, interfaces, enumerations, traits, functions, and constants, preventing naming conflicts between different parts of a program. They help organize and structure code, especially in larger projects where multiple developers may be contributing.

A namespace may not be called ``namespace``. Otherwise, its name follows the same regex than other PHP structures: ``^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$``.

.. code-block:: php
   
   <?php
   
   namespace a {
       class x {
       }
   }
   
   namespace b {
       // a second class x, although distinct from the previous one
       class x {
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.rationale.php>`__

See also https://medium.com/@bluznierca1/understanding-php-namespaces-organising-your-code-ba2590c5e529

Related : :ref:`Use Alias <use-alias>`, :ref:`Fully Qualified Name <fully-qualified-name>`, :ref:`Subnamespaces <subnamespace>`

Added in PHP 5.3
