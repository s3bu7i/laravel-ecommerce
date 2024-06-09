<p align="center">
  <img src="https://cdn-icons-png.flaticon.com/512/6295/6295417.png" width="100" />
</p>
<p align="center">
    <h1 align="center">LARAVEL-ECOMMERCE</h1>
</p>
<p align="center">
    <em>HTTP error 401 for prompt `slogan`</em>
</p>
<p align="center">
	<img src="https://img.shields.io/github/license/s3bu7i/laravel-ecommerce.git?style=flat&color=0080ff" alt="license">
	<img src="https://img.shields.io/github/last-commit/s3bu7i/laravel-ecommerce.git?style=flat&logo=git&logoColor=white&color=0080ff" alt="last-commit">
	<img src="https://img.shields.io/github/languages/top/s3bu7i/laravel-ecommerce.git?style=flat&color=0080ff" alt="repo-top-language">
	<img src="https://img.shields.io/github/languages/count/s3bu7i/laravel-ecommerce.git?style=flat&color=0080ff" alt="repo-language-count">
<p>
<p align="center">
		<em>Developed with the software and tools below.</em>
</p>
<p align="center">
	<img src="https://img.shields.io/badge/JavaScript-F7DF1E.svg?style=flat&logo=JavaScript&logoColor=black" alt="JavaScript">
	<img src="https://img.shields.io/badge/Sass-CC6699.svg?style=flat&logo=Sass&logoColor=white" alt="Sass">
	<img src="https://img.shields.io/badge/Bootstrap-7952B3.svg?style=flat&logo=Bootstrap&logoColor=white" alt="Bootstrap">
	<img src="https://img.shields.io/badge/PHP-777BB4.svg?style=flat&logo=PHP&logoColor=white" alt="PHP">
	<img src="https://img.shields.io/badge/Vite-646CFF.svg?style=flat&logo=Vite&logoColor=white" alt="Vite">
	<br>
	<img src="https://img.shields.io/badge/Axios-5A29E4.svg?style=flat&logo=Axios&logoColor=white" alt="Axios">
	<img src="https://img.shields.io/badge/Vue.js-4FC08D.svg?style=flat&logo=vuedotjs&logoColor=white" alt="Vue.js">
	<img src="https://img.shields.io/badge/SQLite-003B57.svg?style=flat&logo=SQLite&logoColor=white" alt="SQLite">
	<img src="https://img.shields.io/badge/JSON-000000.svg?style=flat&logo=JSON&logoColor=white" alt="JSON">
</p>
<hr>

##  Quick Links

> - [ Overview](#-overview)
> - [ Features](#-features)
> - [ Repository Structure](#-repository-structure)
> - [ Modules](#-modules)
> - [ Getting Started](#-getting-started)
>   - [ Installation](#-installation)
>   - [ Running laravel-ecommerce](#-running-laravel-ecommerce)
>   - [ Tests](#-tests)
> - [ Project Roadmap](#-project-roadmap)
> - [ Contributing](#-contributing)
> - [ License](#-license)
> - [ Acknowledgments](#-acknowledgments)

---

##  Overview

HTTP error 401 for prompt `overview`

---

##  Features

HTTP error 401 for prompt `features`

---

##  Repository Structure

```sh
└── laravel-ecommerce/
    ├── README.md
    ├── app
    │   ├── Http
    │   │   └── Controllers
    │   │       ├── Auth
    │   │       │   ├── ConfirmPasswordController.php
    │   │       │   ├── ForgotPasswordController.php
    │   │       │   ├── LoginController.php
    │   │       │   ├── RegisterController.php
    │   │       │   ├── ResetPasswordController.php
    │   │       │   └── VerificationController.php
    │   │       ├── CartController.php
    │   │       ├── CheckoutController.php
    │   │       ├── Controller.php
    │   │       ├── HomeController.php
    │   │       └── ProductController.php
    │   ├── Models
    │   │   ├── Cart.php
    │   │   ├── Product.php
    │   │   └── User.php
    │   └── Providers
    │       └── AppServiceProvider.php
    ├── artisan
    ├── bootstrap
    │   ├── app.php
    │   ├── cache
    │   │   └── .gitignore
    │   └── providers.php
    ├── composer.json
    ├── composer.lock
    ├── config
    │   ├── app.php
    │   ├── auth.php
    │   ├── cache.php
    │   ├── database.php
    │   ├── filesystems.php
    │   ├── logging.php
    │   ├── mail.php
    │   ├── queue.php
    │   ├── services.php
    │   └── session.php
    ├── database
    │   ├── .gitignore
    │   ├── factories
    │   │   └── UserFactory.php
    │   ├── migrations
    │   │   ├── 0001_01_01_000000_create_users_table.php
    │   │   ├── 0001_01_01_000001_create_cache_table.php
    │   │   ├── 0001_01_01_000002_create_jobs_table.php
    │   │   ├── 2024_06_09_125125_create_products_table.php
    │   │   ├── 2024_06_09_125716_add_billing_fields_to_users_table.php
    │   │   ├── 2024_06_09_125926_add_billing_fields_to_users_table.php
    │   │   └── 2024_06_09_142536_create_carts_table.php
    │   └── seeders
    │       └── DatabaseSeeder.php
    ├── database.sqlite
    ├── ecommerce_store
    ├── package-lock.json
    ├── package.json
    ├── phpunit.xml
    ├── public
    │   ├── .htaccess
    │   ├── favicon.ico
    │   ├── index.php
    │   └── robots.txt
    ├── resources
    │   ├── css
    │   │   └── app.css
    │   ├── js
    │   │   ├── app.js
    │   │   ├── bootstrap.js
    │   │   └── components
    │   │       └── ExampleComponent.vue
    │   ├── sass
    │   │   ├── _variables.scss
    │   │   └── app.scss
    │   └── views
    │       ├── auth
    │       │   ├── login.blade.php
    │       │   ├── passwords
    │       │   │   ├── confirm.blade.php
    │       │   │   ├── email.blade.php
    │       │   │   └── reset.blade.php
    │       │   ├── register.blade.php
    │       │   └── verify.blade.php
    │       ├── cart
    │       │   └── index.blade.php
    │       ├── checkout
    │       │   └── index.blade.php
    │       ├── home.blade.php
    │       ├── layouts
    │       │   └── app.blade.php
    │       ├── products
    │       │   ├── index.blade.php
    │       │   └── show.blade.php
    │       └── welcome.blade.php
    ├── routes
    │   ├── console.php
    │   └── web.php
    ├── storage
    │   ├── app
    │   │   ├── .gitignore
    │   │   └── public
    │   │       └── .gitignore
    │   ├── framework
    │   │   ├── .gitignore
    │   │   ├── cache
    │   │   │   ├── .gitignore
    │   │   │   └── data
    │   │   │       └── .gitignore
    │   │   ├── sessions
    │   │   │   └── .gitignore
    │   │   ├── testing
    │   │   │   └── .gitignore
    │   │   └── views
    │   │       └── .gitignore
    │   └── logs
    │       └── .gitignore
    ├── tests
    │   ├── Feature
    │   │   └── ExampleTest.php
    │   ├── TestCase.php
    │   └── Unit
    │       └── ExampleTest.php
    └── vite.config.js
```

---

##  Modules

<details closed><summary>.</summary>

| File                                                                                               | Summary                                       |
| ---                                                                                                | ---                                           |
| [database.sqlite](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database.sqlite)     | HTTP error 401 for prompt `database.sqlite`   |
| [composer.lock](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/composer.lock)         | HTTP error 401 for prompt `composer.lock`     |
| [vite.config.js](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/vite.config.js)       | HTTP error 401 for prompt `vite.config.js`    |
| [package.json](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/package.json)           | HTTP error 401 for prompt `package.json`      |
| [phpunit.xml](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/phpunit.xml)             | HTTP error 401 for prompt `phpunit.xml`       |
| [package-lock.json](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/package-lock.json) | HTTP error 401 for prompt `package-lock.json` |
| [artisan](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/artisan)                     | HTTP error 401 for prompt `artisan`           |
| [composer.json](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/composer.json)         | HTTP error 401 for prompt `composer.json`     |

</details>

<details closed><summary>resources.css</summary>

| File                                                                                         | Summary                                           |
| ---                                                                                          | ---                                               |
| [app.css](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/css/app.css) | HTTP error 401 for prompt `resources/css/app.css` |

</details>

<details closed><summary>resources.sass</summary>

| File                                                                                                          | Summary                                                    |
| ---                                                                                                           | ---                                                        |
| [_variables.scss](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/sass/_variables.scss) | HTTP error 401 for prompt `resources/sass/_variables.scss` |
| [app.scss](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/sass/app.scss)               | HTTP error 401 for prompt `resources/sass/app.scss`        |

</details>

<details closed><summary>resources.views</summary>

| File                                                                                                               | Summary                                                       |
| ---                                                                                                                | ---                                                           |
| [home.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/home.blade.php)       | HTTP error 401 for prompt `resources/views/home.blade.php`    |
| [welcome.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/welcome.blade.php) | HTTP error 401 for prompt `resources/views/welcome.blade.php` |

</details>

<details closed><summary>resources.views.cart</summary>

| File                                                                                                                | Summary                                                          |
| ---                                                                                                                 | ---                                                              |
| [index.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/cart/index.blade.php) | HTTP error 401 for prompt `resources/views/cart/index.blade.php` |

</details>

<details closed><summary>resources.views.checkout</summary>

| File                                                                                                                    | Summary                                                              |
| ---                                                                                                                     | ---                                                                  |
| [index.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/checkout/index.blade.php) | HTTP error 401 for prompt `resources/views/checkout/index.blade.php` |

</details>

<details closed><summary>resources.views.layouts</summary>

| File                                                                                                               | Summary                                                           |
| ---                                                                                                                | ---                                                               |
| [app.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/layouts/app.blade.php) | HTTP error 401 for prompt `resources/views/layouts/app.blade.php` |

</details>

<details closed><summary>resources.views.auth</summary>

| File                                                                                                                      | Summary                                                             |
| ---                                                                                                                       | ---                                                                 |
| [login.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/auth/login.blade.php)       | HTTP error 401 for prompt `resources/views/auth/login.blade.php`    |
| [register.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/auth/register.blade.php) | HTTP error 401 for prompt `resources/views/auth/register.blade.php` |
| [verify.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/auth/verify.blade.php)     | HTTP error 401 for prompt `resources/views/auth/verify.blade.php`   |

</details>

<details closed><summary>resources.views.auth.passwords</summary>

| File                                                                                                                              | Summary                                                                      |
| ---                                                                                                                               | ---                                                                          |
| [confirm.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/auth/passwords/confirm.blade.php) | HTTP error 401 for prompt `resources/views/auth/passwords/confirm.blade.php` |
| [email.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/auth/passwords/email.blade.php)     | HTTP error 401 for prompt `resources/views/auth/passwords/email.blade.php`   |
| [reset.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/auth/passwords/reset.blade.php)     | HTTP error 401 for prompt `resources/views/auth/passwords/reset.blade.php`   |

</details>

<details closed><summary>resources.views.products</summary>

| File                                                                                                                    | Summary                                                              |
| ---                                                                                                                     | ---                                                                  |
| [index.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/products/index.blade.php) | HTTP error 401 for prompt `resources/views/products/index.blade.php` |
| [show.blade.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/views/products/show.blade.php)   | HTTP error 401 for prompt `resources/views/products/show.blade.php`  |

</details>

<details closed><summary>resources.js</summary>

| File                                                                                                  | Summary                                               |
| ---                                                                                                   | ---                                                   |
| [bootstrap.js](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/js/bootstrap.js) | HTTP error 401 for prompt `resources/js/bootstrap.js` |
| [app.js](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/js/app.js)             | HTTP error 401 for prompt `resources/js/app.js`       |

</details>

<details closed><summary>resources.js.components</summary>

| File                                                                                                                             | Summary                                                                  |
| ---                                                                                                                              | ---                                                                      |
| [ExampleComponent.vue](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/resources/js/components/ExampleComponent.vue) | HTTP error 401 for prompt `resources/js/components/ExampleComponent.vue` |

</details>

<details closed><summary>public</summary>

| File                                                                                        | Summary                                       |
| ---                                                                                         | ---                                           |
| [.htaccess](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/public/.htaccess)   | HTTP error 401 for prompt `public/.htaccess`  |
| [index.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/public/index.php)   | HTTP error 401 for prompt `public/index.php`  |
| [robots.txt](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/public/robots.txt) | HTTP error 401 for prompt `public/robots.txt` |

</details>

<details closed><summary>database.factories</summary>

| File                                                                                                              | Summary                                                        |
| ---                                                                                                               | ---                                                            |
| [UserFactory.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/factories/UserFactory.php) | HTTP error 401 for prompt `database/factories/UserFactory.php` |

</details>

<details closed><summary>database.migrations</summary>

| File                                                                                                                                                                                               | Summary                                                                                                 |
| ---                                                                                                                                                                                                | ---                                                                                                     |
| [2024_06_09_142536_create_carts_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/2024_06_09_142536_create_carts_table.php)                               | HTTP error 401 for prompt `database/migrations/2024_06_09_142536_create_carts_table.php`                |
| [2024_06_09_125926_add_billing_fields_to_users_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/2024_06_09_125926_add_billing_fields_to_users_table.php) | HTTP error 401 for prompt `database/migrations/2024_06_09_125926_add_billing_fields_to_users_table.php` |
| [2024_06_09_125125_create_products_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/2024_06_09_125125_create_products_table.php)                         | HTTP error 401 for prompt `database/migrations/2024_06_09_125125_create_products_table.php`             |
| [0001_01_01_000002_create_jobs_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/0001_01_01_000002_create_jobs_table.php)                                 | HTTP error 401 for prompt `database/migrations/0001_01_01_000002_create_jobs_table.php`                 |
| [0001_01_01_000000_create_users_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/0001_01_01_000000_create_users_table.php)                               | HTTP error 401 for prompt `database/migrations/0001_01_01_000000_create_users_table.php`                |
| [0001_01_01_000001_create_cache_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/0001_01_01_000001_create_cache_table.php)                               | HTTP error 401 for prompt `database/migrations/0001_01_01_000001_create_cache_table.php`                |
| [2024_06_09_125716_add_billing_fields_to_users_table.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/migrations/2024_06_09_125716_add_billing_fields_to_users_table.php) | HTTP error 401 for prompt `database/migrations/2024_06_09_125716_add_billing_fields_to_users_table.php` |

</details>

<details closed><summary>database.seeders</summary>

| File                                                                                                                  | Summary                                                         |
| ---                                                                                                                   | ---                                                             |
| [DatabaseSeeder.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/database/seeders/DatabaseSeeder.php) | HTTP error 401 for prompt `database/seeders/DatabaseSeeder.php` |

</details>

<details closed><summary>routes</summary>

| File                                                                                          | Summary                                        |
| ---                                                                                           | ---                                            |
| [web.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/routes/web.php)         | HTTP error 401 for prompt `routes/web.php`     |
| [console.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/routes/console.php) | HTTP error 401 for prompt `routes/console.php` |

</details>

<details closed><summary>config</summary>

| File                                                                                                  | Summary                                            |
| ---                                                                                                   | ---                                                |
| [auth.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/auth.php)               | HTTP error 401 for prompt `config/auth.php`        |
| [database.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/database.php)       | HTTP error 401 for prompt `config/database.php`    |
| [mail.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/mail.php)               | HTTP error 401 for prompt `config/mail.php`        |
| [queue.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/queue.php)             | HTTP error 401 for prompt `config/queue.php`       |
| [app.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/app.php)                 | HTTP error 401 for prompt `config/app.php`         |
| [session.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/session.php)         | HTTP error 401 for prompt `config/session.php`     |
| [services.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/services.php)       | HTTP error 401 for prompt `config/services.php`    |
| [logging.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/logging.php)         | HTTP error 401 for prompt `config/logging.php`     |
| [cache.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/cache.php)             | HTTP error 401 for prompt `config/cache.php`       |
| [filesystems.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/config/filesystems.php) | HTTP error 401 for prompt `config/filesystems.php` |

</details>

<details closed><summary>bootstrap</summary>

| File                                                                                                 | Summary                                             |
| ---                                                                                                  | ---                                                 |
| [providers.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/bootstrap/providers.php) | HTTP error 401 for prompt `bootstrap/providers.php` |
| [app.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/bootstrap/app.php)             | HTTP error 401 for prompt `bootstrap/app.php`       |

</details>

<details closed><summary>app.Providers</summary>

| File                                                                                                                       | Summary                                                          |
| ---                                                                                                                        | ---                                                              |
| [AppServiceProvider.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Providers/AppServiceProvider.php) | HTTP error 401 for prompt `app/Providers/AppServiceProvider.php` |

</details>

<details closed><summary>app.Http.Controllers</summary>

| File                                                                                                                              | Summary                                                                 |
| ---                                                                                                                               | ---                                                                     |
| [Controller.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Controller.php)                 | HTTP error 401 for prompt `app/Http/Controllers/Controller.php`         |
| [CartController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/CartController.php)         | HTTP error 401 for prompt `app/Http/Controllers/CartController.php`     |
| [HomeController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/HomeController.php)         | HTTP error 401 for prompt `app/Http/Controllers/HomeController.php`     |
| [CheckoutController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/CheckoutController.php) | HTTP error 401 for prompt `app/Http/Controllers/CheckoutController.php` |
| [ProductController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/ProductController.php)   | HTTP error 401 for prompt `app/Http/Controllers/ProductController.php`  |

</details>

<details closed><summary>app.Http.Controllers.Auth</summary>

| File                                                                                                                                                 | Summary                                                                             |
| ---                                                                                                                                                  | ---                                                                                 |
| [RegisterController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Auth/RegisterController.php)               | HTTP error 401 for prompt `app/Http/Controllers/Auth/RegisterController.php`        |
| [ConfirmPasswordController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Auth/ConfirmPasswordController.php) | HTTP error 401 for prompt `app/Http/Controllers/Auth/ConfirmPasswordController.php` |
| [LoginController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Auth/LoginController.php)                     | HTTP error 401 for prompt `app/Http/Controllers/Auth/LoginController.php`           |
| [ForgotPasswordController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Auth/ForgotPasswordController.php)   | HTTP error 401 for prompt `app/Http/Controllers/Auth/ForgotPasswordController.php`  |
| [VerificationController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Auth/VerificationController.php)       | HTTP error 401 for prompt `app/Http/Controllers/Auth/VerificationController.php`    |
| [ResetPasswordController.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Http/Controllers/Auth/ResetPasswordController.php)     | HTTP error 401 for prompt `app/Http/Controllers/Auth/ResetPasswordController.php`   |

</details>

<details closed><summary>app.Models</summary>

| File                                                                                              | Summary                                            |
| ---                                                                                               | ---                                                |
| [Product.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Models/Product.php) | HTTP error 401 for prompt `app/Models/Product.php` |
| [Cart.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Models/Cart.php)       | HTTP error 401 for prompt `app/Models/Cart.php`    |
| [User.php](https://github.com/s3bu7i/laravel-ecommerce.git/blob/master/app/Models/User.php)       | HTTP error 401 for prompt `app/Models/User.php`    |

</details>

---

##  Getting Started

***Requirements***

Ensure you have the following dependencies installed on your system:

* **PHP**: `version x.y.z`

###  Installation

1. Clone the laravel-ecommerce repository:

```sh
git clone https://github.com/s3bu7i/laravel-ecommerce.git
```

2. Change to the project directory:

```sh
cd laravel-ecommerce
```

3. Install the dependencies:

```sh
composer install
```

###  Running laravel-ecommerce

Use the following command to run laravel-ecommerce:

```sh
php main.php
```

###  Tests

To execute tests, run:

```sh
vendor/bin/phpunit
```

---

##  Project Roadmap

- [X] `► INSERT-TASK-1`
- [ ] `► INSERT-TASK-2`
- [ ] `► ...`

---

##  Contributing

Contributions are welcome! Here are several ways you can contribute:

- **[Submit Pull Requests](https://github.com/s3bu7i/laravel-ecommerce.git/blob/main/CONTRIBUTING.md)**: Review open PRs, and submit your own PRs.
- **[Join the Discussions](https://github.com/s3bu7i/laravel-ecommerce.git/discussions)**: Share your insights, provide feedback, or ask questions.
- **[Report Issues](https://github.com/s3bu7i/laravel-ecommerce.git/issues)**: Submit bugs found or log feature requests for Laravel-ecommerce.

<details closed>
    <summary>Contributing Guidelines</summary>

1. **Fork the Repository**: Start by forking the project repository to your GitHub account.
2. **Clone Locally**: Clone the forked repository to your local machine using a Git client.
   ```sh
   git clone https://github.com/s3bu7i/laravel-ecommerce.git
   ```
3. **Create a New Branch**: Always work on a new branch, giving it a descriptive name.
   ```sh
   git checkout -b new-feature-x
   ```
4. **Make Your Changes**: Develop and test your changes locally.
5. **Commit Your Changes**: Commit with a clear message describing your updates.
   ```sh
   git commit -m 'Implemented new feature x.'
   ```
6. **Push to GitHub**: Push the changes to your forked repository.
   ```sh
   git push origin new-feature-x
   ```
7. **Submit a Pull Request**: Create a PR against the original project repository. Clearly describe the changes and their motivations.

Once your PR is reviewed and approved, it will be merged into the main branch.

</details>

---

##  License

This project is protected under the [SELECT-A-LICENSE](https://choosealicense.com/licenses) License. For more details, refer to the [LICENSE](https://choosealicense.com/licenses/) file.

---

##  Acknowledgments

- List any resources, contributors, inspiration, etc. here.

[**Return**](#-quick-links)

---
