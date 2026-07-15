.. _protobuf:
.. _protocol-buffers:
.. meta::
	:description:
		Protocol Buffers: ``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Protocol Buffers
	:twitter:description: Protocol Buffers: ``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Protocol Buffers
	:og:type: article
	:og:description: ``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/protobuf.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/protobuf.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/protobuf.ini.html","name":"Protocol Buffers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 14 Jul 2026 05:37:24 +0000","dateModified":"Tue, 14 Jul 2026 05:37:24 +0000","description":"``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Protocol Buffers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Protocol Buffers
----------------

``protobuf`` is a PIE extension implementing Protocol Buffers, Google's language-neutral, binary serialization format. Messages are defined once in a ``.proto`` schema file, then compiled by the ``protoc`` compiler into PHP classes, generated getters, setters, and serialization code, that the extension accelerates at runtime.

Protobuf-encoded messages are smaller and faster to encode and decode than JSON or XML, because the format is binary and schema-driven: field names are not repeated in every message, only compact field tags are. This makes it a natural fit for high-throughput RPC, most notably as the wire format used by gRPC, and for systems that need forward- and backward-compatible schema evolution, since fields can be added or deprecated without breaking older readers.

The extension provides a native C implementation of the generated message classes; without it, the pure-PHP runtime from the ``google/protobuf`` Composer package is used instead, which works but is considerably slower for large messages.

.. code-block:: php
   
   <?php
   
       // person.proto defines:
       //   message Person { string name = 1; int32 id = 2; }
       // compiled with: protoc --php_out=. person.proto
   
       $person = new Person();
       $person->setName('Ada');
       $person->setId(1);
   
       $binary = $person->serializeToString();
   
       $decoded = new Person();
       $decoded->mergeFromString($binary);
       echo $decoded->getName();
   
   ?>


`Documentation <https://protobuf.dev/getting-started/phptutorial/>`__

Related : :ref:`gRPC (Google Remote Procedure Call) <grpc>`, :ref:`JavaScript Object Notation (JSON) <json>`, :ref:`Serialization <serialization>`, :ref:`PHP Installer For Extensions (PIE) <pie>`

Related packages : `google/protobuf <https://packagist.org/packages/google/protobuf>`_
