# Hardening
Hardening refers to the raise of security level in the installation of PHP, and other related technologies. It means reviewing the default or installed configurations and set ups, to make them safer.

For example, by default, PHP displays its version number in the HTTP headers, with ``X-Powered-By``. This may be hidden, so as not to disclose any information, by setting ``expose_php`` directive to off, or ``0`` in the ``php.ini`` file.
## See Also

+ [How to Hide PHP Version Number in HTTP Header](https://www.tecmint.com/hide-php-version-http-header/)
+ [PHP Hardening: Strategies to Meet Compliance Requirements](https://www.zend.com/blog/php-hardening-strategies)
+ [Modern PHP Security Part 2: Breaching and hardening the PHP engine](https://labs.detectify.com/security-guidance/modern-php-security-part-2-breaching-and-hardening-the-php-engine/)

Related : [expose_php](expose_php)
