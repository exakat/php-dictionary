.. _if-then:
.. _ifthen:
.. meta::
	:description:
		If Then Else: A if-then-else command branches the execution based on an condition.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: If Then Else
	:twitter:description: If Then Else: A if-then-else command branches the execution based on an condition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: If Then Else
	:og:type: article
	:og:description: A if-then-else command branches the execution based on an condition
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/if-then.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"If Then Else","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Mar 2025 15:10:46 +0000","dateModified":"Wed, 05 Mar 2025 15:10:46 +0000","description":"A if-then-else command branches the execution based on an condition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/If Then Else.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


If Then Else
------------

A if-then-else command branches the execution based on an condition. When the condition is true, the first branch, called ``then`` is executed. When the condition is false, the second branch, called ``else``, is executed. 

If-then structures may be chained with the `elseif` keyword. The else branch is then a new if-then structure, with a second condition. 


.. code-block:: php
   
   <?php
   
   $number = rand(0, 10);
   
   if ($number % 2 === 0) {
   	print "$number is even\n";
   } else {
   	print "$number is odd\n";
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.if.php>`__

Related : :ref:`Switch <switch>`, :ref:`Match <match>`, :ref:`Ternary Operator <ternary>`, :ref:`Coalesce Operator <coalesce>`, :ref:`Arm <arm>`, :ref:`Branch <branch>`, :ref:`Conditional Structures <conditional-structure>`, :ref:`Control Flow <control-flow>`, :ref:`Simple Switch <simple-switch>`
