document.addEventListener("DOMContentLoaded", function () {
    // User Data (Simulated)
    let userData = {
        username: "daniee247",
        totalBalance: 300,  // ₦300 Welcome Bonus
        gameBalance: 0,
        totalWithdrawn: 0
    };

    // Load stored data if available
    let savedData = JSON.parse(localStorage.getItem("userData"));
    if (savedData) userData = savedData;

    // Update dashboard
    document.getElementById("username").innerText = userData.username;
    document.getElementById("total-balance").innerText = `₦${userData.totalBalance}`;
    document.getElementById("game-balance").innerText = `₦${userData.gameBalance}`;
    document.getElementById("total-withdrawn").innerText = `₦${userData.totalWithdrawn}`;

    // Logout
    document.getElementById("logout-btn").addEventListener("click", function () {
        localStorage.removeItem("userData");
        alert("Logged out successfully!");
        window.location.reload();
    });

    // Toggle Submenus
    let submenus = document.querySelectorAll(".submenu-btn");
    submenus.forEach(button => {
        button.addEventListener("click", function () {
            let submenu = this.nextElementSibling;
            submenu.style.display = submenu.style.display === "block" ? "none" : "block";
        });
    });
});
