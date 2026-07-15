.. _base:
.. meta::
	:description:
		Base: The term ``base`` has two common meanings:.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Base
	:twitter:description: Base: The term ``base`` has two common meanings:
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Base
	:og:type: article
	:og:description: The term ``base`` has two common meanings:
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/base.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/base.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/base.ini.html","name":"Base","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 14:01:42 +0000","dateModified":"Wed, 15 Jul 2026 14:01:42 +0000","description":"The term ``base`` has two common meanings:","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Base.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Base
----

The term ``base`` has two common meanings:

+ Base class: a parent class from which other classes inherit. A base class defines common attributes and behavior shared by all subclasses. A base class is declared with ``class`` and extended with ``extends``. Abstract base classes use the ``abstract`` keyword to enforce method implementation in subclasses
+ Numeric base: the number of unique digits in a positional numeral system. PHP natively supports base 2, binary, base 8, octal, base 10, decimal, and base 16, hexadecimal integer literals. The ``base_convert()``, ``bindec()``, ``octdec()``, ``decoct()``, ``hexdec()``, and ``dechex()`` functions convert between bases
+ Base 64 encoding: an encoding method a binary-to-text encoding scheme that represents binary data in an ASCII string format.


.. code-block:: php
   
   <?php
   
       // Base class (parent class)
       abstract class Shape {
           abstract public function area(): float;
       }
       
       class Circle extends Shape {
           public function __construct(private float $radius) {}
           public function area(): float { return M_PI * $this->radius ** 2; }
       }
       
       // Numeric base conversions
       echo base_convert('ff', 16, 10); // 255  (hex -> decimal)
       echo base_convert('255', 10, 2); // 11111111  (decimal -> binary)
       
       echo 0b11111111; // 255  (binary literal)
       echo 0xFF;       // 255  (hex literal)
       echo 0377;       // 255  (octal literal)
   
   ?>


`Documentation <https://www.php.net/manual/en/function.base-convert.php>`__

Related : :ref:`Abstract Class <abstract-class>`, :ref:`Inheritance <inheritance>`, :ref:`Numeric Base <numeric-base>`, :ref:`Base Class <base-class>`, :ref:`Binary <binary>`, :ref:`Hexadecimal Integer <hexadecimal-integer>`, :ref:`Base 64 Encoding <base64>`
