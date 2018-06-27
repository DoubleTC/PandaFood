# PandaFood - Laravel Framework


## Hướng dẫn cài đặt.
	-Clone source code project về local
    -Tạo database mysql và import file dtc_pandafood.sql
    (dtc_pandafood.sql nằm trong thư mục database)
	-Duplicate file env.example và rename thành file .env
    -Cấu hình kết nối database tại .env vừa đổi tên 
	-Chạy lệnh composer install để cài đặt các packages
	-Trên terminal chạy lệnh php artisan key:generate để lấy key,
	sau đó copy & paste key vào giá trị biến APP_KEY trong file .env
    -đường dẫn đến trang quản trị: /public/admincp
    -Tài khoản demo admin: admin/admin1
    -Tài khoản demo khách: khach/khach

