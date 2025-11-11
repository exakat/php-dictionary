.. _static-expression:
.. _static-constant-expression:
.. meta::
	:description:
		Static Expression: A static expression is an expression that is wholy defined at coding time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Static Expression
	:twitter:description: Static Expression: A static expression is an expression that is wholy defined at coding time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Static Expression
	:og:type: article
	:og:description: A static expression is an expression that is wholy defined at coding time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/static-expression.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Static Expression","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Nov 2025 09:53:01 +0000","dateModified":"Mon, 10 Nov 2025 09:53:01 +0000","description":"A static expression is an expression that is wholy defined at coding time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Static Expression.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Static Expression
-----------------

A static expression is an expression that is wholy defined at coding time. It is akin to hardcoded information.

.. code-block:: php
   
   <?php
   
   $alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
   
   // This is a static expression
   $letters = explode(',', $alphabet);
   
   ?>

