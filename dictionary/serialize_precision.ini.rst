.. _serialize_precision:
.. meta::
	:description:
		serialize_precision: The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: serialize_precision
	:twitter:description: serialize_precision: The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: serialize_precision
	:og:type: article
	:og:description: The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/serialize_precision.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"serialize_precision","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 13:51:32 +0000","dateModified":"Fri, 05 Jun 2026 13:51:32 +0000","description":"The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/serialize_precision.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


serialize_precision
-------------------

The ``serialize_precision`` PHP ini directive controls the number of significant digits used when serializing float values via ``serialize()`` and ``json_encode()``.

Since PHP 7.1, the default is ``-1``, which uses the minimum number of digits needed to uniquely represent each float (G format), ensuring round-trip fidelity. A positive integer value uses that many significant digits instead, which may introduce rounding.

.. code-block:: php
   
   <?php
   
   // With serialize_precision = -1 (default since PHP 7.1)
   $value = 3.141592653589793;
   echo json_encode($value);
   // outputs: 3.141592653589793
   
   // With serialize_precision = 14
   // outputs: 3.1415926535898
   
   ?>


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.serialize-precision>`__

See also `serialize_precision directive <https://www.php.net/manual/en/ini.core.php#ini.serialize-precision>`_ and `precision <https://www.php.net/manual/en/ini.core.php#ini.precision>`_.

Related : :ref:`Directives <directive>`, :ref:`Floating Point Numbers <float>`, :ref:`precision <precision>`, :ref:`Serialization <serialization>`, :ref:`SplSubject <splsubject>`
