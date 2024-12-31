.. _rounding:
.. meta::
	:description:
		Rounding: Rouding refers to the process of adjusting numerical values to a certain degree of precision.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Rounding
	:twitter:description: Rounding: Rouding refers to the process of adjusting numerical values to a certain degree of precision
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Rounding
	:og:type: article
	:og:description: Rouding refers to the process of adjusting numerical values to a certain degree of precision
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rounding.ini.html
	:og:locale: en


Rounding
--------

Rouding refers to the process of adjusting numerical values to a certain degree of precision. Most often, it means turning a float number into an integer, although there are roundings in various scales: rounding floats to 2 digits after the decimal separator; rounding to the nearest power of 10; rounding to the next unit, like Mb. 

Rounding has several techniques: that needs to be consistent across applications: rounding to the next integer; to the previous integer; truncating; rounding to the nearest even number; flooring or ceiling; etc.

.. code-block:: php
   
   <?php
   
   $pi = M_PI;
   
   print round($pi, 0); // 3
   
   ?>


See also `Up and Down Round values in PHP: ceil, floor and round functions: The ultimate tutorial 2024 <https://nestify.io/blog/up-down-round-values-in-php-ceil-floor-functions/>`_
