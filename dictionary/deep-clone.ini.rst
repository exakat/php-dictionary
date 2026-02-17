.. _deep-clone:
.. meta::
	:description:
		Deep Clone: A deep clone is an object cloning, where the cloned object also clone its own object properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Deep Clone
	:twitter:description: Deep Clone: A deep clone is an object cloning, where the cloned object also clone its own object properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Deep Clone
	:og:type: article
	:og:description: A deep clone is an object cloning, where the cloned object also clone its own object properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/deep-clone.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Deep Clone","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 09 Feb 2026 16:33:03 +0000","dateModified":"Mon, 09 Feb 2026 16:33:03 +0000","description":"A deep clone is an object cloning, where the cloned object also clone its own object properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Deep Clone.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Deep Clone
----------

A deep clone is an object cloning, where the cloned object also clone its own object properties. This prevents the original object to share data with the cloned one, yet it is slower to process.

Deep cloning is achieved by using the ``__clone`` magic method. By default, PHP does shallow clone.

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
   
       function __clone() {
           $this->address = clone $this->address;
       }
   }
   
   $spike = new Dog('Spike', new Address('Acme city'));
   $medor = clone $spike;
   $medor->moves('Upstate farm');
   
   // spike and medor do now share the same address
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.cloning.php>`__

See also https://linuxhint.com/cloning_objects_php/

Related : :ref:`Magic Methods <magic-method>`, :ref:`__clone() Method <-__clone>`, :ref:`Shallow Clone <shallow-clone>`
