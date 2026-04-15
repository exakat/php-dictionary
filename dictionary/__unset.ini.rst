.. _-__unset:
.. meta::
	:description:
		__unset() Method: ``__unset()`` is a magic method: it is called when a magic property is being removed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __unset() Method
	:twitter:description: __unset() Method: ``__unset()`` is a magic method: it is called when a magic property is being removed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __unset() Method
	:og:type: article
	:og:description: ``__unset()`` is a magic method: it is called when a magic property is being removed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__unset.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"__unset() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"``__unset()`` is a magic method: it is called when a magic property is being removed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__unset() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__unset() Method
----------------

``__unset()`` is a magic method: it is called when a magic property is being removed. That way, it is possible to remove dynamically properties.

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

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__set() Method <-__set>`, :ref:`__isset() Method <-__isset>`, :ref:`Magic Constants <magic-constant>`
