.. _print_r:
.. meta::
	:description:
		print_r(): print_r() is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: print_r()
	:twitter:description: print_r(): print_r() is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: print_r()
	:og:type: article
	:og:description: print_r() is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/print_r.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"print_r()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:18 +0000","dateModified":"Fri, 10 Jan 2025 09:46:18 +0000","description":"print_r() is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/print_r().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


print_r()
---------

print_r() is a built-in PHP function used for displaying the contents of an array or an object in a human-readable format. It's particularly helpful for debugging and understanding the structure of complex data structures in your PHP code. When you use print_r, it prints the array or object's values and structure to the browser or the console.


.. code-block:: php
   
   <?php
   
   $a = 1;
   
   print_r($a);
   /*
   Array
   (
       [0] => 1
   )
   */
   
   ?>


`Documentation <https://www.php.net/manual/en/function.print_r.php>`__

Related : :ref:`Assertions <assert>`, :ref:`Echo <echo>`, :ref:`Print <print>`, :ref:`var_dump() <var_dump>`
