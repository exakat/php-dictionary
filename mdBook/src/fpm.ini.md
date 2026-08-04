# FastCGI Process Manager (FPM)
FPM stands for FastCGI Process Manager. It is a PHP FastCGI implementation.

Instead of nesting PHP in the web server, php-fpm makes PHP a server by itself. The web server then delegates the work to the PHP server. The advantage is to lower the memory footprint of PHP and the web server, and the whole of them both. It helps with stability, by keeping the two processes separated.
## See Also

+ [Why Do You Need PHP FastCGI Process Manager?](https://www.plesk.com/blog/various/why-do-you-need-php-fpm/)
+ [How to Configure PHP-FPM with NGINX](https://www.digitalocean.com/community/tutorials/php-fpm-nginx)
+ [PHP FastCGI Process Manager - PHP-FPM](https://docs.cpanel.net/knowledge-base/php-fpm/php-fastcgi-process-manager-php-fpm/)
+ [The Quiet Shift Reshaping PHP Security](https://www.linkedin.com/pulse/quiet-shift-reshaping-php-security-matthew-weier-o-phinney-fgquc/)

Related : [Common Gateway Interface (CGI)](Common Gateway Interface (CGI)), [Concurrency](Concurrency), [FastCGI](FastCGI), [Attack Surface](Attack Surface), [Concurrency](Concurrency), [OPcache Preloading](OPcache Preloading), [Throughput](Throughput)
