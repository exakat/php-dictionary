.. _break:
.. meta::
	:description:
		Break: Break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Break
	:twitter:description: Break: Break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Break
	:og:type: article
	:og:description: Break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/break.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Break","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 13:38:50 +0000","dateModified":"Fri, 16 Jan 2026 13:38:50 +0000","description":"Break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Break.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Break
-----

Break is a control structure, which ends execution of the current for, foreach, while, do-while or switch structure.

break accepts an optional argument, which tells how many enclosing structures are to be broken out of. 

break should not be confused with `continue` : continue doesn't work in a switch, like a break does.

.. code-block:: php
   
   <?php
   
   foreach([1,2,3] as $b) {
       // break upon the first even number
       if ($b % 2 == 0) {
           break;
       }
       
       echo $b;
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.break.php>`__

Related : :ref:`Continue <continue>`, :ref:`Switch <switch>`, :ref:`Loops <loop>`

Added in PHP 5.4
