.. _fluent-interface:
.. _fluent:
.. _fluid-interface:
.. meta::
	:description:
		Fluent Interface: A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fluent Interface
	:twitter:description: Fluent Interface: A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fluent Interface
	:og:type: article
	:og:description: A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fluent-interface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fluent Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 26 Jan 2026 13:49:03 +0000","dateModified":"Mon, 26 Jan 2026 13:49:03 +0000","description":"A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fluent Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fluent Interface
----------------

A fluent interface, or fluid interface, is an object-oriented API whose design relies extensively on method chaining.

A fluent interface is not related to an interface : it may be implemented without them.

.. code-block:: php
   
   <?php
   
   class script {
       function hello() {
           print 'Hello ';
           return $this;
       }
   
       function word() {
           print 'word.';
           return $this;
       }
   }
   
   $script = new Script();
   
   $script->hello()->world();
   // 
   
   ?>


`Documentation <https://designpatternsphp.readthedocs.io/en/latest/Structural/FluentInterface/README.html>`__

See also https://en.wikipedia.org/wiki/Fluent_interface, https://news.ycombinator.com/item?id=16619171, https://ocramius.github.io/blog/fluent-interfaces-are-evil/

Related : :ref:`Final Keyword <final>`, :ref:`Interface <interface>`
