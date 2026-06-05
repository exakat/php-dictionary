.. _identity:
.. meta::
	:description:
		Identity: Identity in software has several related but distinct meanings:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Identity
	:twitter:description: Identity: Identity in software has several related but distinct meanings:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Identity
	:og:type: article
	:og:description: Identity in software has several related but distinct meanings:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/identity.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Identity","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:47:46 +0000","dateModified":"Fri, 05 Jun 2026 08:47:46 +0000","description":"Identity in software has several related but distinct meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Identity.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Identity
--------

Identity in software has several related but distinct meanings:

+ Identity function: the function that returns its only argument, without any modification. It is a base for null pattern, and is useful when a callable is required, but should be a no operation.
+ Object identity: two variables refer to the same object in memory. This is tested with the ``===`` operator on objects, or with ``spl_object_id()``. Two objects may be equal in value but not identical in identity.
+ User identity: the set of attributes that uniquely identify a user or entity in a system: username, email, unique ID. Identity is established by identification and verified by authentication.
+ Domain identity: in Domain-Driven Design, an entity is defined by its identity rather than its attributes. Two ``User`` objects with the same ``$id`` are the same entity even if other properties differ, while two ``Money`` value objects with the same amount are equal without having an identity.

PHP applications manage identity through unique IDs, session tokens, and authentication tokens such as JWTs.

.. code-block:: php
   
   <?php
   
       $a = new stdClass();
       $b = $a;        // same identity
       $c = clone $a;  // different identity, same values
       
       var_dump($a === $b); // true  — same identity
       var_dump($a === $c); // false — different identity
       
       echo spl_object_id($a); // unique integer ID for $a
   
   ?>


See also `Identity vs Equality in PHP <https://stitcher.io/blog/comparing-dates-php>`_ and `DDD: Entities vs Value Objects <https://enterprisecraftsmanship.com/posts/entity-vs-value-object-the-ultimate-list-of-differences/>`_.

Related : :ref:`Identification <identification>`, :ref:`Authentication <authentication>`, :ref:`Identity Comparison <identity-comparison>`, :ref:`JSON Web Token (JWT) <jwt>`, :ref:`Universally Unique IDentifier (UUID) <uuid>`, :ref:`Object <object>`, :ref:`Clone <clone>`, :ref:`Domain Design Driven (DDD) <ddd>`, :ref:`Noop <no-operation>`, :ref:`Callables <callable>`, :ref:`Functions <function>`, :ref:`Noop <noop>`
