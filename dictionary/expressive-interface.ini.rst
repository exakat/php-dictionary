.. _expressive-interface:
.. meta::
	:description:
		Expressive Interface: An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Expressive Interface
	:twitter:description: Expressive Interface: An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Expressive Interface
	:og:type: article
	:og:description: An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/expressive-interface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Expressive Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 10:22:49 +0000","dateModified":"Fri, 06 Feb 2026 10:22:49 +0000","description":"An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Expressive Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Expressive Interface
--------------------

An expressive interface, refers to an API design pattern that makes code more readable, intuitive, and natural to write. It emphasizes clarity and ease of use, often resembling natural language.

The goal is to make your code self-documenting and reduce the cognitive load on developers reading or writing it.

An expressive interface is not related to an interface : it may be implemented without them.

The notion of expressive interface is similar to the fluent interface.

.. code-block:: php
   
   <?php
   
   class script {
       function hello() {
           print 'Hello ';
           return $this;
       }
   
       function word() {
           print 'word.';
           return $this;
       }
   }
   
   $script = new Script();
   
   $script->hello()->world();
   // 
   
   ?>


See also https://en.wikipedia.org/wiki/Fluent_interface

Related : :ref:`Fluent Interface <fluent-interface>`, , :ref:`Interface <interface>`

Related packages : `bassim/super-expressive-php <https://packagist.org/packages/bassim/super-expressive-php>`_
