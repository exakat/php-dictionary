.. _micro-optimisation:
.. meta::
	:description:
		Micro-optimisation: A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of speed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Micro-optimisation
	:twitter:description: Micro-optimisation: A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of speed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Micro-optimisation
	:og:type: article
	:og:description: A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of speed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/micro-optimisation.ini.html
	:og:locale: en


Micro-optimisation
------------------

A micro-optimisation is a piece of code that performs better than another, yet brings only a small gain of speed.

Micro-optimisation should be done only for highly constraints systems, or application that deliver a high number of hits in short times : usually, it takes one to ten millions usage for the gain to be visible. 

Yet, micro-optimisations may be valuable on the long run, or as a good practice. 

It is often a pointless to discuss the micro-optimisation. It is a do or don't, and should raise a consensus, or left alone.


.. code-block:: php
   
   <?php
   
   // this is faster than calling 3 times echo
   echo 1, 2, 3;
   
   // This is slower, yet it doesn't speed up the process a lot
   echo 1;
   echo 2;
   echo 3;
   
   ?>


`Documentation <https://en.wiktionary.org/wiki/micro-optimization>`__

See also `25 Easy PHP7 Micro-Optimizations <https://blobfolio.com/2017/25-easy-php7-micro-optimizations/>`_, `What are compiler optimized internal PHP functions and should you import them via use statement? <https://tideways.com/profiler/blog/compiler-optimized-php-functions/>`_
