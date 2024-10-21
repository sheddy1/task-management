$(document).ready(function () {

    const create_open_button = document.getElementById("project_create_btn");

    const create_close_button = document.getElementById("create_project_box_close");

    const edit_button = document.getElementById("project_box_section_edit");

    const project_box = document.getElementById("create_project_box");

    create_open_button.addEventListener("click", (event) => {
        alert("Awesome");
    });

    create_close_button.addEventListener("click", (event) => {
        // project_box.style.visibility == "hidden"
    });

    edit_button.addEventListener("click", (event) => {
        alert("awesome");
    });

});
