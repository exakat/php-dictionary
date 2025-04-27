.. _fallthrough:
.. meta::
	:description:
		Switch Fallthrough: A fallthrough is the absence of break (or equivalent) at the end of a switch case.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Switch Fallthrough
	:twitter:description: Switch Fallthrough: A fallthrough is the absence of break (or equivalent) at the end of a switch case
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Switch Fallthrough
	:og:type: article
	:og:description: A fallthrough is the absence of break (or equivalent) at the end of a switch case
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/fallthrough.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/debug_zval_dump.html","name":"Switch Fallthrough","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Jan 2025 09:46:17 +0000","dateModified":"Fri, 10 Jan 2025 09:46:17 +0000","description":"A fallthrough is the absence of break (or equivalent) at the end of a switch case","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Switch Fallthrough.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Switch Fallthrough
------------------

A fallthrough is the absence of break (or equivalent) at the end of a switch case. That way, the execution continues on the next case. 

While this is an intended feature, and is useful to reduce code, it tends to surprise programmers, which expect the cases to always end. 



.. code-block:: php
   
   <?php
   
   switch ($a) {
       case 1:
           $a = 2 * $a;
           // fallthrough here : the execution continue
           
       case 2:
           $a = $a + 1;
           break;
   }
   
   ?>


`Documentation <https://www.learncpp.com/cpp-tutorial/switch-fallthrough-and-scoping/>`__

See also `PHP switch Statement <https://www.codeguage.com/courses/php/control-flow-switch>`_

Related : :ref:`Match <match>`
