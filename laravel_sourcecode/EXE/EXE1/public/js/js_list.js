document.addEventListener("DOMContentLoaded", function () {
    const users = [
        { id: 1, username: "Tri", email: "Tri@gmail.com" },
        { id: 2, username: "Quang", email: "Quang@gmail.com" },
        { id: 3, username: "Thuan", email: "Thuan@gmail.com" },
        { id: 4, username: "Dang", email: "Dang@gmail.com" },
    ];

    const tableBody = document.getElementById("user-table-body");

    // Hiển thị danh sách user
    function renderUsers() {
        tableBody.innerHTML = "";
        users.forEach((user, index) => {
            const row = document.createElement("tr");
            row.innerHTML = `
                <td>${index + 1}</td>
                <td>${user.username}</td>
                <td>${user.email}</td>
                <td>
                    <a href="#">Edit</a> | 
                    <a href="#">View</a> | 
                    <a href="#">Delete</a>
                </td>
            `;
            tableBody.appendChild(row);
        });
    }

    renderUsers();

    // Xử lý phân trang (Chỉ mô phỏng, chưa có nhiều dữ liệu để phân trang thực sự)
    const prevPage = document.getElementById("prevPage");
    const nextPage = document.getElementById("nextPage");
    const pageNumbers = document.querySelectorAll(".page-number");

    pageNumbers.forEach(button => {
        button.addEventListener("click", function () {
            pageNumbers.forEach(btn => btn.classList.remove("active"));
            this.classList.add("active");
        });
    });

    prevPage.addEventListener("click", function () {
        let currentPage = document.querySelector(".page-number.active");
        if (currentPage.previousElementSibling && currentPage.previousElementSibling.id !== "prevPage") {
            currentPage.classList.remove("active");
            currentPage.previousElementSibling.classList.add("active");
        }
    });

    nextPage.addEventListener("click", function () {
        let currentPage = document.querySelector(".page-number.active");
        if (currentPage.nextElementSibling && currentPage.nextElementSibling.id !== "nextPage") {
            currentPage.classList.remove("active");
            currentPage.nextElementSibling.classList.add("active");
        }
    });
});
