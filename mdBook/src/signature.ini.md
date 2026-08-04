# Signature
Signature has several meanings:  

+ Method signature: the name, arguments, attributes and return type of a method or function
+ Digital signature: a piece of data that gives a recipient confidence that the message came from a specific sender
+ Email signature: a suffix for email messages, to conclude a email message with coordinates and social greetings.
```php
<?php

    // The line below is the function signature
    function foo(string $message): string {

        // adapted from the PHP manual
        // fetch private key from file and ready it
        $pkeyid = openssl_pkey_get_private(file://src/openssl-0.9.6/php/sign/key.pem);

        // compute signature
        openssl_sign($message, $signature, $pkeyid);

        // free the key from memory
        openssl_free_key($pkeyid);        
        
        // This returns the signature of the message for 'php' user.
        // It may be checked with the public key
        return $signature;
    }

?>
```

Related : [Method Signature](Method Signature), [Digital Signature](Digital Signature)
