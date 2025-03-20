document.addEventListener("DOMContentLoaded", function () {
    const updateForm = document.getElementById("update-form");

    updateForm.addEventListener("submit", function (event) {
        event.preventDefault(); // Ngăn chặn load lại trang

        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();
        const confirmPassword = document.getElementById("confirm-password").value.trim();
        const email = document.getElementById("email").value.trim();

        // Kiểm tra dữ liệu hợp lệ
        if (username === "" || password === "" || confirmPassword === "" || email === "") {
            alert("Vui lòng nhập đầy đủ thông tin!");
            return;
        }

        if (password !== confirmPassword) {
            alert("Mật khẩu nhập lại không khớp!");
            return;
        }

        if (!validateEmail(email)) {
            alert("Email không hợp lệ!");
            return;
        }

        alert("Cập nhật thông tin thành công!");
        updateForm.reset(); // Xóa dữ liệu sau khi cập nhật
    });

    function validateEmail(email) {
        const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return regex.test(email);
    }
});
