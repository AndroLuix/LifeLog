document.addEventListener('DOMContentLoaded', function () {
    var url = window.location.pathname;
    var pageName = url.substring(url.lastIndexOf('/') + 1);
    if (pageName === "") {
        pageName = "Login";
    }
    pageName = pageName.charAt(0).toUpperCase() + pageName.slice(1);
    document.getElementById('pageTitle').innerText = pageName;
});