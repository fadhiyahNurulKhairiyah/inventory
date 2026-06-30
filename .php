[33mcommit 461fecd821c4b459053d6f638cde4eb9b647ef66[m
Author: fadhiyahNurulKhairiyah <fadhiyahkhryh@gmail.com>
Date:   Fri Jun 19 11:31:23 2026 +0800

    Initial commit: Laravel inventory project

[1mdiff --git a/config/cors.php b/config/cors.php[m
[1mnew file mode 100644[m
[1mindex 0000000..8a39e6d[m
[1m--- /dev/null[m
[1m+++ b/config/cors.php[m
[36m@@ -0,0 +1,34 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mreturn [[m
[32m+[m
[32m+[m[32m    /*[m
[32m+[m[32m    |--------------------------------------------------------------------------[m
[32m+[m[32m    | Cross-Origin Resource Sharing (CORS) Configuration[m
[32m+[m[32m    |--------------------------------------------------------------------------[m
[32m+[m[32m    |[m
[32m+[m[32m    | Here you may configure your settings for cross-origin resource sharing[m
[32m+[m[32m    | or "CORS". This determines what cross-origin operations may execute[m
[32m+[m[32m    | in web browsers. You are free to adjust these settings as needed.[m
[32m+[m[32m    |[m
[32m+[m[32m    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS[m
[32m+[m[32m    |[m
[32m+[m[32m    */[m
[32m+[m
[32m+[m[32m    'paths' => ['api/*', 'sanctum/csrf-cookie'],[m
[32m+[m
[32m+[m[32m    'allowed_methods' => ['*'],[m
[32m+[m
[32m+[m[32m    'allowed_origins' => ['*'],[m
[32m+[m
[32m+[m[32m    'allowed_origins_patterns' => [],[m
[32m+[m
[32m+[m[32m    'allowed_headers' => ['*'],[m
[32m+[m
[32m+[m[32m    'exposed_headers' => [],[m
[32m+[m
[32m+[m[32m    'max_age' => 0,[m
[32m+[m
[32m+[m[32m    'supports_credentials' => false,[m
[32m+[m
[32m+[m[32m];[m
[33mcommit 461fecd821c4b459053d6f638cde4eb9b647ef66[m
Author: fadhiyahNurulKhairiyah <fadhiyahkhryh@gmail.com>
Date:   Fri Jun 19 11:31:23 2026 +0800

    Initial commit: Laravel inventory project

[1mdiff --git a/config/cors.php b/config/cors.php[m
[1mnew file mode 100644[m
[1mindex 0000000..8a39e6d[m
[1m--- /dev/null[m
[1m+++ b/config/cors.php[m
[36m@@ -0,0 +1,34 @@[m
[32m+[m[32m<?php[m
[32m+[m
[32m+[m[32mreturn [[m
[32m+[m
[32m+[m[32m    /*[m
[32m+[m[32m    |--------------------------------------------------------------------------[m
[32m+[m[32m    | Cross-Origin Resource Sharing (CORS) Configuration[m
[32m+[m[32m    |--------------------------------------------------------------------------[m
[32m+[m[32m    |[m
[32m+[m[32m    | Here you may configure your settings for cross-origin resource sharing[m
[32m+[m[32m    | or "CORS". This determines what cross-origin operations may execute[m
[32m+[m[32m    | in web browsers. You are free to adjust these settings as needed.[m
[32m+[m[32m    |[m
[32m+[m[32m    | To learn more: https://developer.mozilla.org/en-US/docs/Web/HTTP/CORS[m
[32m+[m[32m    |[m
[32m+[m[32m    */[m
[32m+[m
[32m+[m[32m    'paths' => ['api/*', 'sanctum/csrf-cookie'],[m
[32m+[m
[32m+[m[32m    'allowed_methods' => ['*'],[m
[32m+[m
[32m+[m[32m    'allowed_origins' => ['*'],[m
[32m+[m
[32m+[m[32m    'allowed_origins_patterns' => [],[m
[32m+[m
[32m+[m[32m    'allowed_headers' => ['*'],[m
[32m+[m
[32m+[m[32m    'exposed_headers' => [],[m
[32m+[m
[32m+[m[32m    'max_age' => 0,[m
[32m+[m
[32m+[m[32m    'supports_credentials' => false,[m
[32m+[m
[32m+[m[32m];[m
