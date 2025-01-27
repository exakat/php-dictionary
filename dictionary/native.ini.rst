.. _native:
.. _native-function:
.. _native-class:
.. _native-constant:
.. _native-php:
.. _built-in:
.. _internal:
.. meta::
	:description:
		Native: A feature is called 'native' or 'built-in' when it is part of the standard installation of PHP.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Native
	:twitter:description: Native: A feature is called 'native' or 'built-in' when it is part of the standard installation of PHP
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Native
	:og:type: article
	:og:description: A feature is called 'native' or 'built-in' when it is part of the standard installation of PHP
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/native.ini.html
	:og:locale: en


Native
------

A feature is called 'native' or 'built-in' when it is part of the standard installation of PHP. For example, `.` (dot operator) or the `stdClass` class are native to PHP.

On the other hand, a feature is custom : that is, when defined by the developer or a PHP extension. 

.. code-block:: php
   
   <?php
   
   // This is a native function
   $s = strtolower($s);
   
   // This is not a native function : it comes from an extension
   $rar_arch = RarArchive::open('latest_winrar.rar');
   
   
   ?>


See also `The 100 PHP functions in 2022 <https://www.exakat.io/en/the-100-php-functions-in-2022/>`_
