
### Used frameworks:
- [Laravel](https://laravel.com/)
- [tailwindcss](https://tailwindcss.com/)
- [Alpine.js](https://alpinejs.dev/)

### Local Installation Guide

Please check the official Laravel installation guide for server requirements before you start.
-  [Official Documentation](https://laravel.com/docs/9.x)

Fork the repository and clone it (or download the zip file and extract it)

Example :

    git clone https://github.com/iambasanta/rfc.git
    
Change directory to the project directory

    cd rfc

Install composer dependencies

    composer install

Install npm dependencies

    npm install

Copy the example `.env.example` in `.env` file

    cp .env.example .env

Open and make the required configuration changes in the `.env` file

-   `DB_DATABASE`
-   `DB_USERNAME`
-   `DB_PASSWORD`

Generate an app encryption key

    php artisan key:generate

Run the database migrations (**Configure the database connection in .env before migrating**)

    php artisan migrate

Seed the database (OPTIONAL)

    php artisan db:seed

Run the Vite development server

     npm run dev

Start the local development server

    php artisan serve

Now you can visit

-   http://localhost:8000 (visitor)
-   http://localhost:8000/admin (admin)

on your web-broswer to access the website.

Special thanks to 
- [Pranab Kc](https://github.com/PranabZz)
- [Susit Ratna Tuladhar](https://github.com/susitTuladhar)
