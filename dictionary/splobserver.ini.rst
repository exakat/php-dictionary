.. _splobserver:
.. meta::
	:description:
		SplObserver: ``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplObserver
	:twitter:description: SplObserver: ``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplObserver
	:og:type: article
	:og:description: ``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splobserver.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SplObserver","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Jun 2026 11:03:59 +0000","dateModified":"Mon, 15 Jun 2026 11:03:59 +0000","description":"``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplObserver.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplObserver
-----------

``SplObserver`` is an SPL interface that represents the observer role in the Observer design pattern. Classes implementing ``SplObserver`` must define the ``update(SplSubject $subject)`` method, which is called whenever the observed subject notifies its observers of a state change.

``SplObserver`` is used together with ``SplSubject``: the subject maintains a list of observers and calls their ``update()`` method when its internal state changes.

.. code-block:: php
   
   <?php
   
       class Logger implements SplObserver {
           public function update(SplSubject $subject): void {
               echo 'State changed: ' . $subject->getState() . PHP_EOL;
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splobserver.php>`__

See also `Observer pattern <https://en.wikipedia.org/wiki/Observer_pattern>`_.

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`SplSubject <splsubject>`, :ref:`Observer Design Pattern <observer>`, :ref:`Interface <interface>`, :ref:`Observer Pattern <observer-pattern>`, :ref:`PHP Native Interfaces <php-interface>`

Added in PHP 5.1
