.. _seekableiterator:
.. meta::
	:description:
		SeekableIterator: ``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SeekableIterator
	:twitter:description: SeekableIterator: ``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SeekableIterator
	:og:type: article
	:og:description: ``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/seekableiterator.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SeekableIterator","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SeekableIterator.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SeekableIterator
----------------

``SeekableIterator`` extends the ``Iterator`` interface by adding a ``seek(int $offset)`` method to jump directly to a specific position without iterating through preceding elements.

It is implemented by ``ArrayIterator`` and ``SplFixedArray``. Attempting to seek to an invalid position should throw an ``OutOfBoundsException``.

.. code-block:: php
   
   <?php
   
       $iterator = new ArrayIterator(['a', 'b', 'c', 'd', 'e']);
       $iterator->seek(3);
       echo $iterator->current(); // d
   
   ?>


`Documentation <https://www.php.net/manual/en/class.seekableiterator.php>`__

See also `SeekableIterator Class <https://www.php.net/manual/en/class.seekableiterator.php>`_.

Related : :ref:`Iterator <iterator>`, :ref:`Interface <interface>`, :ref:`Standard PHP Library (SPL) <spl>`, :ref:`PHP Native Interfaces <php-interface>`, :ref:`SplSubject <splsubject>`

Added in PHP 5.1
