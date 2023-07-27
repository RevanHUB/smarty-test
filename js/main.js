// Responsive button

class App {
    responsiveHandler;

    constructor() {
        this.responsiveHandler = true;
    }

    get responsiveHandler() {
        return this.responsiveHandler;
    }

    set responsiveHandler(value) {
        if(value instanceof Boolean) {
            this.responsiveHandler = value;
        }
    }

}

window.addEventListener('load', () => {

    var app = new App();
    var responsiveButton = document.getElementById("mobile-burger-button");
    var responsiveContainer = document.getElementById("responsive-menu");

    responsiveButton.addEventListener('click', () => {
        var responsiveHandler = app.responsiveHandler;
        if(responsiveHandler) {
            responsiveContainer.style.display = "flex";
            responsiveContainer.style.height = "100vh";
            app.responsiveHandler = false;
        } else {
            responsiveContainer.style.height = "0vh";
            app.responsiveHandler = true;
        }

    })

    
    var generics = document.getElementsByClassName("generic-container");

    Array.from(generics).forEach(element => {
        var random = Math.floor(Math.random() * 2 + 1); 
        element.style.background = "url('./img/generic/bg-"+ random + ".jpg')";
    });

})  
