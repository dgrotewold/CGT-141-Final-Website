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
    } else if (text == "canada") {
        location.href = "https://www.wanderlustblog.page/pages/canada.html"
    } else if (text == "france") {
        location.href = "https://www.wanderlustblog.page/pages/france.html"
    } else if (text == "hong kong" || text == "hongkong") {
        location.href = "https://www.wanderlustblog.page/pages/hongkong.html"
    } else if (text == "chongqing") {
        location.href = "https://www.wanderlustblog.page/pages/chongqing.html"
    } else if (text == "gaster") {
        location.href = "https://www.webpagetest.org/blank.html"
    }
}