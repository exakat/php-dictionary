.. _-__wakeup:
.. meta::
	:description:
		__wakeup() method: __wakeup() is a magic method : it is called an object is being deserialized, so that the object may be restored to its working condition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: __wakeup() method
	:twitter:description: __wakeup() method: __wakeup() is a magic method : it is called an object is being deserialized, so that the object may be restored to its working condition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: __wakeup() method
	:og:type: article
	:og:description: __wakeup() is a magic method : it is called an object is being deserialized, so that the object may be restored to its working condition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/-__wakeup.ini.html
	:og:locale: en


__wakeup() method
-----------------

__wakeup() is a magic method : it is called an object is being deserialized, so that the object may be restored to its working condition. 

In particular, some resources, such as database connections or files cannot be serialized. They should be closed, stored as a path in __sleep(), and reopened later with __wakeup().

The __wakeup() method is usually paired with the __sleep() method. 



.. code-block:: php
   
   <?php
   
   class x {
   	private $file;
   	private $path;
   
   	function __sleep() {
   		fclose($this->path);
   	}
   
   	function __wakeup() {
   		$this->path = fopen($this->path, 'r');
   	}
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.magic.php#object.sleep>`__

See also `PHP __sleep And __wakeup Magic Methods: How And When To Use Them? <https://medium.com/@lukaspereyra8/php-sleep-and-wakeup-magic-methods-how-and-when-to-use-them-938591584bdc>`_, `__sleep() and __wakeup() <https://riptutorial.com/php/example/4604/--sleep---and---wakeup-->`_

Related : :ref:`Magic Methods <magic-method>`, :ref:`__sleep() method <-__sleep>`
