.. _code-injection:
.. meta::
	:description:
		Code Injection: A CODE injection is a vulnerability, where external data is used as PHP code.
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Code Injection
	:twitter:description: Code Injection: A CODE injection is a vulnerability, where external data is used as PHP code
	:twitter:creator: @exakat
	:og:title: Code Injection
	:og:type: article
	:og:description: A CODE injection is a vulnerability, where external data is used as PHP code
	:og:url: https://php-dictionary.readthedocs.io/en/latest/dictionary/code-injection.ini.html
	:og:locale: en


Code Injection
--------------

A CODE injection is a vulnerability, where external data is used as PHP code.  

In the example below, `$_GET` is directly used in the eval() function. By using a clever string (shown in comment), it is possible to assign the variable, and run the phpinfo() command. 

Among the solutions to mitigate this problem : filter adequately the incoming data; use prepared statements. 

Some PHP functions are sensitive to this kind of attack : eval(), include(), include_once(), require(), require_once(). Dynamic calls are also susceptible of code injection. 



.. code-block:: php
   
   
   <?php
   
   // $_GET['x'] = '1; phpinfo()';
   eval("$myvar = $x;");
   
   // $_GET['method'] = 'getSafe';
   // Any method may be called on the safe object
   $data->$method();
   
   ?>
   


See also `PHP Security 2: Directory Traversal & Code Injection <https://www.acunetix.com/websitesecurity/php-security-2/>`_

Related : :ref:`Eval() <eval>`, :ref:`Inclusions <inclusion>`, :ref:`Dynamic Call <dynamic-call>`
