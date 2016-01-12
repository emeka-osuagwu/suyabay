## Suyabay Podcast

[![Build Status](https://travis-ci.org/andela/suyabay.svg)](https://travis-ci.org/andela/suyabay)
[![License](http://img.shields.io/:license-mit-blue.svg)](https://github.com/andela/suyabay/blob/staging/LICENSE.md)
[![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Stable Version](https://poser.pugx.org/laravel/framework/v/stable.svg)](https://packagist.org/packages/laravel/framework)
[![Latest Unstable Version](https://poser.pugx.org/laravel/framework/v/unstable.svg)](https://packagist.org/packages/laravel/framework)
[![License](https://poser.pugx.org/laravel/framework/license.svg)](https://packagist.org/packages/laravel/framework)

[SuyaBay](https://www.suyabay.com) is a podcasting app built for suya lovers. Users can use the app either as a **guest** or a **registered user**. Being a registered user means a user has access to features such as **social integration features** (liking and sharing favorite episodes), which is not available to a guest user. A guest user can only have access to general episodes if available. Documentation for Suyabay website can be found on the [Suyabay Wiki](https://github.com/andela/suyabay/wiki).

## Installation
1. Clone the repository into your project folder
        `git clone https://github.com/andela/suyabay.git`
2. Run `composer install` from cmd to install all project dependencies
3. Update the values in `.env` file
4. Run ```php artisan migrate``` to install the database migration

## Install Composer
Download the installer from [getcomposer.org/download](https://getcomposer.org/doc/00-intro.md), execute it and follow the instructions

## Setup the environmental variables (.env file)
        APP_ENV    =local
        APP_DEBUG  =true
        APP_KEY    =LhsswvmAfygWZdKUhZXedm3bOTAOKLxH

        ### Database configuration
        DB_HOST    =localhost
        DB_DATABASE=xxxxxxxx
        DB_USERNAME=xxxxxxxx
        DB_PASSWORD=xxxxxxxx

        ### Test database configuration
        DB_TEST_HOST   =localhost
        DB_TEST_DATABASE=xxxxxxxx
        DB_TEST_USERNAME=xxxxxxxx
        DB_TEST_PASSWORD=xxxxxxxx

        CACHE_DRIVER=file
        SESSION_DRIVER=file
        QUEUE_DRIVER=sync

        ### Email configuration
        MAIL_DRIVER=smtp
        MAIL_HOST=xxxxxxxx
        MAIL_PORT=xxx
        MAIL_USERNAME=xxxxxxxx
        MAIL_PASSWORD=xxxxxxxx
        MAIL_ENCRYPTION=xxxxxxxx
        SENDER_ADDRESS=xxxxxxxx
        SENDER_NAME=xxxxxxxx

## Requirements

        php                   >=  5.5.9
        laravel/framework      =  5.1.17
        busayo/laravel-yearly  =  1.0.*
        guzzlehttp/guzzle      =  ~4.0

## Requirements for Development

        fzaninotto/faker = ~1.4
        phpunit/phpunit  = ~4.0
        phpspec/phpspec  = ~2.1
        mockery/mockery  = ^0.9.4

## Credits
[Okosun Florence](https://github.com/andela-fokosun)

[Osuagwu Emeka](https://github.com/andela-eosuagwu)

[Adeniyi Ibraheem](https://github.com/andela-iadeniyi)


### Stack
      * PHP/Laravel


### Tools
      * Frontend - AngularJS, blade
      * Database - postgresql

### General overview:
The overview is presented from two perspectives. The perpective of a user of the app (front-end) and the perspective of an admin(owner of the podcasting service).

**frontend users should be able to:**
     
     1. Use SuyaBay as a guest. No registration/signin required.
     2. Use SuyaBay as a registered user. Registration/signin required.
     3. Have access to user dashboard:
     **_Registered users_**:
          - Should be able to subscribe/unsubscribe to channels and/or specific episodes
          - See list of subscribed channels
          - Have access to contact form
          - Have access to FAQs, About and Terms and conditions pages
          - Have access to other functionalities not yet implemented!
          
     **_Guest users_**:
          - Should be able to have access to only available(subscription not required) episodes
          - Have access to contact form
          - Have access to FAQs, About and Terms and conditions pages
          - Have option to register or remain as a guest user

**Admin users should be able to:**
     
     1. create/delete user roles.
     2. create/delete channels.
     3. upload/delete episodes
     

## FEATURES (MOCKUP)
1. User registration/login
![user_registration_signin](screenshots/signup.png "user registration or signin interface")

2. User Dashboard
![user dashboard](screenshots/landingpage.png "user dashboard")

3. Watch Podcast
![user dashboard-watch podcast](screenshots/viewpost.png "user dashboard-watch podcast")

3. Contacts page
![user dashboard-contacts page](screenshots/contact-page-2.png "")

Thank you for considering contributing to the Suyabay project! The contribution guide can be found in the [Suyabay documentation](https://github.com/andela/suyabay/wiki/contributions).

The SuyaBay project is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)

## Contributing to SuyaBay Podcast App
If you have an idea for SuyaBay Podcasting, feel free to suggest it in an [issue](https://www.github.com) on this repo.

## Supporting development
If you enjoy using SuyaBay Podcasting then please leave a [review](http://www.suyabay.com) to help promote continued development.
