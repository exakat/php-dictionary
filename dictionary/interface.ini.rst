.. _interface:
.. _interfaces:
.. meta::
	:description:
		Interface: Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface
	:twitter:description: Interface: Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interface
	:og:type: article
	:og:description: Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Interface","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 10 Feb 2026 08:52:18 +0000","dateModified":"Tue, 10 Feb 2026 08:52:18 +0000","description":"Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Interface.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Interface
---------

Object interfaces allow to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

Interfaces may have methods signatures, without a body, and constants.

.. code-block:: php
   
   <?php
   
   // Declare the interface 'Template'
   interface Template
   {
       public function setVariable($name, $var);
       public function getHtml($template);
   }
   
   // Implement the interface
   // This will work
   class WorkingTemplate implements Template
   {
       private $vars = [];
     
       public function setVariable($name, $var)
       {
           $this->vars[$name] = $var;
       }
     
       public function getHtml($template)
       {
           foreach($this->vars as $name => $value) {
               $template = str_replace('{' . $name . '}', $value, $template);
           }
    
           return $template;
       }
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/language.oop5.interfaces.php>`__

See also https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php, http://radify.io/blog/interfaces-the-misunderstood-concept/, https://sebastiandedeyne.com/granular-interfaces/, https://matthiasnoback.nl/2018/08/when-to-add-an-interface-to-a-class/, https://blog.oussama-mater.tech/code-to-an-interface/

Related : :ref:`Fluent Interface <fluent-interface>`, :ref:`BackedEnum <backedenum>`, :ref:`Class Interface Trait Enumeration (CITE) <cite>`, :ref:`Object <object>`, :ref:`UnitEnum <unitenum>`
