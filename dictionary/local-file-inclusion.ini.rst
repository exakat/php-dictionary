.. _lfi:

Local File Inclusion
--------------------

A local file inclusion is a security vulnerability, where an external attacker can choose which file from the local system is processed by the called script. 

This vulnerability is often used to access password files, such as ``/etc/passwd``, or other hidden files. They might be read and display, or furthermore processed and modified.


.. code-block:: php
   
   
   <?php
   
   // Input URL : http://vulnerable_host/preview.php?file=../../../../etc/passwd
   
   file_get_contents($_GET['file']); 
   
   ?>
   


`Documentation <https://owasp.org/www-project-web-security-testing-guide/v42/4-Web_Application_Security_Testing/07-Input_Validation_Testing/11.1-Testing_for_Local_File_Inclusion>`__

See also `Exploiting Local File Inclusion (LFI) Using PHP Wrapper <https://gupta-bless.medium.com/exploiting-local-file-inclusion-lfi-using-php-wrapper-89904478b225>`_, `Local File Inclusion (LFI): Understanding and Preventing LFI Attacks <https://brightsec.com/blog/local-file-inclusion-lfi/>`_
