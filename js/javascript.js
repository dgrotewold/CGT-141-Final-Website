function searchFunction() {
    var form = document.getElementById("searchForm")
    var text = form.value.toLowerCase();
    // remove any characters but letters
    text = text.replace(/[^A-Za-z]+/g, '');
    console.log(text);
    if (text.includes("spain")){
        location.href = "https://wanderlustblog.page/pages/spain.php"
    } else if (text.includes("dubai")) {
        location.href = "https://wanderlustblog.page/pages/dubai.php"
    } else if (text.includes("toronto")) {
        location.href = "https://wanderlustblog.page/pages/toronto.php"
    } else if (text.includes("france")) {
        location.href = "https://wanderlustblog.page/pages/france.php"
    } else if (text.includes("hongkong") || text.includes("hong kong")) {
        location.href = "https://wanderlustblog.page/pages/hongkong.php"
    } else if (text.includes("chongqing")) {
        location.href = "https://wanderlustblog.page/pages/chongqing.php"
    } else if (text.includes("home") || text.includes("index")) {
        location.href = "https://wanderlustblog.page"
    } else if (text.includes("about")) {
        location.href = "https://wanderlustblog.page/pages/aboutus.php"
    } else if (text.includes("contact")) {
        location.href = "https://wanderlustblog.page/pages/contactus.php"
    } else if (text.includes("newsletter")) {
        location.href = "https://wanderlustblog.page/pages/newsletter.php"
    } else if (text == "") {
        form.placeholder = "Please enter text";
    } else {
        form.value = "Page not found"
    }
}