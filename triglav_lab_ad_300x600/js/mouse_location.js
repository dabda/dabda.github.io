var className;
var numberOfPics=24;

function HeadImage(className){

    /* Setting the global instance of classname to the given parameter*/
    this.className = className;

    /* Calculating the borders and step of the image */
    var imageWidth = parent.document.body.clientWidth;
    //var imageWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    step = imageWidth / numberOfPics;

    /* This function determines where the mouse pointer is relative to the image
     * and displays the correct image accordingly. */
    this.setImageDirection = function(){
        slika = Math.round(mouseX300x600/step) + 1;
        for (const element of document.querySelectorAll("."+this.className+" img")) {
            element.style.zIndex = 0;
            if (element.classList.contains(slika.toString())){
                element.style.zIndex = 1;
            }
        }
    };
}

function HeadImage_inside(className){

    /* Setting the global instance of classname to the given parameter*/
    this.className = className;

    /* Calculating the borders and step of the image */
    var imageWidth = parent.document.body.clientWidth;
    // Get Left Position
    var iframeX = window.parent.document.getElementById('triglav_lab_300x600').offsetLeft;
    //var imageWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    step = imageWidth / numberOfPics;

    /* This function determines where the mouse pointer is relative to the image
     * and displays the correct image accordingly. */
    this.setImageDirection = function(){
        slika = Math.round((mouseX300x600_inside+iframeX)/step) + 1;
        for (const element of document.querySelectorAll("."+this.className+" img")) {
            element.style.zIndex = 0;
            if (element.classList.contains(slika.toString())){
                element.style.zIndex = 1;
            }
        }
    };
}
