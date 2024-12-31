.. _datetime-trap:
.. meta::
	:description:
		Datetime Trap: When using Datetime objects, be aware that methods that returns the modified date is actually returning the object itself.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Datetime Trap
	:twitter:description: Datetime Trap: When using Datetime objects, be aware that methods that returns the modified date is actually returning the object itself
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Datetime Trap
	:og:type: article
	:og:description: When using Datetime objects, be aware that methods that returns the modified date is actually returning the object itself
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/datetime-trap.ini.html
	:og:locale: en


Datetime Trap
-------------

When using Datetime objects, be aware that methods that returns the modified date is actually returning the object itself. This means that calculating a difference with ``diff()``, ``add()``, ``modify()`` methods also changes the underlying object. 

This trap is also set in packages that are build on top of Datetime. 

To avoid this trap, use the DatetimeImmutable class. This class is not modified by those methods, but returns a new object each time.



.. code-block:: php
   
   <?php
   
   $today = new Datetime('now');
   print $today->format('d-m-Y').PHP_EOL;
   // 24-11-2023
   
   $tomorrow = $today->add(new DateInterval('P1D'));
   print $tomorrow->format('d-m-Y').PHP_EOL;
   // 25-11-2023 (as expected)
   
   $twoDaysLater = $today->add(new DateInterval('P2D'));
   print $twoDaysLater->format('d-m-Y');
   // 27-11-2023 (one day overshoot!)
   
   ?>


`Documentation <https://www.php.net/datetime>`__

See also `I just fell into the Date Trap in PHP <https://twitter.com/CodeWithKyrian/status/1727832972303143151>`_, `PHP DateTime difference – it’s a trap! <https://aiocollective.com/blog/php-datetime-difference-trap/>`_, `What’s all this “immutable date” stuff, anyway? <https://medium.com/@codebyjeff/whats-all-this-immutable-date-stuff-anyway-72d4130af8ce>`_

Related packages : `nesbot/carbon <https://packagist.org/packages/nesbot/carbon>`_, `cakephp/chronos <https://packagist.org/packages/cakephp/chronos>`_
