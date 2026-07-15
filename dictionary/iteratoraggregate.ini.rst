.. _iteratoraggregate:
.. meta::
	:description:
		IteratorAggregate: ``IteratorAggregate`` is an interface to create a custom iterator.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: IteratorAggregate
	:twitter:description: IteratorAggregate: ``IteratorAggregate`` is an interface to create a custom iterator
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: IteratorAggregate
	:og:type: article
	:og:description: ``IteratorAggregate`` is an interface to create a custom iterator
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/iteratoraggregate.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/iteratoraggregate.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/iteratoraggregate.ini.html","name":"IteratorAggregate","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 12 Jul 2026 20:08:02 +0000","dateModified":"Sun, 12 Jul 2026 20:08:02 +0000","description":"``IteratorAggregate`` is an interface to create a custom iterator","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/IteratorAggregate.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


IteratorAggregate
-----------------

``IteratorAggregate`` is an interface to create a custom iterator. 

It requires a single method, that returns an iterator that will be used with PHP native functions. 

It also suggest that several iterators may be merged in one, by creating a class that merges them.


.. code-block:: php
   
   <?php
   
       declare(strict_types=1);
       
       class MergedIteratorAggregate implements IteratorAggregate
       {
           /** @var iterable[] */
           private array $iterables = [];
       
           public function addIterable(iterable $iterable): void
           {
               $this->iterables[] = $iterable;
           }
       
           public function getIterator(): Traversable
           {
               foreach ($this->iterables as $iterable) {
                   // yield from works with arrays AND Traversable objects
                   yield from $iterable;
               }
           }
       }
       
       $x = new MergedIteratorAggregate();
       
       function foo() {
           yield rand(0, 10);
       
       }
       
       // Using iterator with generators
       $x->addIterable(foo());
       $x->addIterable(foo());
       foreach($x as $y) {
           print $y.PHP_EOL;
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.iteratoraggregate.php>`__

Related : :ref:`Interface <interface>`, :ref:`Iterator <iterator>`, :ref:`Traversable <traversable>`, :ref:`foreach() <foreach>`, :ref:`Standard PHP Library (SPL) <spl>`, :ref:`OuterIterator <outeriterator>`, :ref:`PHP Native Interfaces <php-interface>`
