.. _predefined-constant:
.. meta::
	:description:
		Predefined Constants: Predefined constants are PHP native constants, available at the start of the PHP engine.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Predefined Constants
	:twitter:description: Predefined Constants: Predefined constants are PHP native constants, available at the start of the PHP engine
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Predefined Constants
	:og:type: article
	:og:description: Predefined constants are PHP native constants, available at the start of the PHP engine
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/predefined-constant.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Predefined Constants","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"Predefined constants are PHP native constants, available at the start of the PHP engine","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Predefined Constants.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Predefined Constants
--------------------

Predefined constants are PHP native constants, available at the start of the PHP engine. 

Those constants are for internal usage, such as E_ALL, for error reporting, or STDOUT, for output. Some constants are providing information, such as PHP_VERSION's PHP version number. Others are meant to give a readable name to common values or arguments, such as DATE_RFC822. 

Other constants come from extensions : for example, the Math extension defines M_PI for the pi constant (3.14159...), libsodium defines SODIUM_CRYPTO_CORE_RISTRETTO255_SCALARBYTES, etc. Those are also predefined constants, although they depend on the compilation of PHP.

The list of all the defined constants is available with the ``get_defined_constants()`` function.

.. code-block:: php
   
   <?php
   
   echo \This is PHP \.PHP_VERSION;
   
   ?>


`Documentation <https://www.php.net/manual/en/reserved.constants.php>`__

See also https://dev.to/patricia1988hernandez2/understanding-php-predefined-constants-6db

Related : :ref:`Constants <constant>`
