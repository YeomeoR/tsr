# tsr

### functions

functions tasks and SQL tasks are found in tsr_code_test.php in the root folder

### login

login screen has been built using Laravel 9 and TailwindCSS.

#####

Clone project.

cd into the folder application: 

####
...tsr/tsr-login2/tsrlogin
    
### for Laravel

#####

Run composer install on your cmd or terminal.

Copy .env.example file to .env on the root folder. DB name is tsrlogin2 No password for username: root

Run php artisan key:generate.

Run php artisan migrate.

Run php artisan serve.

    
### for Tailwind

In a second terminal:

npm install -D tailwindcss postcss autoprefixer

npx tailwindcss init -p

npm run dev

