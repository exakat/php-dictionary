.. _fibers:
.. _fiber:
.. meta::
	:description:
		Fibers: Fibers in PHP are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Fibers
	:twitter:description: Fibers: Fibers in PHP are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Fibers
	:og:type: article
	:og:description: Fibers in PHP are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fibers.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Fibers","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 07 Feb 2026 21:09:07 +0000","dateModified":"Sat, 07 Feb 2026 21:09:07 +0000","description":"Fibers in PHP are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Fibers.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Fibers
------

Fibers in PHP are a low-level mechanism for lightweight concurrency, they allow to pause and resume blocks of code at specific points without blocking the rest of the application.

They were introduced in PHP 8.1 and provide cooperative multitasking, as opposed to preemptive multitasking like threads. This means the application controls exactly where execution yields and resumes.

.. code-block:: php
   
   <?php
   $fiber = new Fiber(function (): void {
      $value = Fiber::suspend('fiber');
      echo "Value used to resume fiber:", $value, PHP_EOL;
   });
   
   $value = $fiber->start();
   
   echo "Value from fiber suspending:", $value, PHP_EOL;
   
   $fiber->resume('test');
   ?>


`Documentation <https://www.php.net/manual/en/language.fibers.php>`__

See also https://aoeex.com/phile/php-fibers-a-practical-example/, https://www.sages.io/blog/fibers-in-PHP-how-ulatwic-implement-asynchronicity-in-project

Related packages : `amphp/process <https://packagist.org/packages/amphp/process>`_

Added in PHP 5.0+
