# Argon2
Argon2 is a modern, secure, and highly efficient password hashing algorithm. It was the winner of the Password Hashing Competition, PHC, in 2015 and is designed to resist brute-force attacks, including GPU-based attacks. PHP has built-in support for Argon2 starting from version 7.2.
```php
<?php
$password = "PHP is alive and kicking!";

// Hash the password with Argon2id
print password_hash($password, PASSWORD_ARGON2ID);

?>
```

## See Also

+ [From Basics to Expert: A Deep Dive into Argon2 Password Hashing](https://master-spring-ter.medium.com/from-basics-to-expert-a-deep-dive-into-argon2-password-hashing-95d17ba3b10f)
+ [Argon2 in PHP](https://mojoauth.com/hashing/argon2-in-php)

Related : [Algorithm](Algorithm), [Hash](Hash), [Crack](Crack)
