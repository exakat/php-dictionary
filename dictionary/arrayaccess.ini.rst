.. _arrayaccess:
.. meta::
	:description:
		ArrayAccess: ArrayAccess is an interface that allows objects to be accessed like arrays using square brackets, similar to how you access elements in a regular array.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ArrayAccess
	:twitter:description: ArrayAccess: ArrayAccess is an interface that allows objects to be accessed like arrays using square brackets, similar to how you access elements in a regular array
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: ArrayAccess
	:og:type: article
	:og:description: ArrayAccess is an interface that allows objects to be accessed like arrays using square brackets, similar to how you access elements in a regular array
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/arrayaccess.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"ArrayAccess","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"ArrayAccess is an interface that allows objects to be accessed like arrays using square brackets, similar to how you access elements in a regular array","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/ArrayAccess.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


ArrayAccess
-----------

ArrayAccess is an interface that allows objects to be accessed like arrays using square brackets, similar to how you access elements in a regular array. When a class implements the ArrayAccess interface, it must provide methods to define how the object behaves when accessed like an array.

+ offsetExists($offset): This method is called when you check if a specific offset exists in the object. It should return a boolean value (true if the offset exists, false otherwise).

+ offsetGet($offset): This method is called when you try to retrieve the value associated with a specific offset. It should return the value at that offset.

+ offsetSet($offset, $value): This method is called when you try to set a value for a specific offset. It takes two parameters: the offset and the value to be set.

+ offsetUnset($offset): This method is called when you attempt to unset or remove a value associated with a specific offset.

Implementing ArrayAccess can be useful to create custom data structures or objects that mimic array behavior, providing a convenient and consistent way to work with data.

ArrayAccess is often complemented with Countable, to make the object yet even more like an array.

.. code-block:: php
   
   <?php
   
   class LimitedArray implements ArrayAccess {
       public $a = 1;
       public $b = 1;
       public $c = 1;
   
       public function offsetSet($offset, $value): void {
           if (in_array($offset, ['a', 'b', 'c'])) {
               $this->$offset = $value;
           }
           // else ignore
       }
   
       public function offsetExists($offset): bool {
           return in_array($offset, ['a', 'b', 'c']);
       }
   
       public function offsetUnset($offset): void {
           // do nothing
       }
   
       public function offsetGet($offset): mixed {
           if (in_array($offset, ['a', 'b', 'c'])) {
   	        return $this->$offset;
           }
       }
   }
   
   $limitedArray = new LimitedArray();
   
   $limitedArray['a'] = 3;
   $limitedArray['d'] = 13;
   
   echo $limitedArray['a']; // 3
   echo $limitedArray['d']; // null
   
   ?>


`Documentation <https://www.php.net/manual/en/class.arrayaccess.php>`__
