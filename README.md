# nicheSolutions

First some configurations need to be adressed in the .env file:
- Create a .env file as a copy from the .env.example file
- Regarding the database (assuming a mysql database run on localhost)
  - Set DB_DATABASE to the name of the database to be used
  - Set DB_USERNAME to the login username of the database
  - Set DB_PASSWORD to the password associated with the database username login
- Set your application key using 'php artisan key:generate'

Run the following to setup a database and setup a basic admin user:
- php artisan migrate:fresh
- php artisan db:seed

Run the following to deploy the site:
- php artisan serve

The site should now be accesible on http://127.0.0.1:8000. The login is admin/admin.
