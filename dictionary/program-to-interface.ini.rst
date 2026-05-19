.. _program-to-interface:
.. meta::
	:description:
		Program To Interface: ``Program to an interface``` means the code should depend on abstractions, not concrete implementations.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Program To Interface
	:twitter:description: Program To Interface: ``Program to an interface``` means the code should depend on abstractions, not concrete implementations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Program To Interface
	:og:type: article
	:og:description: ``Program to an interface``` means the code should depend on abstractions, not concrete implementations
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/program-to-interface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Program To Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 19 May 2026 05:59:07 +0000","dateModified":"Tue, 19 May 2026 05:59:07 +0000","description":"``Program to an interface``` means the code should depend on abstractions, not concrete implementations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Program To Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Program To Interface
--------------------

``Program to an interface``` means the code should depend on abstractions, not concrete implementations. It should type with interfaces, not with concrete classes. 

It's one of the most important OOP design principles. Using interface allows for multiple classes of objects to be used, as long as they provide the right methods; it helps with testing, by allowing alternative mock objects; it introduce flexibility and reduce coupling.

.. code-block:: php
   
   <?php
   
       interface Customer {}
       
       class WebCustomer implements Customer {}
       
       // using an abstraction: different type of customers may be used here
       function invoice(Customer $customer) {}
   
       // using a concrete class: it cannot be swapped easily, unless with inheritance
       function bill(WebCustomer $customer) {}
   
   ?>


See also https://notes.sohag.pro/programming-to-interface-not-to-implementation-a-php-developers-journey

Related : :ref:`Interface <interface>`, :ref:`Concrete Class <concrete>`, :ref:`Flexibility <flexibility>`, :ref:`Coupling <coupling>`
