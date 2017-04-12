var expanded = false;
function showskill(skill_form) {
    var editform = document.getElementById(skill_form);
    if (!expanded) {
        editform.style.display = "block";
        expanded = true;
    } else {
        editform.style.display = "none";
        expanded = false;
    }
}
