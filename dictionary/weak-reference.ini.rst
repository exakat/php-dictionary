.. _weak-reference:
.. meta::
	:description:
		Weak References: Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Weak References
	:twitter:description: Weak References: Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Weak References
	:og:type: article
	:og:description: Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/weak-reference.ini.html
	:og:locale: en


Weak References
---------------

Weak references allow the programmer to retain a reference to an object which does not prevent the object from being destroyed. They are useful for implementing cache like structures. 

.. code-block:: php
   
   <?php
   
   $obj = new stdClass;
   $weakref = WeakReference::create($obj);
   
   var_dump($weakref->get());
   unset($obj);
   
   var_dump($weakref->get());
   // NULL
   
   ?>


`Documentation <https://www.php.net/manual/en/class.weakreference.php>`__

See also `PHP 8.0 feature focus: Weak maps <https://platform.sh/blog/php-80-feature-focus-weak-maps/>`_, `WeakReferences <https://www.cmuir.co.nz/post/weakreferences/>`_

Related : :ref:`References <reference>`

Added in PHP 7.4
