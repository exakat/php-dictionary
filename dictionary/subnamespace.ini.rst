.. _subnamespace:
.. meta::
	:description:
		Subnamespaces: In PHP, there is no such notion as subnamespaces.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Subnamespaces
	:twitter:description: Subnamespaces: In PHP, there is no such notion as subnamespaces
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Subnamespaces
	:og:type: article
	:og:description: In PHP, there is no such notion as subnamespaces
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/subnamespace.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Subnamespaces","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 18:59:37 +0000","dateModified":"Mon, 24 Mar 2025 18:59:37 +0000","description":"In PHP, there is no such notion as subnamespaces","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Subnamespaces.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Subnamespaces
-------------

In PHP, there is no such notion as subnamespaces. There are namespaces, which may share the same prefix than other namespaces: yet, any collaboration stops at the similarity level. 

In particular, the fallback mechanisms for functions applies to the current namespace, and then, the global, rather than any intermediate namespace.

The analogy between PHP namespaces and a file system does not applies to subnamespaces.

.. code-block:: php
   
   <?php
   
   // also known at the global namespace
   namespace {
       function foo() {}
   }
   
   namespace A {
       function foo() {}
   }
   
   // sometimes refered to as subnamespace
   namespace A\B {
   
       // This calls the global namespace definition,
       // not the one in A 
       foo();
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.namespaces.rationale.php>`__

Related : :ref:`Namespaces <namespace>`
