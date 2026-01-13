.. _underscore:
.. meta::
	:description:
		Underscore: Underscore is the ``_`` character.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Underscore
	:twitter:description: Underscore: Underscore is the ``_`` character
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Underscore
	:og:type: article
	:og:description: Underscore is the ``_`` character
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/underscore.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Underscore","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 09 Nov 2025 17:46:56 +0000","dateModified":"Sun, 09 Nov 2025 17:46:56 +0000","description":"Underscore is the ``_`` character","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Underscore.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Underscore
----------

Underscore is the ``_`` character. 

The underscore is used in integers to make them readable when the number of digit grows. 

It is also used in double, to identify PHP magic methods, such as ``__get``, ``__set``, ``__call``, etc. 

It was also used in earlier PHP versions to identify procted methods. This practice is rare nowadays. 

Underscored used to be added to class and method names, to keep them unique. This is now a task for namespaces.

It is used as prefix with PHP superglobal variables, such as ``$_GET``, ``$_POST``. 

Underscore is a valid name for a variable, a function, a constant. It is not valid anymore for classes and similar, since PHP 8.4. It is now reserved for future features. There is also a PHP native function called ``_()``, which belongs to the ``gettext`` extension.

.. code-block:: php
   
   <?php
   
   $million = 1_000_000;
   
   class _ {
       const _ = '_';
       
       function _() {
           _::$_ = _::_; 
       }
       
       private static $_ = 1;
   
   }
   
   ?>


Related : :ref:`False <false>`, :ref:`Comparison <comparison>`, :ref:`DivisionByZeroError <divisionbyzeroerror>`
