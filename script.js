function validateForm() {
    const name = document.getElementById("name").value.trim();
    if (name === "") {
        alert("Please enter your name.");
        return false;
    }
    return true;
}
