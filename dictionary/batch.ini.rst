.. _batch:
.. meta::
	:description:
		Batch: Batch processing refers to the treatment of several items at the same time, instead of one at a time.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Batch
	:twitter:description: Batch: Batch processing refers to the treatment of several items at the same time, instead of one at a time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Batch
	:og:type: article
	:og:description: Batch processing refers to the treatment of several items at the same time, instead of one at a time
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/batch.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Batch","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 08:57:40 +0000","dateModified":"Thu, 09 Jul 2026 08:57:40 +0000","description":"Batch processing refers to the treatment of several items at the same time, instead of one at a time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Batch.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Batch
-----

Batch processing refers to the treatment of several items at the same time, instead of one at a time.

Batch may mean all at the same time, or it may refers to processing the elements in several small groups. 

Processing in batch is efficient when the overhead of an operation is high per unit, such as storing one row at a time in a database, or when processing everything at once requires too much resources.

Processing in intermediate size batch may also be more efficient than processing everything by unit, or as a whole. It is related to the problem of ``the elephpant and the bananas``.

.. code-block:: php
   
   <?php
   
       // Processing the array one by one
       foreach($array as $a) {
           $database->store($a);
       }
       
       // Processing the array in one time
       $database->store($array);
       
       // Processing the array by batch of 10
       $chunks = array_chunk($array, 10);
       foreach($chunks as $chunk) {
           $database->store($chunk);
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Batch_processing>`__

See also `The Elephant and the Bananas <https://puzzlesquant.substack.com/p/the-elephant-and-the-bananas>`_.

Related : :ref:`Dataset <dataset>`, :ref:`N+1 Query Problem <n-query>`

Related packages : `yokai-php/batch <https://packagist.org/packages/yokai-php/batch>`_
