.. _unitenum:
.. meta::
	:description:
		UnitEnum: The ``UnitEnum`` interface identifies any enumeration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: UnitEnum
	:twitter:description: UnitEnum: The ``UnitEnum`` interface identifies any enumeration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: UnitEnum
	:og:type: article
	:og:description: The ``UnitEnum`` interface identifies any enumeration
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/unitenum.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"UnitEnum","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 27 Jun 2025 16:45:41 +0000","dateModified":"Fri, 27 Jun 2025 16:45:41 +0000","description":"The ``UnitEnum`` interface identifies any enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/UnitEnum.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


UnitEnum
--------

The ``UnitEnum`` interface identifies any enumeration. It works on both enumerations and backed-enumerations.

This interface is only available for type checks, and cannot be implemented by another class.

This interface ensure the ``enum::cases()`` method is available, that lists all cases in that enumeration.


.. code-block:: php
   
   <?php
   
   enum E { case A;} 
   enum F: int { case B = 1;} 
   
   var_dump(E::A instanceof UnitEnum); // true
   var_dump(F::B instanceof UnitEnum); // true
   
   ?>


`Documentation <https://www.php.net/manual/en/class.unitenum.php>`__

See also https://medium.com/@kczereczon/usage-php-unitenum-cases-in-testing-cf178a5ac372

Related : :ref:`Enumeration (enum) <enum>`, :ref:`BackedEnum <backedenum>`, :ref:`Interface <interface>`, :ref:`PHP Native Interfaces <php-interface>`
