function changeColorScheme(colors){
    var bg_color = '';
    var word_color = '';
    var body_bg_color = '';
    if(colors == 'pitt'){
        var grad = 'url(Images/Gradient.png)';
        document.getElementById('body').style.backgroundColor = 'lightgrey';
    }
    if(colors == 'christmas'){
        word_color = 'white';
        bg_color = 'green';
        var grad = 'url(Images/Green-Gradient.png)';
        document.getElementById('body').style.backgroundColor = 'red';
    } else if(colors == 'halloween'){
        word_color = 'darkorange';
        bg_color = 'black';
        var grad = 'url(Images/Black-Gradient.png)';
        document.getElementById('body').style.backgroundColor = 'grey';
    }
    var text = document.getElementsByClassName('yellow-text');
    var x;
    for (x=0;x<text.length;x++){
        text[x].style.color = word_color;
    }
    document.getElementById('head').style.color = word_color;
    document.getElementById('headDiv').style.backgroundColor = bg_color;
    text = document.getElementsByClassName('body-information-div');
    for (x=0;x<text.length;x++){
        text[x].style.backgroundColor = bg_color;
    }
    var gradient = document.getElementById('opac');
    gradient.style.backgroundImage = grad;
    gradient.style.backgroundPosition = 'bottom';
    text = document.getElementsByClassName('contact-bar');
    for (x=0;x<text.length;x++){
        text[x].style.backgroundColor = bg_color;
    }
    text = document.getElementsByClassName('nav-links');
    for (x=0;x<text.length;x++){
        text[x].style.backgroundColor = bg_color;
    }
}

function placeName(name){
    document.getElementById('name').style.display = 'none';
    var hiddenElement = document.getElementById('hidden_name');
    hiddenElement.style.display = 'block';
    hiddenElement.innerHTML = 'Hello ' + name + '!';
}

$(document).ready(function(){
    $('#changeColors').click(function (e){
        e.preventDefault();
    })
})