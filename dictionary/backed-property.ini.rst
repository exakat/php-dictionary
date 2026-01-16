.. _backed-property:
.. meta::
	:description:
		Backed Property: A backed property is a property with a hook, that actually uses the eponymous property to store the value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Backed Property
	:twitter:description: Backed Property: A backed property is a property with a hook, that actually uses the eponymous property to store the value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Backed Property
	:og:type: article
	:og:description: A backed property is a property with a hook, that actually uses the eponymous property to store the value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backed-property.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Backed Property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"A backed property is a property with a hook, that actually uses the eponymous property to store the value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Backed Property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Backed Property
---------------

A backed property is a property with a hook, that actually uses the eponymous property to store the value.

The opposite of a backed property is a virtual property.

.. code-block:: php
   
   <?php
   
   class X {
       public $p { get => $this->p; }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.property-hooks.php>`__

Related : :ref:`Virtual Property <virtual-property>`, :ref:`Backed <backed>`
