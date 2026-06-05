.. _observer-pattern:
.. meta::
	:description:
		Observer Pattern: The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Observer Pattern
	:twitter:description: Observer Pattern: The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Observer Pattern
	:og:type: article
	:og:description: The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/observer-pattern.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Observer Pattern","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 05 Jun 2026 08:19:45 +0000","dateModified":"Fri, 05 Jun 2026 08:19:45 +0000","description":"The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Observer Pattern.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Observer Pattern
----------------

The Observer pattern defines a one-to-many dependency between objects: when one object changes state, all registered dependents are notified automatically.

PHP provides built-in interfaces ``SplSubject`` and ``SplObserver`` to implement this pattern natively. It is also the basis for event-driven systems, message buses, and reactive frameworks.

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
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/class.splsubject.php>`__

See also `SplSubject <https://www.php.net/manual/en/class.splsubject.php>`_, `SplObserver <https://www.php.net/manual/en/class.splobserver.php>`_ and `Observer pattern <https://en.wikipedia.org/wiki/Observer_pattern>`_.

Related : :ref:`Design Pattern <design-pattern>`, :ref:`Observer Design Pattern <observer>`, :ref:`SplObserver <splobserver>`, :ref:`SplSubject <splsubject>`
