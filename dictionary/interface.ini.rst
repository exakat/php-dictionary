.. _interface:
.. meta::
	:description:
		Interfaces: Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interfaces
	:twitter:description: Interfaces: Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Interfaces
	:og:type: article
	:og:description: Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/interface.ini.html
	:og:locale: en


Interfaces
----------

Object interfaces allow you to create code which specifies which methods a class must implement, without having to define how these methods are implemented.

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

See also `Interfaces vs Abstract Classes in PHP <https://ashallendesign.co.uk/blog/interfaces-vs-abstract-classes-in-php>`_, `Interfaces - the misunderstood concept <http://radify.io/blog/interfaces-the-misunderstood-concept/>`_, `Granular interfaces <https://sebastiandedeyne.com/granular-interfaces/>`_, `When to add an interface to a class <https://matthiasnoback.nl/2018/08/when-to-add-an-interface-to-a-class/>`_, `Code to an interface! <https://blog.oussama-mater.tech/code-to-an-interface/>`_

Related : :ref:`Fluent Interface <fluent-interface>`
