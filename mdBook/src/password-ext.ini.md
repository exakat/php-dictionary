# Password API
The Password API, or extension, is a part of the Core of PHP, which provides an easy to use wrapper around ``crypt()`` and some other password hashing algorithms, to make it easy to create and manage passwords in a secure manner.
```php
<?php

    echo password_hash('PHP is alive', PASSWORD_DEFAULT);

?>
```

## See Also

+ [PHP and Password Hashing: Securely Storing and Verifying Passwords](https://reintech.io/blog/php-password-hashing-securely-storing-verifying-passwords)

Related : [Secret](Secret), [Privacy](Privacy), [Hash](Hash), [Password](Password), [Passphrase](Passphrase)
