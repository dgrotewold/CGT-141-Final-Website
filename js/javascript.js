function searchFunction() {
    var form = document.getElementById("searchForm")
    var text = form.value.toLowerCase();
    // remove any characters but letters
    text = text.replace(/[^A-Za-z]+/g, '');
    console.log(text);
    if (text == "spain") {
        location.href = "https://www.wanderlustblog.page/pages/spain.html"
    } else if (text == "dubai") {
        location.href = "https://www.wanderlustblog.page/pages/dubai.html"
    } else if (text == "toronto") {
        location.href = "https://www.wanderlustblog.page/pages/toronto.html"
    } else if (text == "france") {
        location.href = "https://www.wanderlustblog.page/pages/france.html"
    } else if (text == "hong kong" || text == "hongkong") {
        location.href = "https://www.wanderlustblog.page/pages/hongkong.html"
    } else if (text == "chongqing") {
        location.href = "https://www.wanderlustblog.page/pages/chongqing.html"
    } else if (text == "home" || text == "index") {
        location.href = "https://www.wanderlustblog.page/index.html"
    } else if (text == "about") {
        location.href = "https://www.wanderlustblog.page/pages/aboutus.html"
    } else if (text == "contact us" || text == "contactus") {
        location.href = "https://www.wanderlustblog.page/pages/contactus.html"
    } else if (text == "gaster") {
        location.href = "https://www.webpagetest.org/blank.html"
    } else if (text == "") {
        form.placeholder = "Please enter text";
    } else {
        form.value = "Page not found"
    }
}