## Installation Guidelines :

1. Navigate to the right directory where your project will be locally saved
    - For WAMP:
        ```sh
        cd C:\wamp64\www\
        ```
    - For XAMPP:
        ```sh
        cd C:\xampp\htdocs\
        ```
    - For MAMP(macOS):
        ```sh
        cd /Application/MAMP/htdocs/
    ```
    Note- phpMyAdmin/PHP, apache, and MySQL comes preinstalled with the  WAMP, XAMPP package, that is going to be used later on in this project, so no need to install these files separately. 

2. Clone this repository and move to `theSolution` directory
   ```sh
   git clone https://github.com/balendurawat/theSolution.git
   cd theSolution
   ```

3. Install dependencies
   ```sh
   composer install
   npm install
   ```

4. npm build
   ```sh
   npm run dev
   ```
    A possible error may arise with `cross-env`. So try running the following commands.
    - To clear a cache in npm, we need to run the npm cache command in our terminal and install cross-env.
   ```sh
   npm cache clear --force
   npm install cross-env

   npm install
   npm run dev
   ```


5. Make a copy of the `.env.example` file in the same directory and save it as `.env`:
     ```sh
    cp .env.example .env
    ```

6. Run the following command to add the Laravel application key:
   ```sh
   php artisan key:generate
   ```
   **Note:** Make sure that the 'php.ini' file in XAMPP/WAMP has this code uncommented/written
    `extension=gd`


7. Add the following settings in `.env` file:
    1. Laravel app configurations
    ```sh
    APP_NAME="theSolution"
    APP_ENV=local
    APP_DEBUG=true
    APP_URL=http://theSolution.test
    ```

    ```sh
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=theSolution
    DB_USERNAME=root
    DB_PASSWORD=
    ```
    **Note:** Use the default values for MySQL database in `.env` file
    ```
    DB_USERNAME=root
    DB_PASSWORD=
    ```
8. Create a database
   After starting both Apache & mysql, click on this [link](http://localhost/phpmyadmin/) to enter the mysql database.

   After entering the phpmyadmin homepage click on the new icon to create new database & name it as "thesolution".



9. Run migrations
    ```sh
    php artisan migrate
    ```

10. _(Optional)_

    To access the project in browser just enter the folder where thesolution files have been clonned.

    press shitf+right & click on the powershell & run command php artisan serve 

    After running the command,copy the given URL in the browser.