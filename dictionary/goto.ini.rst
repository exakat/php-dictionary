.. _goto:
.. meta::
	:description:
		Goto: The goto operator PHP is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Goto
	:twitter:description: Goto: The goto operator PHP is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Goto
	:og:type: article
	:og:description: The goto operator PHP is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/goto.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Goto","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 06 Feb 2026 10:32:54 +0000","dateModified":"Fri, 06 Feb 2026 10:32:54 +0000","description":"The goto operator PHP is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Goto.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Goto
----

The goto operator PHP is a language construct that allows to perform an unconditional jump in the flow of your code to a specified label. 

Goto one of the very controversial features in PHP and has been the subject of much debate due to its potential to create spaghetti code and make code difficult to read and maintain.

Some legit uses of goto in PHP include breaking out of nested loops, implementing state machines, or in some cases for error handling. However, they are rare, and should only considered in last resort.

The target label must be within the same file and context, meaning that it is not possible to jump out of a function or method, nor to jump into one.

.. code-block:: php
   
   <?php
     
     goto a;
     echo 'Foo';
      
     a:
     echo 'Bar';
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.goto.php>`__

See also https://www.thecreativedev.com/goto-statement-in-php/, https://topher.io/writing/why-php-goto-and-bubblesort-are-good/

Related : :ref:`Goto Labels <label>`, :ref:`Colon <colon>`

Related packages : `symfony/symfony <https://packagist.org/packages/symfony/symfony>`_, `yiisoft/yii2 <https://packagist.org/packages/yiisoft/yii2>`_

Added in PHP 5.3
