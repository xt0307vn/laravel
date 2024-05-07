Laravel

-- tạo dự án mới
    composer create-project laravel/laravel name-project
--> vào thư mục project cd name-project
-- chạy dự án 
    php artisan serve

-- trong file .env --> sửa tên database trùng tên với database với trong mysql
                             --> trong file config/database.php -> mysql -> chartset và collation trùng với trong mysql


Phong cách query builder và Eloquent ORMs
** migrations: là một tập lệnh của laravel, cho phép chúng ta sử dụng các lệnh để tạo dữ liệu so với cách thủ công -> giúp quản lý hiệu quả hơn
**seeding: sử dụng các class và các tập lệnh trong laravel để tạo dữ liệu ban đầu

----tạo migration --> để tạo bảng
    - php artisan make:migration create_name_table -> tạo file migration để thực hiện tạo bảng 
    database/migrations/2023_09_21_133732_hello.php
    --> thực hiện tạo bảng: php artisan migrate

----tạo model --> để tạo các hàm mà controller sử dụng để lọc dữ liệu hiển thị api
    - php artisan make:model name-model

----tạo controller --> để tạo các url gọi api
    - php artisan make:controller name-controller -> tạo controller
