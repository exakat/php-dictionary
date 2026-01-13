.. _iterator:
.. meta::
	:description:
		Iterator: An iterator is an object which can be traversed with a foreach() loop.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Iterator
	:twitter:description: Iterator: An iterator is an object which can be traversed with a foreach() loop
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Iterator
	:og:type: article
	:og:description: An iterator is an object which can be traversed with a foreach() loop
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Iterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"An iterator is an object which can be traversed with a foreach() loop","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Iterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Iterator
--------

An iterator is an object which can be traversed with a foreach() loop. 

`Iterator` is an interface, which shall be implemented by objects. There are also a list of default iterators in the SPL extension.

An iterator may be turned into an array, with the iterator_to_array() function.


.. code-block:: php
   
   
   <?php
   
   class myIterator implements Iterator { /**/ }
   
   $it = new myIterator;
   
   foreach($it as $key => $value) {
       var_dump($key, $value);
       echo "\n";
   }
   
   ?>
   


`Documentation <https://www.php.net/manual/en/class.iterator.php>`__

See also `Modern PHP Developer - Iterator <https://startutorial.com/view/modern-php-developer-iterator>`_, `Iterator in PHP <https://refactoring.guru/design-patterns/iterator/php/example>`_

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`Traversal <traversal>`, :ref:`Foreach <foreach>`
