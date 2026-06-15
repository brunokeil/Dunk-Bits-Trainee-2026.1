const TOGGLESIDEBAR = document.querySelector("#toggle-sidebar-btn");

TOGGLESIDEBAR.addEventListener("click", () => toggleSidebar());

function toggleSidebar() {
    const SIDEBAR = document.querySelector("aside");

    if (SIDEBAR.classList.contains("sidebar")) {
        SIDEBAR.classList.remove("sidebar");
        SIDEBAR.classList.add("closed-sidebar");
        console.log("detectou sidebar");
    } 
    else if (SIDEBAR.classList.contains("closed-sidebar")) {
        SIDEBAR.classList.remove("closed-sidebar");
        SIDEBAR.classList.add("sidebar");
        console.log("detectou closed-sidebar");
    }
    console.log(SIDEBAR.className);
}
