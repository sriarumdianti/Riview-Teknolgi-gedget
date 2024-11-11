let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".sidebarBtn");
sidebarBtn.onclick = function () {
    sidebar.classList.toggle("active");
    if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
    } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
};

document.addEventListener("DOMContentLoaded", function() {
    let gadgets = localStorage.getItem("gadgets");
    if (gadgets) {
        gadgets = JSON.parse(gadgets);
        const tableBody = document.getElementById("gadgetTableBody");

        gadgets.forEach((gadget, index) => {
            const row = document.createElement("tr");

            const photoCell = document.createElement("td");
            const img = document.createElement("img");
            img.src = gadget.photo;
            img.alt = gadget.gadgetName;
            photoCell.appendChild(img);

            const nameCell = document.createElement("td");
            nameCell.textContent = gadget.gadgetName;

            const descriptionCell = document.createElement("td");
            descriptionCell.textContent = gadget.description;

            const priceCell = document.createElement("td");
            priceCell.textContent = gadget.price;

            const actionCell = document.createElement("td");
            const editButton = document.createElement("button");
            editButton.className = "btn-edit";
            editButton.textContent = "Edit";
            editButton.onclick = function() {
                editGadget(index);
            };

            const deleteButton = document.createElement("button");
            deleteButton.className = "btn-delete";
            deleteButton.textContent = "Hapus";
            deleteButton.onclick = function() {
                deleteGadget(index);
            };

            actionCell.appendChild(editButton);
            actionCell.appendChild(deleteButton);

            row.appendChild(photoCell);
            row.appendChild(nameCell);
            row.appendChild(descriptionCell);
            row.appendChild(priceCell);
            row.appendChild(actionCell);

            tableBody.appendChild(row);
        });
    }
});

function editGadget(index) {
    alert("Edit gadget dengan indeks: " + index);
    // Implementasi fungsi edit di sini
}

function deleteGadget(index) {
    let gadgets = JSON.parse(localStorage.getItem("gadgets"));
    gadgets.splice(index, 1);
    localStorage.setItem("gadgets", JSON.stringify(gadgets));
    location.reload();
}