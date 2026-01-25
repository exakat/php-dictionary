.. _shallow-clone:
.. meta::
	:description:
		Shallow Clone: A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Shallow Clone
	:twitter:description: Shallow Clone: A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Shallow Clone
	:og:type: article
	:og:description: A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/shallow-clone.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Shallow Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 22 Jan 2026 12:47:20 +0000","dateModified":"Thu, 22 Jan 2026 12:47:20 +0000","description":"A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Shallow Clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Shallow Clone
-------------

A shallow clone is an object cloning, where the cloned object keeps the same object properties as the original object. This is a fast way to share data between objects.

Shallow cloning is the default behavior in PHP.

.. code-block:: php
   
   <?php
   
   class Dog {
       private $name = '';
       private Address $address;
   
       function __construct(string $name, Address $address) {
           $this->address->setName($address);
       }
       
       function moves(string $address) {
           $this->address->setName($address);
       }
   
       // no __clone method
   }
   
   $spike = new Dog('Spike', new Address('Acme city'));
   $medor = clone $spike;
   $medor->moves('Upstate farm');
   
   // spike and medor are still at the same address
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also https://linuxhint.com/cloning_objects_php/

Related : :ref:`Magic Methods <magic-method>`, :ref:`__clone() Method <-__clone>`, :ref:`Deep Clone <deep-clone>`
