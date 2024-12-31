.. _anonymous-constant:
.. meta::
	:description:
		Anonymous Constant: A constant may be anonymous.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Anonymous Constant
	:twitter:description: Anonymous Constant: A constant may be anonymous
	:twitter:creator: @exakat
	:og:title: Anonymous Constant
	:og:type: article
	:og:description: A constant may be anonymous
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/anonymous-constant.ini.html
	:og:locale: en


Anonymous Constant
------------------

A constant may be anonymous. In that case, it is reduced to its value, and it is a literal. 

There is no explicit code for an anonymous constant: it is the simple application of the concept to an existing structure.

.. code-block:: php
   
   <?php
   	// a constant
   	const A = 'abc';
   	
   	// an anonymous constant
   	'def';
   
   ?>


Related : :ref:`Anonymous <anonymous>`
