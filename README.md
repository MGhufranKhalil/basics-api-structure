## Basics API WITH JWT
 
 
## Prerequisites
    - PHP 8
    - Latest Composer

## Installation 

- Install Composer Latest version
- Clone repo into the system
- Setup .env file according to .env.example
- Install mialhog for local email testing
    https://github.com/mailhog/MailHog
    https://sourceforge.net/projects/mailhog.mirror/
- run following commands
    - composer install
    - php artisan key:generate
    - composer setup
    - php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
    - php artisan jwt:secret
    - php artisan migrate
    <!-- - php artisan db:seed --class=CountrySeeder -->
