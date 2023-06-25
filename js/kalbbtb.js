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

let dtCw=document.querySelector(".dt-cw");
dtCw.style.display ="none";
        
let isShowcw = true;
function showHideDTcw(){
if (isShowcw){
dtCw.style.display="block";
isShowcw = false;
} else
{
dtCw.style.display="none";
isShowcw = true;
}
}