// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// SCRIPT TO DISABLE ACCIDENTAL RIGHT-CLICKING DUE TO TOUCHSCREEN SENSITIVITY //
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
document.oncontextmenu=RightMouseDown;
document.onmousedown = mouseDown; 
function mouseDown(e) {
  if (e.which==3) {
  return null;
	}
}
function RightMouseDown() { return false;}

// ~~~~~~~~~~~~~~~~~~~~~~//
// SWITCH TO STRICT MODE //
// ~~~~~~~~~~~~~~~~~~~~~~//

"use strict";

// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
// FUNCTION TO ACTIVATE THE OVERLAY. THE PARENT CONTAINER (#vintalight) IS PASSED AS A PARAMETER //
// ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~//
var activeVintalight = function activeVintalight(container) {
    // ADD AN EVENT LISTENER TO DETECT A CLICK ON THE CHILD ELEMENT
    container.addEventListener("click", function (e) {
        var element = e.target;
        // VALIDATE THAT THE ELEMENT HAS BEEN CLICKED
        if (element.tagName == "DIV") {
            // GET THE ADDRESS AND DESCRIPTION OF THE IMAGE THAT WAS CLICKED
            var src = element.querySelector("img").getAttribute("src"),
                descrip = element.querySelector("img").getAttribute("alt"),
            // CREATE A NEW DIV THAT WILL BE USED AS AN OVERLAY
            vintalightOverlay = document.createElement("div");
            // ADD A CLASS TO THE DIV WE MADE SO THAT WE CAN STYLE IT WITH CSS
            vintalightOverlay.classList.add("vintalight-overlay");
			// ASSIGN ID TO NEW ELEMENT TO ALLOW IT TO CLOSE
			vintalightOverlay.setAttribute("id", "photo_close")
            // INJECT NEW OVERLAY HTML
            vintalightOverlay.innerHTML = "\n                <figure class=\"vintalight__container_selected active\">\n                    <div class=\"vintalight__container__photo_selected\">\n                        <img src=\"" + src + "\" alt=\"" + descrip + "\" class=\"vintalight__container__photo__img_selected\"/>\n                    </div>\n                    <figcaption class=\"vintalight__container__caption_selected\">\n                        <h3 class=\"vintalight__container__caption__text_selected\">" + descrip + "</h3>\n                    </figcaption>\n                    </figure>\n            ";
            // PUT THE OVERLAY IN THE DOM
            document.body.appendChild(vintalightOverlay);
            // ADD AN 'ACTIVE' CLASS TO GIVE IT A TRANSITION
            setTimeout(function () {
                vintalightOverlay.classList.add("active");
            }, 1);
            // REMOVE THE SCROLL BAR
            document.body.style.overflow = "hidden";
            // ADD EVENT LISTENER TO NEW ID TO WATCH FOR CLICKS
			document.getElementById("photo_close").addEventListener("click", function () {
                // REMOVE THE ACTIVE CLASS
                vintalightOverlay.classList.remove("active");
                // REMOVE TEH OVERLAY FROM THE DOM
                setTimeout(function () {
                    document.body.removeChild(vintalightOverlay);
                }, 500);
                // RETURN THE SCROLL BAR
                document.body.style.overflow = "auto";
            });
            // ADD AN EVENT TO CLOSE THE OVERLAY WITH THE ESCAPE KEY
            window.addEventListener("keyup", function (e) {
				if (e.key === "Escape") document.getElementById("photo_close").click();
            });
        }
    });
};

// ACTIVATE THE FUNCTION
window.addEventListener("load", activeVintalight(document.getElementById("vintalight")));