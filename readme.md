Laravel Task  application

test_release_0.0.1

1. Application for register student, admin and see details

copy .env.example to .env and change MAIL password and NAME

Commands need to be run

    1. composer install
    2. php artisan migrate
    3. php artisan storage:link


Important routes details

        1. For Login as admin
            https://localhost/kapiltask/public/login
		
        2. For register as new admin
            https://localhost/kapiltask/public/register
		
        3. For register new student with all details
            https://localhost/kapiltask/public/regsform
		
        4. page for all details of student already registered
            https://localhost/kapiltask/public/alldetails