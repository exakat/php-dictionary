.. _predefined-constant:
.. meta::
	:description:
		Predefined Constants: Predefined constants are PHP native constants, available at the start of the PHP engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Predefined Constants
	:twitter:description: Predefined Constants: Predefined constants are PHP native constants, available at the start of the PHP engine
	:twitter:creator: @exakat
	:og:title: Predefined Constants
	:og:type: article
	:og:description: Predefined constants are PHP native constants, available at the start of the PHP engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/predefined-constant.ini.html
	:og:locale: en


Predefined Constants
--------------------

Predefined constants are PHP native constants, available at the start of the PHP engine. 

Those constants are for internal usage, such as E_ALL, for error reporting, or STDOUT, for output. Some constants are providing information, such as PHP_VERSION's PHP version number. Others are meant to give a readable name to common values or arguments, such as DATE_RFC822. 

Other constants come from extensions : for example, the Math extension defines M_PI for the pi constant (3.14159...), libsodium defines SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES, etc. Those are also predefined constants, although they depend on the compilation of PHP.


.. code-block:: php
   
   <?php
   
   echo "This is PHP ".PHP_VERSION;
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.constants.php>`__

See also `Understanding PHP Predefined Constants <https://dev.to/patricia1988hernandez2/understanding-php-predefined-constants-6db>`_

Related : :ref:`Constants <constant>`
