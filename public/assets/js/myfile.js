let btnAccourdion = document.querySelectorAll(".btnAccourdion");
let accourdion = document.querySelectorAll(".accourdion");
let icon = document.querySelectorAll('.btnAccourdion i');

for (let i = 0; i < accourdion.length; i++) {

    btnAccourdion[i].addEventListener("click", function () {


        if (accourdion[i].style.height == 0) {
            for (let m = 0; m < accourdion.length; m++) {
                accourdion[i].style.height = accourdion[i].scrollHeight + "px";
                accourdion[i].style.padding = '0px 50px';
                icon[i].style.transform = 'rotate(180deg)';
                if (i != m) {
                    accourdion[m].style.height = null;
                    icon[m].style.transform = 'rotate(0deg)';
                    accourdion[i].style.padding ='0px 50px';
                }
            }




        } else {
            accourdion[i].style.height = null;
            icon[i].style.transform = 'rotate(0deg)';
            accourdion[i].style.padding = '0px';
        }


    })
}



