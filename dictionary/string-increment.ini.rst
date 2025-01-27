.. _string-increment:
.. meta::
	:description:
		String Increment: String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: String Increment
	:twitter:description: String Increment: String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: String Increment
	:og:type: article
	:og:description: String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/string-increment.ini.html
	:og:locale: en


String Increment
----------------

String increment is the PHP feature that applies the ``++`` pre- and post-increment operators on non-numeric strings. 

These strings last character's ASCII code is incremented by one, with possible extension of the string when the letters reach ``z`` and ``Z``. 

This feature is deprecated, and shall be removed in PHP 9. It has been moved to the ``str_increment()`` function, which has the same feature, though not implicit in the engine anymore.


.. code-block:: php
   
   <?php
   
   $s = 'y';
   echo ++$s; // z
   echo ++$s; // aa 
   echo ++$s; // ab
   
   $s = 'Y';
   echo ++$s; // Z
   echo ++$s; // AA
   echo ++$s; // AA
   
   ?>

