.. _sequence:
.. meta::
	:description:
		Sequence: A sequence is an ordered collection of values accessed by integer index starting from 0.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Sequence
	:twitter:description: Sequence: A sequence is an ordered collection of values accessed by integer index starting from 0
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Sequence
	:og:type: article
	:og:description: A sequence is an ordered collection of values accessed by integer index starting from 0
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/sequence.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Sequence","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 06 Jul 2026 19:33:00 +0000","dateModified":"Mon, 06 Jul 2026 19:33:00 +0000","description":"A sequence is an ordered collection of values accessed by integer index starting from 0","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Sequence.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Sequence
--------

A sequence is an ordered collection of values accessed by integer index starting from 0. PHP arrays natively act as sequences when keys are consecutive integers. The ``ds`` extension provides a dedicated ``Ds\Sequence`` interface implemented by ``Ds\Vector`` and ``Ds\Deque``.

Unlike sets or maps, sequences allow duplicate values and maintain insertion order.

.. code-block:: php
   
   <?php
   
   use Ds\Vector;
   
   $seq = new Vector([1, 2, 3, 4]);
   $seq->push(5);
   echo $seq->get(2); // 3
   echo $seq->count(); // 5
   
   ?>


`Documentation <https://www.php.net/manual/en/class.ds-sequence.php>`__

See also `Ds\Vector <https://www.php.net/manual/en/class.ds-vector.php>`_.

Related : :ref:`Data Structure <datastructure>`, :ref:`Collection <collection>`, :ref:`Array, [] <array>`, :ref:`List <list>`, :ref:`Data Structure <ds>`, :ref:`SplSubject <splsubject>`

Related packages : `php-ds/php-ds <https://packagist.org/packages/php-ds/php-ds>`_
