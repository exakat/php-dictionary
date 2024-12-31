.. _static-expression:
.. meta::
	:description:
		Static Expression: A static expression is an expression that is wholy defined at coding time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Expression
	:twitter:description: Static Expression: A static expression is an expression that is wholy defined at coding time
	:twitter:creator: @exakat
	:og:title: Static Expression
	:og:type: article
	:og:description: A static expression is an expression that is wholy defined at coding time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-expression.ini.html
	:og:locale: en


Static Expression
-----------------

A static expression is an expression that is wholy defined at coding time. It is akin to hardcoded information.

.. code-block:: php
   
   <?php
   
   $alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
   
   // This is a static expression
   $letters = explode(',', $alphabet);
   
   ?>

