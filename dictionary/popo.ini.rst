.. _popo:
.. meta::
	:description:
		Plain Old PHP Object (POPO): ``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Plain Old PHP Object (POPO)
	:twitter:description: Plain Old PHP Object (POPO): ``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Plain Old PHP Object (POPO)
	:og:type: article
	:og:description: ``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/popo.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/popo.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/popo.ini.html","name":"Plain Old PHP Object (POPO)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 09 Jul 2026 09:04:14 +0000","dateModified":"Thu, 09 Jul 2026 09:03:45 +0000","description":"``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Plain Old PHP Object (POPO).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Plain Old PHP Object (POPO)
---------------------------

``Plain Old PHP Object``, or POPO for shorts, refers to a simple PHP class that does not depend on any framework, library, or special inheritance. POPOs are just basic classes with properties and methods, used to represent data or logic without any external dependencies. They are often contrasted with objects that are tied to frameworks, like Doctrine entities in Symfony, or use magic methods or reflection heavily.

``Plain Old <Language> Object`` also works for any other programming language.

.. code-block:: php
   
   <?php
   
       class User {
           public string $name;
           public string $email;
       
           public function __construct(string $name, string $email)
           {
               $this->name = $name;
               $this->email = $email;
           }
       
           public function getInfo(): string
           {
               return "Name: {$this->name}, Email: {$this->email}";
           }
       }
       
       // Usage
       $user = new User('Elephpant PHP', 'elephpant@php.net');
       echo $user->getInfo(); // Output: Name: Elephpant PHP, Email: elephpant@php.net
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Plain_old_Java_object>`__

See also `POPO — What is it, and why should you not use it? <https://medium.com/@damiankryger/popo-what-is-it-and-why-should-you-not-use-it-29c1487e2740>`_, `Plain old PHP Object - Usability and benefits in modern PHP programming <https://dev.to/fuadardiono/plain-old-php-object-usability-and-benefits-in-modern-php-programming-32oc>`_ and `Do not Forget POPO, the Plain Old PHP Object approach <https://ivonascimento.com/2014/03/06/do-not-forget-popo-the-plain-old-php-object-approach/>`_.

Related : :ref:`Data Transfer Object (DTO) <dto>`, :ref:`Value Object (VO) <vo>`, :ref:`stdclass <stdclass>`
