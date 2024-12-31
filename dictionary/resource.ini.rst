.. _resource:
.. meta::
	:description:
		resource: A resource is a special type of data, holding a reference to an external resource.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: resource
	:twitter:description: resource: A resource is a special type of data, holding a reference to an external resource
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: resource
	:og:type: article
	:og:description: A resource is a special type of data, holding a reference to an external resource
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/resource.ini.html
	:og:locale: en


resource
--------

A resource is a special type of data, holding a reference to an external resource. Resources are created and used by special functions. 

Resources are only used with their dedicated functions. It is not possible to modify them in any other way.

Resources, in general, are being removed from PHP code and more recent versions tend to rely less on them and more on objects. 

There is a list of PHP resources available in the docs.


.. code-block:: php
   
   <?php
   
   $fp = fopen('/tmp/test.txt', 'r+');
   var_dump(is_resource($fp));
   
   ?>


`Documentation <https://www.php.net/manual/en/language.types.resource.php>`__

See also `List of Resource Types <https://www.php.net/manual/en/resource.php>`_
