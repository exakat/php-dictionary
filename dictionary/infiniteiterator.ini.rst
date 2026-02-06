.. _infiniteiterator:
.. meta::
	:description:
		InfiniteIterator:  The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: InfiniteIterator
	:twitter:description: InfiniteIterator:  The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: InfiniteIterator
	:og:type: article
	:og:description:  The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/infiniteiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"InfiniteIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Feb 2026 10:38:09 +0000","dateModified":"Thu, 05 Feb 2026 10:38:09 +0000","description":" The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/InfiniteIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


InfiniteIterator
----------------

 The InfiniteIterator allows one to infinitely iterate over an iterator without having to manually rewind the iterator upon reaching its end.

Infinite iterator works with other iterators. The loop may be broken, as usual, with a ``break`` keyword.

.. code-block:: php
   
   <?php
   
   $versions = [1, 2, 3, 4, 5, 7, 8];
   
   $infinite = new InfiniteIterator(new ArrayIterator($versions));
   foreach ($infinite as $value) {
       print $value\n;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.infiniteiterator.php>`__

Related : :ref:`Loops <loop>`, :ref:`Infinite Loop <infinite-loop>`, :ref:`Break <break>`
