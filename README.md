# Học cách tự xây dựng mô hình MVC

- File .htaccess : Rewrite Url
- File bootstrap.php : require các file khác vào
- File app/App.php : Điều hướng các routes tới các controller , actions và các params truyền vào nếu không tìm thấy controllers sẽ chuyển sang trang lỗi
- Nhiệm vụ của Controllers : nhận tham số từ routes điều hướng tới các actions , nó lấy dữ liệu từ models
- Models : lưu trữ dữ liệu viết dạng method để controller lấy ra.
