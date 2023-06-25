let dtLaki=document.querySelector(".dt-laki");
dtLaki.style.display ="none";

let isShow = true;
function showHideDTlaki(){
    if (isShow){
         dtLaki.style.display="block";
         isShow = false;
         } else
        {
             dtLaki.style.display="none";
        isShow = true;
        }
    
        }