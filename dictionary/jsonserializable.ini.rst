.. _jsonserializable:
.. meta::
	:description:
		JsonSerializable: The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: JsonSerializable
	:twitter:description: JsonSerializable: The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: JsonSerializable
	:og:type: article
	:og:description: The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/jsonserializable.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"JsonSerializable","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 19 Jun 2025 05:05:12 +0000","dateModified":"Thu, 19 Jun 2025 05:05:12 +0000","description":"The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/JsonSerializable.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


JsonSerializable
----------------

The ``JsonSerializable`` interface is used to customize how an object is serialized into JSON using ``json_encode()``.

``JsonSerializable`` simplifies the conversion to JSON by introducing a method to prepare the data. These data may be based on the properties of the object, but they may also change these names, create virtual and hide existing properties; the values may also be formatted to fit any specification.

There is no reverse method, where a JSON representation is converted into an object. It has to be done in a custome method.

.. code-block:: php
   
   <?php
   
   class Point implements JsonSerializable {
       private int $x;
       private int $y;
   
       public function __construct(
           private int $x, 
           private int $y,
           ) {
       }
   
       public function jsonSerialize(): mixed {
           return [
               'latitude' => $this->x,
               'longitude' => $this->y
           ];
       }
   }
   
   $point = new Point(10, 20);
   echo json_encode($point); // {latitude:10,longitude:20}
   
   ?>


`Documentation <https://www.php.net/manual/en/class.jsonserializable.php>`__

See also https://www.sitepoint.com/use-jsonserializable-interface/, https://theiconic.tech/the-problem-with-jsonserializable-and-doctrine-when-using-symfony-ad760e986b04

Related : :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Serialization <serialization>`
