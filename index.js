

let searchmod;
function reveal() {
    var reveals = document.querySelectorAll(".reveal");
  
    for (var i = 0; i < reveals.length; i++) {
      var windowHeight = window.innerHeight;
      var elementTop = reveals[i].getBoundingClientRect().top;
      var elementVisible = 150;
  
      if (elementTop < windowHeight - elementVisible || searchmod==true) {
        reveals[i].classList.add("active");
      } else {
        reveals[i].classList.remove("active");
      }
    }
  }

     window.addEventListener("scroll", reveal);
window.onscroll = function () { myFunction() }; 




var navbar = document.getElementById("navbar");


var sticky = navbar.offsetTop;


function myFunction() {
    if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
    } else {
        navbar.classList.remove("sticky");
    }

}
var prevScrollpos = window.pageYOffset;
window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;
    if (prevScrollpos > currentScrollPos) {
        document.getElementById("navbar").style.top = "0";
    } else {
        document.getElementById("navbar").style.top = "-20%";
    }
    prevScrollpos = currentScrollPos;
}

const navb ={navbo:document.getElementById("navbar")}
let count=navb.navbo.childElementCount;
let time=0;
let navelem=document.getElementById("navbar").innerHTML;

function addsearch()
{   
    
    const back=document.createElement("button");
    const form= document.createElement("form");
   const input=document.createElement("input");
   const subimit=document.createElement("button");
  
   navb.navbo.appendChild(form);
    form.appendChild(back)
    
   back.setAttribute("class","navbuttons");
  back.setAttribute("type","button");
  
  back.setAttribute("onclick","erasenavelements()")
   back.setAttribute("id","sback");
   back.innerHTML="<-";
   
   form.appendChild(input);
   
   input.setAttribute("type","text");
   input.setAttribute("id","myInput");
   input.setAttribute("onkeyup","search()")
   input.setAttribute("placeholder","Search anything on this page!")
   form.appendChild(subimit);
   
   subimit.setAttribute("type","text");
   subimit.setAttribute("class","navbuttons");
   subimit.setAttribute("type","reset")
   subimit.setAttribute("id","ssubmit")
   subimit.setAttribute("value","Reset");
   subimit.innerHTML="Reset"
}

function addnavbuttons()
{
    document.getElementById("navbar").innerHTML=navelem;
}
let counting=0;
function erasenavelements()
{    
     count=navb.navbo.childElementCount;
   
   for(i=0;i<count;i++)
   {
    navb.navbo.removeChild(navb.navbo.lastElementChild)
   } 
    if(count>3)
    {
         erasetags();
        addsearch();
    }
         
    else{
        reset_search();
        display_every_tag();
        addnavbuttons();
    } 
    
}


function erasetags()
{   searchmod=true;
    if(searchmod==true)
    {
        window.scroll("0","10");
    }
    let subh=document.getElementsByClassName("subheadings");
    for(i=0;i<subh.length;i++)
        {
            subh[i].style.display="none"
        }
        let bigdivs=document.getElementsByClassName("subheadings");
for(i=0;i<bigdivs.length;i++)
    {
        bigdivs[i].style.display="none"
    }  let h1_erase=document.getElementsByTagName("h1");
    h1_erase[0].style.display="none";
    try {
            let quote_div=document.getElementById("quote");
             quote_div.style.display="none";
             let logo_div=document.getElementById("logo");
             logo_div.style.display="none";
            
            

    }
    catch{
        console.log("not on that page");
    }
}
function display_every_tag()
{
    searchmod=false;
    let subh=document.getElementsByClassName("subheadings");
    for(i=0;i<subh.length;i++)
        {
            subh[i].style.display=""
        }
        let bigdivs=document.getElementsByClassName("subheadings");
for(i=0;i<bigdivs.length;i++)
    {
        bigdivs[i].style.display=""
    } let h1_erase=document.getElementsByTagName("h1");
    h1_erase[0].style.display="block";
    try {
            let quote_div=document.getElementById("quote");
             quote_div.style.display="";
             let logo_div=document.getElementById("logo");
             logo_div.style.display="";
             
            

    }
    catch{
        console.log("not on that page");
    }
}

function reset_search()
{
    var  ul, li, i;
    ul = document.getElementById("page");
    li = ul.getElementsByClassName('content');
    for (i = 0; i < li.length; i++) {
        li[i].style.display = ""; 
    }
}

function search() {
    
    var input, filter, ul, li, a, i, txtValue, txtValue2;
    input = document.getElementById('myInput');
    filter = input.value.toUpperCase();
    ul = document.getElementById("page");
    li = ul.getElementsByClassName('content');
   
  
    

    for (i = 0; i < li.length; i++) {
        b = li[i].getElementsByTagName("p")[0];
      a = li[i].getElementsByTagName("h3")[0];
      

      txtValue = a.textContent || a.innerText;
      txtValue2 = b.textContent || b.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
       
           
      }
      else if (txtValue2.toUpperCase().indexOf(filter) > -1) {
        li[i].style.display = "";
       
      } 
      else {
        
        li[i].style.display = "none";
      }
    }
  }
  function reply_click(clicked_id)
  {
      console.log(clicked_id);
  }
let cart_element
let cart_arr=[];
let signin=true;
  function add_to_cart(cart_element)
  {
    if(signin==true)
    {
        cart_arr.push(cart_element)
         console.log(cart_arr);
         let i=0;
         for(i=0;i<cart_arr.length;i++)
         {
            // document.getElementById("cart_products").appendChild(cart_arr[i]);
         }
         console.log(document.getElementById("cart_products"))

    }
    else
    {
        window.location.href = 'signin.html';
    }
      
  }
 