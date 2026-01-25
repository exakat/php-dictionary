.. _concrete:
.. meta::
	:description:
		Concrete Class: PHP has abstract classes and methods: the contrary to ``abstract`` is concrete.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Concrete Class
	:twitter:description: Concrete Class: PHP has abstract classes and methods: the contrary to ``abstract`` is concrete
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Concrete Class
	:og:type: article
	:og:description: PHP has abstract classes and methods: the contrary to ``abstract`` is concrete
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/concrete.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Concrete Class","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:19 +0000","dateModified":"Sun, 25 Jan 2026 20:46:19 +0000","description":"PHP has abstract classes and methods: the contrary to ``abstract`` is concrete","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Concrete Class.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Concrete Class
--------------

PHP has abstract classes and methods: the contrary to ``abstract`` is concrete. This is the default state of a method or class, when it has a code block with implementation. It also has no specific keyword to designate it.

.. code-block:: php
   
   <?php
   abstract class AbstractClass
   {
       // Concrete method
       public function printOut() {
           print $this->getValue() . "\n";
       }
   
       // Method without an implementation
       abstract protected function getValue();
   }
   
   ?>


Related : :ref:`Abstract Keyword <abstract>`
