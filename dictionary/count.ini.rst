.. _count:
.. meta::
	:description:
		count(): count() is a native PHP function, that returns the number of elements in the argument.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: count()
	:twitter:description: count(): count() is a native PHP function, that returns the number of elements in the argument
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: count()
	:og:type: article
	:og:description: count() is a native PHP function, that returns the number of elements in the argument
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/count.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"count()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:22 +0000","dateModified":"Sun, 25 Jan 2026 20:46:22 +0000","description":"count() is a native PHP function, that returns the number of elements in the argument","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/count().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


count()
-------

count() is a native PHP function, that returns the number of elements in the argument. 

count() is basically meant to work on arrays: it returns the number of elements in the array. count() is also able to run recursively, when provided the second argument. 

By extension, count() works on classes of objects that extends the ``countable`` interface.

It is a Fatal error to call count() on an object that can't be counted. Use ``is_countable()`` or type validation to make sure the data may be counted.

.. code-block:: php
   
   <?php
   
   echo count([1,2,3]); // 3
   
   echo count([1,2,3, [4, 5]], COUNT_RECURSIVE); // 6 == 4 + 2 
   
   class X implements Countable {
       function count() : int { 
           // arbitrary count
           return 7;
       }
   }
   
   echo count(new X); // 7
   
   ?>


`Documentation <https://www.php.net/manual/en/function.count.php>`__

Related : :ref:`Countable Interface <countable>`
