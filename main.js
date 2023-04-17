
document.querySelector('.btn-mode').addEventListener ("click", function (){
    //When Dark Mode button is clicked, toggle the dark-mode class on the body tag
    document.querySelector('body').classList.toggle("dark-mode");

    //When Dark Mode button is clicked, change the text of the button
    var textMode = document.getElementById("btn-mode-text");
    if (textMode.textContent === "Dark Mode") {
        textMode.textContent = "Light Mode";
    } else {
        textMode.textContent = "Dark Mode";
    }
    //When Dark Mode button is clicked, change the logo
    var imgLogo1 = document.getElementById("logo-standard");
    var imgLogo2 = document.getElementById("logo-alt");
    if (imgLogo1.style.display === "none") {
        imgLogo1.style.display = "block";
        imgLogo2.style.display = "none";
    } else {
        imgLogo1.style.display = "none";
        imgLogo2.style.display = "block";
    }
    //Store item in local storage 
    
    if(this.textContent === 'Light Mode') {
            localStorage.setItem('dark', this.textContent);
    } else {
            localStorage.removeItem('dark', this.textContent); 
    }
 });

//Click the home link and remove the local stored letterClick item
document.querySelector('.link-logo').addEventListener ("click", function (){
    localStorage.removeItem('letterClick', 'clicked');
});

//Click on any letter in landing page and show the up arrow 
const letterLinks = document.querySelectorAll('.div-list .link-landing');

letterLinks.forEach(function (i) {
    i.addEventListener ("click", function (){
        localStorage.setItem('letterClick', 'clicked');
        document.querySelector('.btn-scroll-top').style.display = "block";
    });
});

//Reveal text on page load
window.onload = function() {
    var headers = document.querySelectorAll(".secreveal");
    headers.forEach(function(secreveal) {
        secreveal.classList.add("secrevealVisible");
    });
};



//Click on the up arrow in the landing page and hide it
document.querySelector('.btn-scroll-top').addEventListener ("click", function (){
    this.style.display = "none";
});




