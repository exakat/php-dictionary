.. _static-expression:
.. _static-constant-expression:
.. meta::
	:description:
		Static Expression: A static expression is an expression that is wholly defined at coding time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Expression
	:twitter:description: Static Expression: A static expression is an expression that is wholly defined at coding time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Expression
	:og:type: article
	:og:description: A static expression is an expression that is wholly defined at coding time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/static-expression.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/static-expression.ini.html","name":"Static Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:40:12 +0000","dateModified":"Mon, 06 Jul 2026 19:40:12 +0000","description":"A static expression is an expression that is wholly defined at coding time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Expression
-----------------

A static expression is an expression that is wholly defined at coding time. It is akin to hardcoded information. The opposite is dynamic expression.

A static expression is built with literals and operators. 

It is similar to a constant scalar expression, which is used by PHP to define constant with other constants. PHP does verify the constant scalar expressions at linting time, and exclude some operators from being used.


.. code-block:: php
   
   <?php
   
       $alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
   
       // This is a static expression
       $letters = explode(',', $alphabet);
       
       const A = 1 * 2; // a constant scalar expression
   
   ?>


`Documentation <https://www.php.net/manual/en/language.constants.php>`__

Related : :ref:`Dynamic Expression <dynamic-expression>`, :ref:`Type Inference <type-inference>`, :ref:`Constant Scalar Expression <constant-scalar-expression>`
