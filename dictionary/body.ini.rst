.. _body:
.. meta::
	:description:
		Body: The body, of a function or a command, it the related block that is commanded by the the command.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Body
	:twitter:description: Body: The body, of a function or a command, it the related block that is commanded by the the command
	:twitter:creator: @exakat
	:og:title: Body
	:og:type: article
	:og:description: The body, of a function or a command, it the related block that is commanded by the the command
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/body.ini.html
	:og:locale: en


Body
----

The body, of a function or a command, it the related block that is commanded by the the command. It is often enclosed in curly brackets ``{  }``, as for function or ``switch``, but sometimes optional, as for ``foreach`` or ``ifthen``.

The body is omitted in a method, when the method is ``abstract``. Since an abstract method is only its signature, the body is replaced by a semi colon ``;``.


.. code-block:: php
   
   <?php
   
   abstract class X {
       function foo() {
           // This block is the body
       }
   
       // No body for an abstract method
       abstract function goo();
   }
   
   ?>


Related : :ref:`Block <block>`
