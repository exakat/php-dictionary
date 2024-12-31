.. _label:
.. meta::
	:description:
		Goto Labels: Labels are the receiving end of a goto call.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Goto Labels
	:twitter:description: Goto Labels: Labels are the receiving end of a goto call
	:twitter:creator: @exakat
	:og:title: Goto Labels
	:og:type: article
	:og:description: Labels are the receiving end of a goto call
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/label.ini.html
	:og:locale: en


Goto Labels
-----------

Labels are the receiving end of a goto call. They must be in the same context than the goto they relate to : there, they must be unique. There might be several goto for a single label.



.. code-block:: php
   
   
   <?php
   goto a;
   echo 'Foo';
    
   a:
   echo 'Bar';
   ?>
   


`Documentation <https://www.php.net/manual/en/control-structures.goto.php>`__

Related : :ref:`Goto <goto>`
