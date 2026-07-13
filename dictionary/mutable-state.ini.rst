.. _mutable-state:
.. meta::
	:description:
		Mutable State: Mutable state refers to data that can be changed after it is created.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Mutable State
	:twitter:description: Mutable State: Mutable state refers to data that can be changed after it is created
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Mutable State
	:og:type: article
	:og:description: Mutable state refers to data that can be changed after it is created
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/mutable-state.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Mutable State","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:17:16 +0000","dateModified":"Sun, 12 Jul 2026 20:17:16 +0000","description":"Mutable state refers to data that can be changed after it is created","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Mutable State.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Mutable State
-------------

Mutable state refers to data that can be changed after it is created.

Most objects and arrays are mutable by default. Mutable state can lead to bugs in concurrent environments and makes code harder to reason about.

PHP offers several mechanisms to create immutable state:
+ ``readonly`` properties, since PHP 8.1+
+ Immutable classes, like ``DateTimeImmutable``
+ Final classes to prevent modification via inheritance.

.. code-block:: php
   
   <?php
   
       // Mutable state
       class User {
           public string $name;
       }
       
       $user = new User();
       $user->name = 'Alice';
       $user->name = 'Bob'; // Mutable
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Immutable_object>`__

Related : :ref:`State <state>`, :ref:`Immutable <immutable>`, :ref:`Readonly <readonly>`, :ref:`Properties <property>`, :ref:`Side Effect <side-effect>`
