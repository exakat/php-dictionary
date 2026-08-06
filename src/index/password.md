# Password
A password is a secret or confidential string of characters that is used for authentication and access control to verify the identity of a user. Passwords are commonly employed in computer systems, online accounts, and various digital devices to protect sensitive information and restrict unauthorized access.

The primary purpose of a password is to ensure that only authorized users can access a particular system, network, application, or account. When a user attempts to log in, they are typically required to enter a username or user ID along with their corresponding password. If the entered password matches the stored or expected password for that user, access is granted.

Passwords are a fundamental component of security measures, and it's important for users to choose strong and unique passwords to enhance the security of their accounts. Strong passwords often include a combination of uppercase and lowercase letters, numbers, and special characters, making them more resistant to unauthorized access through brute-force attacks or other security breaches. Additionally, it's recommended to use different passwords for different accounts to minimize the impact of a potential security compromise.

Password is also an extension for hashing.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"DefinedTerm","@id":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/password.html","url":"https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/password.html","name":"Password","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 11 Jul 2026 09:08:30 +0000","dateModified":"Sat, 11 Jul 2026 09:08:30 +0000","description":"A password is a secret or confidential string of characters that is used for authentication and access control to verify the identity of a user","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-dictionary.readthedocs.io\/en\/latest\/dictionary\/index\/Password.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
```php
<?php

    $ftp_server = 'ftp.example.com';
    $ftp_user = 'foo';
    $ftp_pass = 'bar';
    
    // Set up a simple connexion
    $ftp = ftp_connect($ftp_server);

?>
```

**[Documentation](https://www.php.net/manual/en/book.password.php)**
## See Also

+ [Generate a Secure Password in PHP (2025 Version)](https://oxomichael.github.io/en/posts/2025-07-08-generate-secure-password-php/)

## Related

+ [Password API](password-ext.ini.html)
+ [Passphrase](passphrase.ini.html)
+ [Secret](secret.ini.html)
+ [Privacy](privacy.ini.html)
+ [One-Time Password (OTP)](otp.ini.html)
+ [Crack](crack.ini.html)
+ [Hard Coded](hard-coded.ini.html)
+ [Single Sign On (SSO)](sso.ini.html)
