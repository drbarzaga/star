## STAR
STAR is a Website for Sky Technics Aviation Repair Company

## Installation

Clone repository.
```
$ git clone https://github.com/drbarzaga/star.git
```
Install dependencies via composer.
```
$ composer install
```

Copy example environment configuration file to .env.
```
$ cp .env.example .env
```

Edit the .env file with your environment, database and email credentials.
```
$ nano .env
```
Generate application key
```
$ php artisan key:generate
```