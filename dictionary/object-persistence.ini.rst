.. _object-persistence:
.. meta::
	:description:
		Object Persistence: Object persistence is the feature that keeps an object available between two different PHP requests, on a web server.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Object Persistence
	:twitter:description: Object Persistence: Object persistence is the feature that keeps an object available between two different PHP requests, on a web server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Object Persistence
	:og:type: article
	:og:description: Object persistence is the feature that keeps an object available between two different PHP requests, on a web server
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/object-persistence.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/object-persistence.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/object-persistence.ini.html","name":"Object Persistence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:10:56 +0000","dateModified":"Sat, 11 Jul 2026 09:10:56 +0000","description":"Object persistence is the feature that keeps an object available between two different PHP requests, on a web server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Object Persistence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Object Persistence
------------------

Object persistence is the feature that keeps an object available between two different PHP requests, on a web server.

In practice, this is achieved by saving a current object, with its properties and data, so that it may be reconstructed later. 

This is achieved natively with the ``serialize()`` and ``unserialize()`` functions. 

The text representation of the object may then be stored in various medium, such as files, sessions, database. 

It is also possible to achieve object persistence by using a different format, such as json, xml, csv, etc. The whole process works similarly to PHP's own process, though it has to be reconstructed entirely.

Object persistence may save the values of the object's property, such as scalars or arrays; or it may remove data, and reconstruct it later, such as database connections, composed objects or references.

.. code-block:: php
   
   <?php
   
   class User {
       public $name;
       public $email;
   
       public function __construct($name, $email) {
           $this->name = $name;
           $this->email = $email;
       }
   }
   
   // Create an object
   $user = new User('Damien', 'damien@exakat.io');
   
   // Serialize the object
   $serializedUser = serialize($user);
   
   // Save to a file (or database)
   file_put_contents('user.txt', $serializedUser);
   
   // Later, reconstruct the object
   $loadedUser = unserialize(file_get_contents('user.txt'));
   
   echo $loadedUser->name; // Outputs: Damien
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.serialization.php>`__

See also `Persist Large Object Graphs in PHP <https://dev.to/melia72/persist-php-objects-without-a-database-5fip>`_.

Related : :ref:`Session <session>`, :ref:`Persistence <persistence>`, :ref:`Snapshot <snapshot>`
