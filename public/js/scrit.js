if (window.XMLHttpRequest) { // Mozilla, Safari, IE7+...
    httpRequest = new XMLHttpRequest();
} else if (window.ActiveXObject) { // IE 6 et antérieurs
    httpRequest = new ActiveXObject("Microsoft.XMLHTTP");
}

var divs = document.querySelector('#affichejeux')
var q = document.querySelector('#q')
var form = document.querySelector('#subre')

q.addEventListener('keyup', function(e) {
    e.preventDefault()
    var httpRequest = new XMLHttpRequest();
    var q = document.querySelector('#q')
    httpRequest.onreadystatechange = function() {
        if (httpRequest.readyState === 4) {
            divs.innerHTML = ''
            if (httpRequest.status === 200) {
                divs.innerHTML = httpRequest.responseText
                divs.classList.add('affjeusty')
            } else {
                alert('impossible de charger')
            }
        }
    }
    httpRequest.open('POST', '../rechercheajax.php', true)
    httpRequest.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded')
    httpRequest.send('jeux=' + q.value)
})