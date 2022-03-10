var btn_teachers = document.querySelector("#epid_teachers_btn");
var btn_classes = document.querySelector("#epid_classes_btn");
var btn_thoughts = document.querySelector("#epid_thoughts_btn");
var changing_content = document.querySelector("#changing_content");
var classes_data = document.querySelector("#classes_data");
var teachers_data = document.querySelector("#teachers_data");
var thoughts_data = document.querySelector("#thoughts_data");

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

color = [228, 223, 210];
computed_color = opacitator(color);

function opacitator(color) {
    var hi = 1,
        lo = 0,
        tol = 0.01,
        rgbs = [color[0], color[1], color[2]];

    while (hi - lo > tol) {
        var m = lo + (hi - lo) / 2;
        if (getOpositesForOpacity(m, rgbs, true)) {
            hi = m;
        } else {
            lo = m;
        }
    }
    rgbs = getOpositesForOpacity(hi, rgbs);
    return [rgbs[0], rgbs[1], rgbs[2], hi];
}

function getOpositesForOpacity(opacity, rgbs, returnValidity = false) {
    console.log(rgbs)
    var newList = [],
        valid = true;
    rgbs.forEach(function (item) {
        newVal = oppositeForOpacity(opacity, item);
        if (newVal >= 0) {
            newList.push(newVal);
        } else {
            return false;
        }
    });
    if (returnValidity) {
        return valid;
    } else {
        return newList;
    }
}

function oppositeForOpacity(opacity, c) {
    return 255 - (255 - c) / opacity;
}

console.log(computed_color);