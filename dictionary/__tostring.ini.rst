.. _-__tostring:
.. meta::
	:description:
		__toString() Method: ``__tostring()`` is a magic method: it is called when the object has to be converted into a string.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __toString() Method
	:twitter:description: __toString() Method: ``__tostring()`` is a magic method: it is called when the object has to be converted into a string
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __toString() Method
	:og:type: article
	:og:description: ``__tostring()`` is a magic method: it is called when the object has to be converted into a string
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__tostring.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__tostring.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__tostring.ini.html","name":"__toString() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 15:02:07 +0000","dateModified":"Sat, 11 Jul 2026 15:02:07 +0000","description":"``__tostring()`` is a magic method: it is called when the object has to be converted into a string","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__toString() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__toString() Method
-------------------

``__tostring()`` is a magic method: it is called when the object has to be converted into a string.

That way, it is possible to dynamically convert the object to a string and display it, or transmit it to another part of the application. 

``__toString()`` is called when ``strict_types`` is not active. Otherwise, passing an object to a string parameter yields an error: it requires an explicit type cast.

``__toString()`` is always called in concatenation, and string interpolation.

There is no magic method to convert an object to another type.

``__toString()`` must be declared ``public``, take no arguments, and return a ``string``: returning anything else triggers a fatal error, or a ``TypeError`` when a ``: string`` return type is declared.

Since PHP 8.0, any class that defines ``__toString()`` automatically implements the ``Stringable`` interface, without having to declare it explicitly.

Since PHP 7.4, exceptions may be thrown from within ``__toString()``; in earlier versions, doing so resulted in a fatal error.

.. code-block:: php
   
   <?php
   
       class X {
           private $r = 'S';
           private $p = 1;
           private $q = 2;
       
           // Checks the dictionary, or return 0
           function __toString() : string {
           
               // $this->r is used as is
               // $this->p is formatted with quotes
               // $this->q is converted to other values
               return "$this->r '$this->p' ".($this->q ? 'A' : 'B');
           }
       }
       
       echo new X;
       
       $y = (string) new X;
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `0 <`PHP __toString <https://www.phptutorial.net/php-oop/php-__tostring/>`_>`_.

Related : :ref:`strict_types <strict_types>`, :ref:`Magic Methods <magic-method>`, :ref:`Cast Operator <cast>`, :ref:`Concatenation \. <concatenation>`, :ref:`Stringable <stringable>`
