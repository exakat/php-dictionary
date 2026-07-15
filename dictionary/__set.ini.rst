.. _-__set:
.. meta::
	:description:
		__set() Method: ``__set()`` is a magic method: it is called when writing data to inaccessible (protected or private) or non-existing properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __set() Method
	:twitter:description: __set() Method: ``__set()`` is a magic method: it is called when writing data to inaccessible (protected or private) or non-existing properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __set() Method
	:og:type: article
	:og:description: ``__set()`` is a magic method: it is called when writing data to inaccessible (protected or private) or non-existing properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__set.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__set.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__set.ini.html","name":"__set() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 19:48:48 +0000","dateModified":"Sun, 12 Jul 2026 19:48:48 +0000","description":"``__set()`` is a magic method: it is called when writing data to inaccessible (protected or private) or non-existing properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__set() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__set() Method
--------------

``__set()`` is a magic method: it is called when writing data to inaccessible (protected or private) or non-existing properties. It is used to give a value to the property.

That way, it is possible to create dynamically properties, without hardcoding them. 

The ``__set()`` method is usually paired with the ``__get()`` method.

The method signature is ``public function __set(string $name, mixed $value): void``. The ``$name`` argument is the name of the property being interacted with. The ``$value`` argument specifies the value the ``$name``-ed property should be set to. The return value of ``__set()`` is ignored because of the way PHP processes the assignment operator. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context.

.. code-block:: php
   
   <?php
   
       class X {
           private $values = ['a' => 1,
                              'b' => 2,
                              ];
       
           // Checks the dictionary, or return 0
           function __set($name, $value) {
               if (isset($this->values[$name])) {
                   $this->values[$name] = $value;
               }
               
               //do not set new values
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `PHP’s magic methods: Invoke, toString, get, set – Class wizardry in a nutshell <https://www.dinocajic.com/built-in-functions-invoke-tostring-get-set/>`_.

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__get() Method <-__get>`, :ref:`__isset() Method <-__isset>`, :ref:`Magic Constants <magic-constant>`, :ref:`__unset() Method <-__unset>`, :ref:`Magic Methods <magic-method>`, :ref:`Magic Property <magic-property>`, :ref:`Property Hook <property-hook>`
