document.addEventListener("DOMContentLoaded", function () {
    const editBtn = document.getElementById("edit-btn");

    // Chuyển đến trang cập nhật user khi nhấn nút "Chỉnh sửa"
    editBtn.addEventListener("click", function () {
        window.location.href = "user_edit.html";
    });
});
