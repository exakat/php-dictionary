.. _comment:
.. meta::
	:description:
		Comments: PHP comments are used to add explanatory notes or annotations within your code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Comments
	:twitter:description: Comments: PHP comments are used to add explanatory notes or annotations within your code
	:twitter:creator: @exakat
	:twitter:image:src: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:image: https://php-dictionary.readthedocs.io/en/latest/_static/logo.png
	:og:title: Comments
	:og:type: article
	:og:description: PHP comments are used to add explanatory notes or annotations within your code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/comment.ini.html
	:og:locale: en
.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/tips\/0.html","name":"Comments","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 16 Jan 2026 16:59:52 +0000","dateModified":"Fri, 16 Jan 2026 16:59:52 +0000","description":"PHP comments are used to add explanatory notes or annotations within your code","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/Comments.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>


Comments
--------

PHP comments are used to add explanatory notes or annotations within your code. Comments are not executed by the PHP interpreter; they are purely for documentation purposes, and they help you and others understand the code better. PHP supports two main types of comments:

Single-line comments: these are comments that span only one line. They are typically used for brief explanations or annotations within the code. Single-line comments in PHP can be created using either double slashes (``//``) or a hash symbol (``#``).

Multi-line comments: these are comments that can span multiple lines, allowing for more extensive explanations or commenting out large sections of code. Multi-line comments in PHP are enclosed within ``/*`` and ``*/``.

It's important to note that comments do not affect the execution of the PHP code; they are ignored by the PHP interpreter: in fact, they are removed before execution. Comments are primarily for developers and maintainers of the code to understand its purpose, logic, or any special considerations. Well-documented code with meaningful comments can make it easier for you and others to read, understand, and maintain PHP applications.

Comments may be formalized with a specific syntax, and create automated instruction for other application. For example, phpdoc comments are providing extra information with a specific syntax.

As a side feature, comments may also be started with the Unicode #️⃣️ character.

.. code-block:: php
   
   <?php
   
   // This is a single-line comment
   $variable = 42; // Assign a value to $variable
   # Another single-line comment
   
       /*
       This is a multi-line comment.
       It can span multiple lines and is often used for
       longer explanations or for commenting out sections of code.
       */
   
       $variable = 43; 
       
       #️⃣️ One line comment
   
   ?>


`Documentation <https://www.php.net/manual/en/language.basic-syntax.comments.php>`__

See also https://flatcoding.com/tutorials/php-programming/php-comments/, https://www.phptutorial.net/php-tutorial/php-comments/

Related : :ref:`PHPdoc <phpdoc>`
