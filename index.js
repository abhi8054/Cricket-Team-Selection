function getTeam(){
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function(){
        if(this.status == 200 && this.readyState == 4){
            // alert(this.response);
            document.getElementById("newplayer").innerHTML = this.response;
        }
    }
    xhr.open("GET","http://localhost/CricketTeamSelection/user/cascade.php?action=getplayer",true);
    xhr.send();
}

const obtn = document.getElementById("smallmenuopen");
const cbtn = document.getElementById("smallmenuclose");
const navbar = document.querySelector(".nav");


function openbtn(){
    navbar.setAttribute("style","display:block");
    cbtn.setAttribute("style","display:block");
    obtn.setAttribute("style","display:none");
}
function closebtn(){
    navbar.setAttribute("style","display:none");
    cbtn.setAttribute("style","display:none");
    obtn.setAttribute("style","display:block");
}