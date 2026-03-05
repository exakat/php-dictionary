.. _bracketless:
.. meta::
	:description:
		Bracketless: Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Bracketless
	:twitter:description: Bracketless: Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Bracketless
	:og:type: article
	:og:description: Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/bracketless.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Bracketless","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 05 Mar 2026 16:10:41 +0000","dateModified":"Thu, 05 Mar 2026 16:10:41 +0000","description":"Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Bracketless.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Bracketless
-----------

Bracketless refers to situations where a block of code has optional enclosing curly brackets ``{}``. 

Bracketless blocks lead to only one expression as a block, which is error prone. Most of the time, the brackets are always required by convention, unless the block is explicitly delimited, as in a ``do-while()``.

This is the case with single expressions ``for()``, ``foreach()``, ``while()``. It is the case with ``do-while`` and with ``cases``, in ``switch()``.

It is also the default usage with the alternative syntax, which does not use brackets for block enclosing.

``switch()`` and ``match()`` must have parenthesis around the block of cases: these can't be bracketless.

Bracketless only applies to curly brackets ``{}``. Parenthesis are mostly used for operator precedence, and, when not, are actually useless. Square brackets are never optional.


.. code-block:: php
   
   <?php
   
   // bracketless foreach()
   foreach([1,2,3] as $number) 
       print $number . PHP_EOL;
       $a = 1; // This is not part of the loop, even if it looks like so
   
   // bracketless do-while()
   $number = 1;
   do 
       print $number . PHP_EOL;
       ++$number;
   while ($number < 4);
   
   
   ?>


Related : :ref:`Block <block>`, :ref:`Alternative Syntax <alternative-syntax>`, :ref:`Curly Brackets <curly-bracket>`, , :ref:`Parenthesis <parenthesis>`, :ref:`Square Brackets <square-bracket>`
