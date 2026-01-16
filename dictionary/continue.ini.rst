.. _continue:
.. meta::
	:description:
		Continue: continue is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Continue
	:twitter:description: Continue: continue is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Continue
	:og:type: article
	:og:description: continue is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/continue.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Continue","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"continue is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Continue.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Continue
--------

continue is used within looping structures to skip the rest of the current loop iteration and resume the execution at the condition evaluation and then the beginning of the next iteration.

continue is not possible inside a switch structure.

.. code-block:: php
   
   <?php
   
   foreach ($arr as $key => $value) {
       if (!($key % 2)) { // skip even members
           continue;
       }
       do_something_odd($value);
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/control-structures.continue.php>`__

Related : :ref:`Break <break>`, :ref:`Control Flow <control-flow>`, :ref:`Do While <do-while>`, :ref:`Do...while <dowhile>`, :ref:`For <for>`, :ref:`Foreach <foreach>`, :ref:`While <while>`
