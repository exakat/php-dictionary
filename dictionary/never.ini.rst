.. _never:
.. _never-type:
.. meta::
	:description:
		Never Type: ``never`` is a special return type that signals a method that never returns : it only dies or throws an exception.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Never Type
	:twitter:description: Never Type: ``never`` is a special return type that signals a method that never returns : it only dies or throws an exception
	:twitter:creator: @exakat
	:og:title: Never Type
	:og:type: article
	:og:description: ``never`` is a special return type that signals a method that never returns : it only dies or throws an exception
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/never.ini.html
	:og:locale: en


Never Type
----------

``never`` is a special return type that signals a method that never returns : it only dies or throws an exception.

.. code-block:: php
   
   <?php
   
   function headers() : never {
       headers('Location: https://www.exakat.io/');
       die();
   }
   
   ?>


`Documentation <https://wiki.php.net/rfc/noreturn_type>`__

See also `The "never" Return Type for PHP <https://betterprogramming.pub/the-never-return-type-for-php-802fbe2fa303>`_

Related : :ref:`Type System <type>`

Added in PHP 8.1+
