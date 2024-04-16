# ForwardIT_task
## About Task
Please create a web application using PHP Laravel framework and Bootstrap UI.
- Application should display a table consisting of entries that are fetched from the database (no paging required)
- Please have the following columns:
    * Nosaukums
    * Skaits
    * Materiāls - on of the "Dzelzs" and "Tērauds"
    * Weight
- There should be a button "Pievienot" at the bottom that allows you to create new entries.
- The way of filling up information for the new entries is up to you - either a modal or a separate page.
- There should be a "Trash" icon next to each table row that would allow to delete entries.

## Project requirements

- PHP (>= 8.1)
- Composer
- Node.js (>= 18) and npm (> 10)

## How to start
1. Clone the repository
2. Create a database
3. Copy .env.example to .env
4. ```composer install```
5. ```npm install```
6. ```npm run dev```
7. ```php artisan key:generate```
8. ```php artisan migrate```
9. If you want to populate the database with data, use ```php artisan db:seed --class=InventorySeeder``` IF NOT, then skip db:seed
11. ```php artisan serve```



