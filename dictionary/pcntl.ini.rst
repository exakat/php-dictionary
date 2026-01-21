.. _pcntl:
.. meta::
	:description:
		Process Control (pcntl): Process Control is a set of native PHP function, that handles signals coming from the OS.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Process Control (pcntl)
	:twitter:description: Process Control (pcntl): Process Control is a set of native PHP function, that handles signals coming from the OS
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Process Control (pcntl)
	:og:type: article
	:og:description: Process Control is a set of native PHP function, that handles signals coming from the OS
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/pcntl.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Process Control (pcntl)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 21 Jan 2026 08:53:06 +0000","dateModified":"Wed, 21 Jan 2026 08:53:06 +0000","description":"Process Control is a set of native PHP function, that handles signals coming from the OS","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Process Control (pcntl).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Process Control (pcntl)
-----------------------

Process Control is a set of native PHP function, that handles signals coming from the OS. 

``pcntl`` is suited for CLI operations, and not for web serving operations. 

``pcntl`` manage process creation, program execution, signal handling and process termination.

.. code-block:: php
   
   <?php
   
   $pid = pcntl_fork();
   if ($pid == -1) {
        die('could not fork');
   } else if ($pid) {
        // we are the parent
        pcntl_wait($status); //Protect against Zombie children
   } else {
        // we are the child
   }
   
   ?>


`Documentation <https://www.php.net/manual/en/book.pcntl.php>`__

See also https://gist.github.com/nicksantamaria/21dce5ff2a6640cdff76ce7bc57d2981

Related : :ref:`PHP Handlers <handler>`, :ref:`Shell <shell>`, :ref:`System Event <system-event>`
