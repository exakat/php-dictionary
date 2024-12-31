.. _constant-in-trait:
.. meta::
	:description:
		Constants In Trait: Constants were added to trait in PHP 8.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Constants In Trait
	:twitter:description: Constants In Trait: Constants were added to trait in PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Constants In Trait
	:og:type: article
	:og:description: Constants were added to trait in PHP 8
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/constant-in-trait.ini.html
	:og:locale: en


Constants In Trait
------------------

Constants were added to trait in PHP 8.3. Before, they were not allowed. 

After PHP 8.3, they are added to the host class, with less precedence than the host own class, but higher precedence than the host parent's one.

.. code-block:: php
   
   <?php
   
   trait t {
       private const A = 1;
   }
   
   ?>


Related : :ref:`Traits <trait>`, :ref:`Static Constant <class-constant>`
