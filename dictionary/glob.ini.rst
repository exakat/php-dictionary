.. _glob:
.. meta::
	:description:
		glob(): glob() is a function that finds pathnames matching a pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: glob()
	:twitter:description: glob(): glob() is a function that finds pathnames matching a pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: glob()
	:og:type: article
	:og:description: glob() is a function that finds pathnames matching a pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/glob.ini.html
	:og:locale: en


glob()
------

glob() is a function that finds pathnames matching a pattern.

The glob() function is not related to the global keyword.


.. code-block:: php
   
   <?php
   foreach (glob("*.txt") as $filename) {
       echo "$filename size " . filesize($filename) . "\n";
   }
   ?>


`Documentation <https://www.php.net/manual/en/function.glob.php>`__
