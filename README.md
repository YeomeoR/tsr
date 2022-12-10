# tsr

### functions

functions tasks and SQL tasks can be found in tsr_code_test.php in the root folder

#### Functions

#####

1:  Write a function that, given an array of size n, finds the first repeating element. It should return the element that repeats, and the index of its first occurrence.
2: Write a function that returns the number of vowels and consonants in a string (as separate values).
3: Write a function that takes a string containing a sentence or (body of text) and a second string containing a word and returns the number of times the word appears in the string.
4: write a function that takes a number and returns the volume of a sphere with that diameter.
5: Write a function that accepts an integer, and returns the next 20 prime numbers.

#### SQL

#####

1: Write an SQL query to find the user “jimbob”
2: Write an SQL query to find all of the posts created by user “the_gary”
3: Write an SQL query to find all posts by “the_gary”, with a status of ‘published’, created this year.
4: Imagine the users table has 20000 entries; how would you approach indexing it?
5: Why is it not recommended to index small tables of data?

### 

login

#####

Using language(s) and tool(s) of your choice, design and build a simple login page:
● The page should contain a username and password field, as well as a login button.
● Submitting the form should query a ‘users’ database.
● If the username and password match a stored user, then show a welcome message.
● Otherwise show an access denied message.

####

login screen has been built using Laravel 9 and TailwindCSS.

#####

Clone project.

cd into the folder application: 

####

...tsr/tsr-login2/tsrlogin
    
### 

for Laravel

#####

Run composer install on your cmd or terminal.

Copy .env.example file to .env on the root folder. DB name is tsrlogin2 No password for username: root

Run php artisan key:generate.

Run php artisan migrate.

Run php artisan serve.

    
### 

for Tailwind

In a second terminal:

npm install -D tailwindcss postcss autoprefixer

npx tailwindcss init -p

npm run dev

