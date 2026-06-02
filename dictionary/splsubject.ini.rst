.. _splsubject:
.. meta::
	:description:
		SplSubject: ``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: SplSubject
	:twitter:description: SplSubject: ``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: SplSubject
	:og:type: article
	:og:description: ``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/splsubject.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"SplSubject","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 01 Jun 2026 09:18:16 +0000","dateModified":"Mon, 01 Jun 2026 09:18:16 +0000","description":"``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/SplSubject.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


SplSubject
----------

``SplSubject`` is an SPL interface that represents the subject, also known as the observable, role in the Observer design pattern. Classes implementing ``SplSubject`` must define three methods: ``attach(SplObserver $observer)``, ``detach(SplObserver $observer)``, and ``notify()``.

When the subject's state changes, it calls ``notify()``, which in turn calls ``update()`` on each attached ``SplObserver``.

``SplSubject`` is the counterpart of ``SplObserver``: together they provide a built-in, standardised contract for the Observer pattern in PHP.

.. code-block:: php
   
   <?php
   
       class EventSource implements SplSubject {
           private SplObjectStorage $observers;
           private string $state = '';
   
           public function __construct() {
               $this->observers = new SplObjectStorage();
           }
   
           public function attach(SplObserver $observer): void {
               $this->observers->attach($observer);
           }
   
           public function detach(SplObserver $observer): void {
               $this->observers->detach($observer);
           }
   
           public function notify(): void {
               foreach ($this->observers as $observer) {
                   $observer->update($this);
               }
           }
   
           public function setState(string $state): void {
               $this->state = $state;
               $this->notify();
           }
   
           public function getState(): string {
               return $this->state;
           }
       }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splsubject.php>`__

See also `Observer pattern <https://en.wikipedia.org/wiki/Observer_pattern>`_.

Related : :ref:`Standard PHP Library (SPL) <spl>`, :ref:`SplObserver <splobserver>`, , :ref:`Interface <interface>`, 

Added in PHP 5.1
