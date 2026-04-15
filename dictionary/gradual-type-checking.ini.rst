.. _gradual-type-checking:
.. meta::
	:description:
		Gradual Type Checking: Gradual type checking is the progressive introduction of types in a code base.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Gradual Type Checking
	:twitter:description: Gradual Type Checking: Gradual type checking is the progressive introduction of types in a code base
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Gradual Type Checking
	:og:type: article
	:og:description: Gradual type checking is the progressive introduction of types in a code base
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/gradual-type-checking.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Gradual Type Checking","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Apr 2026 09:35:21 +0000","dateModified":"Mon, 13 Apr 2026 09:35:21 +0000","description":"Gradual type checking is the progressive introduction of types in a code base","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Gradual Type Checking.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Gradual Type Checking
---------------------

Gradual type checking is the progressive introduction of types in a code base. When a code base is not fully typed, it is in a state of gradual typing. Types are introduced, which leads to various level of validation and verifications, and a better stability. 

Gradual Type Checking ends when the code is all typed: arguments, return types, properties, constants. There might be some ambiguous situations, such as with variables, yields and use. 


.. code-block:: php
   
   <?php
   
       // partially typed function
       function foo(int $i, $b) {
           // some code
       }
   
   ?>


`Documentation <https://en.wikipedia.org/wiki/Gradual_typing>`__

See also https://sorbet.org/docs/gradual, https://jsiek.github.io/home/WhatIsGradualTyping.html, https://www.javacodegeeks.com/2026/01/phps-gradual-typing-journey-from-wild-west-to-almost-respectable.html

Related : :ref:`Type System <type>`
