# This repo aims to demonstrate a bug in Livewire 2.6.0 - 2.6.3

## Bug Description

A bug exists in livewire that started from version 2.6.0 where:

-   When the WithPagination trait is used in a component, and the component's resetPage method is called in the updating hook, livewire enters an infinite loop of calling the getName method of the base Component class somewhere at line 116-116;

## Steps to reproduce

-   Clone this repo
-   install composer and npm dependencies
-   npm run dev
-   copy .env.example to .env
-   create file database/database.sqlite
-   php artisan key:generate
-   execute database migrations
-   use the User factory to create dummy users (100 for demo purposes)
-   navigate to '/' page and try to type in the input field, after 30 seconds the max execution time error from php is thrown (time may depend on environment configurations)
-   problem disappears by commenting out the resetPage method in the updating hook in the component
