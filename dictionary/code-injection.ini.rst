.. _code-injection:

Code Injection
--------------

A CODE injection is a vulnerability, where external data is used as PHP code.  

In the example below, `$_GET` is directly used in the eval() function. By using a clever string (shown in comment), it is possible to assign the variable, and run the phpinfo() command. 

Among the solutions to mitigate this problem : filter adequately the incoming data; use prepared statements. 

Some PHP functions are sensitive to this kind of attack : eval(), include(), include_once(), require(), require_once(). Dynamic calls are also suceptible of code injection. 



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
