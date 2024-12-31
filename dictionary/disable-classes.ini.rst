.. _disable-classes:
.. meta::
	:description:
		Disable Classes: This directive disables the provided list of classes in the `php.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Disable Classes
	:twitter:description: Disable Classes: This directive disables the provided list of classes in the `php
	:twitter:creator: @exakat
	:og:title: Disable Classes
	:og:type: article
	:og:description: This directive disables the provided list of classes in the `php
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/disable-classes.ini.html
	:og:locale: en


Disable Classes
---------------

This directive disables the provided list of classes in the `php.ini`.

Once disabled, the classes may be created, via an extension or in the code of PHP. Custom classes may still be created and used. 


.. code-block:: php
   
   // in php.ini
   
   disable_classes="mysqli,socket,soapserver" 
   
   


`Documentation <https://www.php.net/manual/en/ini.core.php#ini.disable-classes>`__

Related : :ref:`Disable Functions <disable-functions>`, :ref:`php.ini <php.ini>`
