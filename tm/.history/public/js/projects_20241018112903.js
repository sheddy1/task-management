const share_button = document.getElementById("info_share");

const close_button = document.getElementById("info_share_box_close");

const show_share = document.getElementById("info_share_box");

share_button.addEventListener("click", (event) => {
    if(show_share.style.display == "none")
    {
        show_share.style.display = "block";
    }
});
