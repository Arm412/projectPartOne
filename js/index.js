function changeColorScheme(colors){
    var bg_color = '';
    var word_color = '';
    var body_bg_color = '';
    if(colors == 'plain'){
        word_color = 'black';
        bg_color = 'white';
        document.getElementById('body').style.backgroundColor = '#737373';
        var grad = 'url(Images/Transparent.png)';
    }
    if(colors == 'pitt'){
        //background-color: #00264b;
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
        text[x].style.borderColor = word_color;
    }
    var gradient = document.getElementById('opac');
    gradient.style.backgroundImage = grad;
    gradient.style.backgroundPosition = 'bottom';
    text = document.getElementsByClassName('contact-bar');
    for (x=0;x<text.length;x++){
        text[x].style.backgroundColor = bg_color;
        text[x].style.borderColor = word_color;
    }
    document.getElementById('opac').style.borderColor = word_color;
    document.getElementById('headDiv').style.borderColor = word_color;
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

$(document).ready(function(){
    $('#cardForm').click(function (e){
        e.preventDefault();
    });
    $('.button-click').click(function(){
        $.ajax({
            url: "PHP/ContactDB.php",
            type: "POST",
            data: {
                name: $('#name').val(),
                email: $('#email').val(),
                phone: $('#phone').val(),
                note: $('#note').val(),
            },
            success: function(response){
                $('#hiddenSuccess').html(response + " Thanks!");
            }
        });
        $('.contact-container').animate({
            top: '-300px',
        }, 1000, 'linear',function(){
            $('#hiddenSuccess').animate({
                opacity: '1',
            });
            $('#homeButton').animate({
                top: '50%',
                left: '50%',
                height: '100px',
                width: '100px',
                margin: '-50px 0 0 -50px',
                backgroundSize: '100px 100px',
            }, 400, 'linear')
        });
    });
});

function setCard(suit, number){
    var url = 'Images/PlayingCards/';
    url = url + number + suit + '.png';
    document.getElementById('cardFront').style.backgroundImage = "url(" + url + ")";
    document.getElementById('cardHolder').style.display = 'block';
}

$(document).ready(function(){
    $('#miscButton').click(function(){
        $('#arrow').show();
        $('#arrow').animate({
            display: 'block',
            top: '70px',
            left: '467px',
        }, 200, function(){
            $('#arrow').css({top: '100px'});
            $('#arrow').css({left: '600px'});
            $('#arrow').css({display: 'none'});

            var links = [];
            links[0] = 'https://www.reddit.com/r/funny/';
            links[1] = 'https://www.reddit.com/r/pics/';
            links[2] = 'https://www.reddit.com/r/reactiongifs/';
            links[3] = 'https://www.reddit.com/r/ProgrammerHumor/';
            var random = Math.floor(Math.random()*links.length);
            randomLink = links[random];
            window.open(randomLink);
        });
    });
});


