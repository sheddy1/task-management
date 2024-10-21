const create_open_button = document.getElementById("project_create_btn");

const create_close_button = document.getElementById("create_project_box_close");

const project_box = document.getElementById("create_project_box");

// create_open_button.addEventListener("click", (event) => {
//     if(project_box.style.display == "none")
//         {
//             alert("awesome");
//         }
// });

create_close_button.addEventListener("click", (event) => {
    if(project_box.style.visibility == "visible")
    {
        project_box.style.visibility = "hidden"
    }
 });
