.. _primitive-obsession:
.. meta::
	:description:
		Primitive Obsession: Primitive Obsession a biais in the way the code is written.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Primitive Obsession
	:twitter:description: Primitive Obsession: Primitive Obsession a biais in the way the code is written
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Primitive Obsession
	:og:type: article
	:og:description: Primitive Obsession a biais in the way the code is written
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/primitive-obsession.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Primitive Obsession","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Sep 2025 20:00:18 +0000","dateModified":"Fri, 19 Sep 2025 20:00:18 +0000","description":"Primitive Obsession a biais in the way the code is written","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Primitive Obsession.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Primitive Obsession
-------------------

Primitive Obsession a biais in the way the code is written. It happens when the code uses too many primitive types, even to represent complex concepts.

.. code-block:: php
   
   <?php
   
   class Person
   {
       public string $id;
   
       public string $firstName;
       public string $lastName;
   
       public string $address;
       public string $postCode;
       public string $city;
       public string $country;
   }
   
   ?>


See also https://refactoring.guru/smells/primitive-obsession

Related : :ref:`Scalar Types <scalar-type>`
