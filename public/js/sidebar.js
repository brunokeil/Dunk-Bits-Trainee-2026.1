const TOGGLESIDEBAR = document.querySelector("#toggle-sidebar-btn");
const SIDEBAR = document.querySelector("aside");



TOGGLESIDEBAR.addEventListener("click", () => toggleSidebar());


function toggleSidebar(){
    if(SIDEBAR.className == "sidebar"){
        SIDEBAR.className = "closed-sidebar";
        
    }
    else if (SIDEBAR.className == "closed-sidebar"){
        SIDEBAR.className = "sidebar";
    }
    console.log(SIDEBAR.className);
}