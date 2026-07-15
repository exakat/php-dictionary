.. _variable-shadowing:
.. _shadow:
.. meta::
	:description:
		Variable Shadowing: Variable shadowing is the confusion between variables of the same name, but of different context.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Variable Shadowing
	:twitter:description: Variable Shadowing: Variable shadowing is the confusion between variables of the same name, but of different context
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Variable Shadowing
	:og:type: article
	:og:description: Variable shadowing is the confusion between variables of the same name, but of different context
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/variable-shadowing.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/variable-shadowing.ini.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/variable-shadowing.ini.html","name":"Variable Shadowing","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 01 Jul 2026 10:02:15 +0000","dateModified":"Wed, 01 Jul 2026 10:02:15 +0000","description":"Variable shadowing is the confusion between variables of the same name, but of different context","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Variable Shadowing.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Variable Shadowing
------------------

Variable shadowing is the confusion between variables of the same name, but of different context. 

Variable shadowing happens in different situations: 

+ With local variables, by defining it several times in the same context, and starting a new usage.
+ With local variables, by defining it once as parameter, once as local variable, once as blind variable in a ``foreach()``, take 2 distinct situations
+ With static variables, after it was a local variable
+ With global variables, where a local variable and a global one carry the same name
+ With structures like ``foreach()`` and ``catch()``, which creates variables that actually overwrite existing ones, but are not perceived as such by a human coder

Such pattern sow confusion and lead to bugs. Given the context, the shadow may be intermittent: for example, a variable change content and type only when an exception is caught.

.. code-block:: php
   
   <?php
   
   $x = 4;
   
   function foo() {
       $x = 3;
       
       static $x; // No assignation, but $x is not NULL, on the first call
       
       global $x; // $x is not static anymore, and is 4
   
       $array = ['a', 'b', 'c'];
       try {
           foreach($array as $x) {
               echo $x;
           }
       } catch (Exception $x) {
           // $x becoms an exception, if it happens
       }
       
       // finally, $x becomes 5, stays global
       $x = 5;
   }
   
   foo();
   echo $x;
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Variable_shadowing>`__

Related : :ref:`Variables <variable>`, :ref:`Close Naming <close-naming>`
