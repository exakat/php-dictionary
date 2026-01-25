.. _c2-framework:
.. meta::
	:description:
		C2 Framework: A C2 framework is also known as a C&C framework, or command-and-control framework.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: C2 Framework
	:twitter:description: C2 Framework: A C2 framework is also known as a C&C framework, or command-and-control framework
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: C2 Framework
	:og:type: article
	:og:description: A C2 framework is also known as a C&C framework, or command-and-control framework
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/c2-framework.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"C2 Framework","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 25 Jan 2026 20:46:11 +0000","dateModified":"Sun, 25 Jan 2026 20:46:11 +0000","description":"A C2 framework is also known as a C&C framework, or command-and-control framework","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/C2 Framework.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


C2 Framework
------------

A C2 framework is also known as a C&C framework, or command-and-control framework. It is a library of tools to use with a vulnerability, to discover and escalate services on a target website. 

Among the possible tasks, there are running command system, creating, editing and removing files, starting reverse shells, etc. 

C2-framework shall be used once a backdoor has been installed, to widen the control over the target server. The installation of the backdoor is not included in the C2 framework.

.. code-block:: php
   
   <?php
   
   	// example of a simple backdoor, based on the GET method 
   	echo @eval($_GET['command']); 
   ?>


`Documentation <https://en.wikipedia.org/wiki/Command_and_control>`__

See also https://github.com/nil0x42/phpsploit, https://redfoxsec.com/blog/introduction-to-c2-frameworks/
