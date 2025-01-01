.. _one-liner:
.. meta::
	:description:
		One Liner: A one-liner refers to a concise and often single expression that accomplishes a specific task.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: One Liner
	:twitter:description: One Liner: A one-liner refers to a concise and often single expression that accomplishes a specific task
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: One Liner
	:og:type: article
	:og:description: A one-liner refers to a concise and often single expression that accomplishes a specific task
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/one-liner.ini.html
	:og:locale: en


One Liner
---------

A one-liner refers to a concise and often single expression that accomplishes a specific task. It's a shorthand way of expressing functionality in a compact form. 

One liner are supposed to fit on one line. The line is also supposed to be limited in size. 

One liners tends to pack a lot of operations in one expression. When used aggressively, one liners become less readable, and more complex. 

Some commands have a short and a long syntax, such as ``if-then-else`` and the ternary operator ``condition ? then : else``.


.. code-block:: php
   
   <?php
   
   if ($condition) {
   	doSomething();
   } else {
   	doSomethingElse();
   }
   
   $condition ? doSomething() : doSomethingElse();
   
   ?>


See also `Avoiding one-liners in PHP <https://localheinz.com/articles/2023/03/18/avoiding-one-liners-in-php/>`_
