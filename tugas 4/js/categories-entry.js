let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function () {
    sidebar.classList.toggle("active");
    if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
};

function saveGadgetData(event) {
    event.preventDefault();

    const gadgetName = document.getElementById("gadget_name").value;
    const price = document.getElementById("price").value;
    const description = document.getElementById("description").value;
    const photo = document.getElementById("photo").files[0];

    const reader = new FileReader();
    reader.onload = function(e) {
        const photoDataUrl = e.target.result;

        const gadgetData = {
            gadgetName,
            price,
            description,
            photo: photoDataUrl
        };

        let gadgets = localStorage.getItem("gadgets");
        if (gadgets) {
            gadgets = JSON.parse(gadgets);
        } else {
            gadgets = [];
        }
        gadgets.push(gadgetData);
        localStorage.setItem("gadgets", JSON.stringify(gadgets));
        alert("Data berhasil disimpan!");

        window.location.href = "categories.html"; // Redirect ke halaman daftar data
    };
    reader.readAsDataURL(photo);
}