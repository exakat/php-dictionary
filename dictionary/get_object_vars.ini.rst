.. _get_object_vars:
.. meta::
	:description:
		get_object_vars(): ``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: get_object_vars()
	:twitter:description: get_object_vars(): ``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: get_object_vars()
	:og:type: article
	:og:description: ``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/get_object_vars.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"get_object_vars()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 02 Apr 2026 11:24:38 +0000","dateModified":"Thu, 02 Apr 2026 11:24:38 +0000","description":"``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/get_object_vars().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


get_object_vars()
-----------------

``get_object_vars()`` is a PHP native function, which returns an array with the object properties as index, and their related respective values. 

``get_object_vars()`` does not return static properties, which are class level, and not object level. 

``get_object_vars()`` does not return uninitialized properties. It returns all existing properties, may they be specified in the class definition, or not. It returns the trait and the parent properties.

``get_object_vars()`` respect visibility, so its result may differ depending on its calling location: ``private`` properties are only visible when ``get_object_vars()`` is called from within the class itself; ``protected`` may be visibile when called from child; otherwise, only ``public`` properties are returned.

Constants are not returned by that function. 

``get_object_vars()`` is very similar to the ``(array)`` cast operator. It is very different from the ``get_class_vars()`` method, which returns the properties as defined in the class, and including the static properties. It is also possible do use ``json_encode()`` followed by ``json_decode()``, though some data might get lost in the translation proceses.


.. code-block:: php
   
   <?php
   
   trait T {
       public $w = '3';
   }
   
   class X {
       use T;
       
       private int $p = 1;
       private int $q = 2;
       public int $r = 3;
       public int $s = 4;
       public int $t;
       
       static string $v = 'abc';
       
       function __construct() {
           unset($this->s);
   
           $this->u = 6;
       }
   }
   
   print_r(get_object_vars(new x));
   
   /**
   Array
   (
       [r] => 3
       [w] => 3
       [u] => 6
   )
   */
   ?>


`Documentation <https://www.php.net/manual/en/function.get-object-vars.php>`__

See also https://www.elated.com/object-oriented-php-autoloading-serializing-and-querying-objects/, https://www.stechies.com/convert-php-object-array/

Related : , :ref:`Reflection <reflection>`, :ref:`Visibility <visibility>`, :ref:`Properties <property>`, :ref:`Cast Operator <cast>`, , :ref:`Static Property <static-property>`
