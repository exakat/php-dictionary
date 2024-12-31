.. _rangeexception:
.. meta::
	:description:
		RangeException: The RangeException exception is thrown if a value is out of range.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: RangeException
	:twitter:description: RangeException: The RangeException exception is thrown if a value is out of range
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: RangeException
	:og:type: article
	:og:description: The RangeException exception is thrown if a value is out of range
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/rangeexception.ini.html
	:og:locale: en


RangeException
--------------

The RangeException exception is thrown if a value is out of range. It usually means that a values overflows or underflows.

RangeException are defined by the SPL extension. It is use by the SplStack class.



.. code-block:: php
   
   <?php
   try {
       $var = new SplStack();
       $var->offsetSet(100,new DateTime('2000-01-01'));
   } catch(OutOfRangeException $e) {
       print $e->getMessage()."\n";
   }
   ?>


`Documentation <https://www.php.net/manual/en/class.rangeexception.php>`__

Related : :ref:`Exception <exception>`, :ref:`Overflow <overflow>`, :ref:`Underflow <underflow>`

Added in PHP 5.1
