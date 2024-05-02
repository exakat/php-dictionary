.. _obfuscation:

Obfuscation
-----------

Obfuscation refers to the practice of deliberately making something difficult to understand or obscure. In the context of web security, code obfuscation is a technique used to make source code more difficult to filter and identify as a threat. The primary goal is not to improve the program's functionality but rather to hinder reverse engineering, the extraction of sensitive information from the code.

.. code-block:: php
   
   <?php
   
   // built with base64_encode("_GET"); 
   $v = "X0dFVA=="; 
   
   // obfuscated code : this displays $_GET
   print_r($\{base64_decode($v)\}); 
   
   ?>

