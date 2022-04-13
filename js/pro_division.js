var btn_teachers = document.querySelector("#pro_teachers_btn");
var btn_classes = document.querySelector("#pro_classes_btn");
var btn_thoughts = document.querySelector("#pro_thoughts_btn");
var changing_content = document.querySelector("#changing_content");
var classes_data = document.querySelector("#classes_data");
var teachers_data = document.querySelector("#teachers_data");
var thoughts_data = document.querySelector("#thoughts_data");

changing_content.innerHTML = classes_data.innerHTML;
btn_classes.classList.add('checked');

btn_classes.addEventListener("click", function () {
    changing_content.innerHTML = classes_data.innerHTML;
    btn_classes.classList.add('checked');
    btn_teachers.classList.remove('checked');
    btn_thoughts.classList.remove('checked');
});

btn_teachers.addEventListener("click", function () {
    changing_content.innerHTML = teachers_data.innerHTML;
    btn_teachers.classList.add('checked');
    btn_classes.classList.remove('checked');
    btn_thoughts.classList.remove('checked');
});

btn_thoughts.addEventListener("click", function () {
    changing_content.innerHTML = thoughts_data.innerHTML;
    btn_thoughts.classList.add('checked');
    btn_classes.classList.remove('checked');
    btn_teachers.classList.remove('checked');
});