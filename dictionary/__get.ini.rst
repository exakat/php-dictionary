.. _-__get:
.. meta::
	:description:
		__get() Method: ``__get()`` is a magic method: it is utilized for reading data from inaccessible (protected or private) or non-existing properties.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __get() Method
	:twitter:description: __get() Method: ``__get()`` is a magic method: it is utilized for reading data from inaccessible (protected or private) or non-existing properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __get() Method
	:og:type: article
	:og:description: ``__get()`` is a magic method: it is utilized for reading data from inaccessible (protected or private) or non-existing properties
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__get.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__get.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__get.ini.html","name":"__get() Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 19:49:03 +0000","dateModified":"Sun, 12 Jul 2026 19:49:03 +0000","description":"``__get()`` is a magic method: it is utilized for reading data from inaccessible (protected or private) or non-existing properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/__get() Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


__get() Method
--------------

``__get()`` is a magic method: it is utilized for reading data from inaccessible (protected or private) or non-existing properties.

That way, it is possible to create dynamically properties, without hardcoding them.

The ``__get()`` method is usually paired with the ``__set()`` method.

The method signature is ``public function __get(string $name): mixed``. The ``$name`` argument is the name of the property being interacted with. 

The method must be declared as ``public``, or it is implicit. Arguments cannot be passed by reference. Property overloading only works in object context and will not be triggered in static context. 

``__get()`` is never called when chaining assignments together like ``$a = $obj->b = 8;``. PHP will not call an overloaded method from within the same overloaded method: writing ``return $this->foo`` inside of ``__get()`` will return ``null`` and raise an ``E_WARNING`` if there is no ``foo`` property defined, rather than calling ``__get()`` a second time.

.. code-block:: php
   
   <?php
   
       class X {
           private $values = ['a' => 1,
                              'b' => 2,
                              ];
       
           // Checks the dictionary, or return 0
           function __get($name) {
               if (isset($this->values[$name])) {
                   return $this->values[$name];
               }
               
               return 0;
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php>`__

See also `What are magic methods and how to use them in PHP ? <https://www.geeksforgeeks.org/what-are-magic-methods-and-how-to-use-them-in-php/>`_.

Related : :ref:`Magic Methods <magicmethod>`, :ref:`__set() Method <-__set>`, :ref:`__isset() Method <-__isset>`, :ref:`Magic Constants <magic-constant>`, :ref:`Magic Methods <magic-method>`, :ref:`Magic Property <magic-property>`, :ref:`Property Hook <property-hook>`
