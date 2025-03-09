document.addEventListener("DOMContentLoaded", function () {
    // Fetch user data (Simulated API response or local storage)
    let userData = {
        username: "daniee247",
        totalBalance: 0,  // Default: ₦0
        gameBalance: 0,    // Default: ₦0
        totalWithdrawn: 0  // Default: ₦0
    };

    // Check if stored data exists (for returning users)
    let savedData = JSON.parse(localStorage.getItem("userData"));
    if (savedData) {
        userData = savedData;
    }

    // Update dashboard with user data
    document.getElementById("username").innerText = userData.username;
    document.getElementById("total-balance").innerText = `₦${userData.totalBalance}`;
    document.getElementById("game-balance").innerText = `₦${userData.gameBalance}`;
    document.getElementById("total-withdrawn").innerText = `₦${userData.totalWithdrawn}`;

    // Logout button functionality
    document.getElementById("logout-btn").addEventListener("click", function () {
        localStorage.removeItem("userData");
        alert("Logged out successfully!");
        window.location.reload();
    });
})
