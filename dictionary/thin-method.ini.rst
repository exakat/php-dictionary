.. _thin-method:
.. meta::
	:description:
		Thin Method: A thin method is an informal term (not an official pattern) used to describe a method that contains very little logic of its own and mostly delegates work to another method or object.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Thin Method
	:twitter:description: Thin Method: A thin method is an informal term (not an official pattern) used to describe a method that contains very little logic of its own and mostly delegates work to another method or object
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Thin Method
	:og:type: article
	:og:description: A thin method is an informal term (not an official pattern) used to describe a method that contains very little logic of its own and mostly delegates work to another method or object
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/thin-method.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Thin Method","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 08 Feb 2026 17:05:46 +0000","dateModified":"Sun, 08 Feb 2026 17:05:46 +0000","description":"A thin method is an informal term (not an official pattern) used to describe a method that contains very little logic of its own and mostly delegates work to another method or object","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Thin Method.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Thin Method
-----------

A thin method is an informal term (not an official pattern) used to describe a method that contains very little logic of its own and mostly delegates work to another method or object.

.. code-block:: php
   
   <?php
   
   class X {
       public __construct(private Repository $repository,
                          private Logger $logger,
                          ) {}
   
       public function save(User $user): void
       {
           $this->logger->info('Saving user');
           $this->repository->save($user);
       }
   }
   
   ?>


`Documentation <https://refactoring.guru/design-patterns/decorator>`__

Related : :ref:`PHP Wrappers <php-wrapper>`, :ref:`file:// <wrapper-file>`
