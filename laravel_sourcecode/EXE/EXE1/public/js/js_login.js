document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("login-form");
    const usernameInput = document.getElementById("username");
    const passwordInput = document.getElementById("password");
    const rememberCheckbox = document.getElementById("remember");

    // Kiểm tra nếu đã lưu username
    if (localStorage.getItem("rememberedUsername")) {
        usernameInput.value = localStorage.getItem("rememberedUsername");
        rememberCheckbox.checked = true;
    }

    // Xử lý khi người dùng nhấn đăng nhập
    form.addEventListener("submit", function (event) {
        event.preventDefault(); // Ngăn chặn reload trang

        const username = usernameInput.value.trim();
        const password = passwordInput.value.trim();

        if (username === "" || password === "") {
            alert("Vui lòng nhập đầy đủ thông tin!");
            return;
        }

        if (rememberCheckbox.checked) {
            localStorage.setItem("rememberedUsername", username);
        } else {
            localStorage.removeItem("rememberedUsername");
        }

        alert("Đăng nhập thành công!");
    });
});
