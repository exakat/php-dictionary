.. _autovivification:
.. meta::
	:description:
		Autovivification: Autovivification is the automatic creation of an array when a value is dereferenced.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Autovivification
	:twitter:description: Autovivification: Autovivification is the automatic creation of an array when a value is dereferenced
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Autovivification
	:og:type: article
	:og:description: Autovivification is the automatic creation of an array when a value is dereferenced
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/autovivification.ini.html
	:og:locale: en


Autovivification
----------------

Autovivification is the automatic creation of an array when a value is dereferenced.

Autovivification from scalars, including true, is deprecated since PHP 7.4 and removed in PHP 8.0. 

Autovivification from false is deprecated since PHP 8.1. 

Autovivification from null is valid.

.. code-block:: php
   
   <?php
   
   $a = false;
   $a[1] = 2;
   
   $b = null;
   $b[3] = 4;
   
   ?>


`Documentation <https://www.php.net/manual/en/migration81.deprecated.php#migration81.deprecated.core.autovivification-false>`__

See also `Autovivification <https://en.wikipedia.org/wiki/Autovivification>`__
