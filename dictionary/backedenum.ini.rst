.. _backedenum:
.. meta::
	:description:
		BackedEnum: The ``BackedENum`` interface identifies an enumeration with a string or int value.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: BackedEnum
	:twitter:description: BackedEnum: The ``BackedENum`` interface identifies an enumeration with a string or int value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: BackedEnum
	:og:type: article
	:og:description: The ``BackedENum`` interface identifies an enumeration with a string or int value
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/backedenum.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"BackedEnum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"The ``BackedENum`` interface identifies an enumeration with a string or int value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/BackedEnum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


BackedEnum
----------

The ``BackedENum`` interface identifies an enumeration with a string or int value. It works only on backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::tryFrom()`` and ``enum::from()`` methods and the ``enum::$value`` property are available, to convert from and to scalars.

.. code-block:: php
   
   <?php
   
   enum E { case A;} 
   enum F: int { case B = 1;} 
   
   var_dump(E::A instanceof BackedEnum); // false
   var_dump(F::B instanceof BackedEnum); // true
   
   ?>


`Documentation <https://www.php.net/manual/en/class.backedenum.php>`__

See also https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372

Related : :ref:`Enumeration (enum) <enum>`, :ref:`UnitEnum <unitenum>`, :ref:`String <string>`, :ref:`integer <int>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`
