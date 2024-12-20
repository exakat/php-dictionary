.. _static-expression:

Static Expression
-----------------

A static expression is an expression that is wholy defined at coding time. It is akin to hardcoded information.

.. code-block:: php
   
   <?php
   
   $alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
   
   // This is a static expression
   $letters = explode(',', $alphabet);
   
   ?>

