.. _coroutine:
.. meta::
	:description:
		Coroutine: Coroutines are methods whose execution may be suspended and resumed.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Coroutine
	:twitter:description: Coroutine: Coroutines are methods whose execution may be suspended and resumed
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Coroutine
	:og:type: article
	:og:description: Coroutines are methods whose execution may be suspended and resumed
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/coroutine.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Coroutine","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:12:26 +0000","dateModified":"Sat, 11 Jul 2026 09:12:26 +0000","description":"Coroutines are methods whose execution may be suspended and resumed","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Coroutine.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Coroutine
---------

Coroutines are methods whose execution may be suspended and resumed. 

PHP generators are a sort of coroutines.

Swoole, Openswoole and fibers extensions offer coroutines.

.. code-block:: php
   
   <?php
   
       // Example from OpenSwoole (https://openswoole.com/docs/modules/swoole-coroutine)
       Co\run(function()
       {
           go(function()
           {
               Co::sleep(1);
               echo "Done 1\n";
           });
       
           go(function()
           {
               Co::sleep(1);
               echo "Done 2\n";
           });
       });
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Coroutine>`__

See also `Coroutine in PHP <https://openswoole.com/coroutine>`_.

Related : :ref:`Generator <generator>`, :ref:`Blocking Wait <blocking-wait>`, :ref:`Stealth Generator <stealth-generator>`, :ref:`Actor Model <actor-model>`, :ref:`Channel <channel>`, :ref:`Continuation <continuation>`, :ref:`Green Thread <green-thread>`

Related packages : `swow/swow <https://packagist.org/packages/swow/swow>`_, `swlib/saber <https://packagist.org/packages/swlib/saber>`_, `amphp/amp <https://packagist.org/packages/amphp/amp>`_
