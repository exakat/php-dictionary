.. _var:
.. meta::
	:description:
		Var: var keyword for introducing PHP properties in classes.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Var
	:twitter:description: Var: var keyword for introducing PHP properties in classes
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Var
	:og:type: article
	:og:description: var keyword for introducing PHP properties in classes
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/var.ini.html
	:og:locale: en


Var
---

var keyword for introducing PHP properties in classes. It is now replaced by visibility (public, but possibly private or protected), and is not recommended. 

.. code-block:: php
   
   <?php
   
   class x {
       var $y;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.properties.php#language.oop5.properties>`__

Related : :ref:`Visibility <visibility>`, :ref:`Protected Visibility <protected>`, :ref:`Private Visibility <private>`, :ref:`Public Visibility <public>`
