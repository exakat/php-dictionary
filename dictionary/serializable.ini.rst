.. _serializable:
.. meta::
	:description:
		Serializable: ``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Serializable
	:twitter:description: Serializable: ``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Serializable
	:og:type: article
	:og:description: ``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/serializable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Serializable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:52:45 +0000","dateModified":"Wed, 21 Jan 2026 08:52:45 +0000","description":"``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Serializable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Serializable
------------

``Serializable`` is a PHP native interface, that makes implementing classes use custom code to serialize and unserialized their objects.

.. code-block:: php
   
   <?php
   class X implements Serializable {
       public function __construct(private string $data) {    }
   
       public function serialize() {
           // simple serialization, as there is only one property
           return bz2compress($this->data);
       }
   
       public function unserialize($data) {
           // simple serialization, as there is only one property
           $this->data = bz2uncompress($data);
       }
   }
   
   $object = new X('This is my data, and it may be very long.');
   $serialized = serialize($object); 
   
   var_dump($serialized);// Some binary code
   
   $newObject = unserialize($serialized);
   
   var_dump($newObject->getData()); // The original 
   ?>


`Documentation <https://www.php.net/manual/en/class.serializable.php>`__

Related : :ref:`Serialization <serialization>`
