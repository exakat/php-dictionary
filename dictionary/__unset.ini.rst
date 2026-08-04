.. _-__unset:
.. meta::
	:description:
		__unset() Method: ``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __unset() Method
	:twitter:description: __unset() Method: ``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __unset() Method
	:og:type: article
	:og:description: ``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__unset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__unset.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__unset.ini.html","name":"__unset() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 03 Aug 2026 16:43:57 +0000","dateModified":"Mon, 03 Aug 2026 16:43:57 +0000","description":"``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__unset() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__unset() Method
----------------

``__unset()`` is a magic method: it is called when the code unsets, or removes a magic property. That way, it is possible to remove dynamically properties. Hardcoded properties are reset to their default state, and do not call this magic method.

The ``__unset()`` method is usually paired with the ``__isset()`` and ``__set()`` methods.

.. code-block:: php
   
   <?php
   
       class X {
           private $values = ['a' => 1,
                              'b' => 2,
                              ];
       
           function __unset($name) {
               unset($this->values[$name]);
           }
       
           function __isset($name) {
               return isset($this->values[$name]);
           }
       
           function __set($name, $value) {
               $this->values[$name] = $value;
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `__get(), __set(), __isset() and __unset() <https://riptutorial.com/php/example/3635/--get------set------isset---and---unset-->`_.

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__set() Method <-__set>`, :ref:`__isset() Method <-__isset>`, :ref:`Magic Constants <magic-constant>`, :ref:`Magic Property <magic-property>`
