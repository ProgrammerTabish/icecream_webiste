

let searchmod;
function reveal() {
    var reveals = document.querySelectorAll(".reveal");

    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;

        if (elementTop < windowHeight - elementVisible || searchmod == true) {
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

const navb = { navbo: document.getElementById("navbar") }
let count = navb.navbo.childElementCount;
let time = 0;
let navelem = document.getElementById("navbar").innerHTML;

function addsearch() {

    const back = document.createElement("button");
    const form = document.createElement("form");
    const input = document.createElement("input");
    const subimit = document.createElement("button");

    navb.navbo.appendChild(form);
    form.appendChild(back)

    back.setAttribute("class", "navbuttons");
    back.setAttribute("type", "button");

    back.setAttribute("onclick", "erasenavelements()")
    back.setAttribute("id", "sback");
    back.innerHTML = "<-";

    form.appendChild(input);

    input.setAttribute("type", "text");
    input.setAttribute("id", "myInput");
    input.setAttribute("onkeyup", "search()")
    input.setAttribute("placeholder", "Search anything on this page!")
    form.appendChild(subimit);

    subimit.setAttribute("type", "text");
    subimit.setAttribute("class", "navbuttons");
    subimit.setAttribute("type", "reset")
    subimit.setAttribute("id", "ssubmit")
    subimit.setAttribute("value", "Reset");
    subimit.innerHTML = "Reset"
}

function addnavbuttons() {
    document.getElementById("navbar").innerHTML = navelem;
}
let counting = 0;
function erasenavelements() {
    count = navb.navbo.childElementCount;

    for (i = 0; i < count; i++) {
        navb.navbo.removeChild(navb.navbo.lastElementChild)
    }
    if (count > 3) {
        erasetags();
        addsearch();
    }

    else {
        reset_search();
        display_every_tag();
        addnavbuttons();
    }

}


function erasetags() {
    searchmod = true;
    if (searchmod == true) {
        window.scroll("0", "10");
    }
    let subh = document.getElementsByClassName("subheadings");
    for (i = 0; i < subh.length; i++) {
        subh[i].style.display = "none"
    }
    let bigdivs = document.getElementsByClassName("subheadings");
    for (i = 0; i < bigdivs.length; i++) {
        bigdivs[i].style.display = "none"
    } let h1_erase = document.getElementsByTagName("h1");
    h1_erase[0].style.display = "none";
    try {
        let quote_div = document.getElementById("quote");
        quote_div.style.display = "none";
        let logo_div = document.getElementById("logo");
        logo_div.style.display = "none";



    }
    catch {
        console.log("not on that page");
    }
}
function display_every_tag() {
    searchmod = false;
    let subh = document.getElementsByClassName("subheadings");
    for (i = 0; i < subh.length; i++) {
        subh[i].style.display = ""
    }
    let bigdivs = document.getElementsByClassName("subheadings");
    for (i = 0; i < bigdivs.length; i++) {
        bigdivs[i].style.display = ""
    } let h1_erase = document.getElementsByTagName("h1");
    h1_erase[0].style.display = "block";
    try {
        let quote_div = document.getElementById("quote");
        quote_div.style.display = "";
        let logo_div = document.getElementById("logo");
        logo_div.style.display = "";



    }
    catch {
        console.log("not on that page");
    }
}

function reset_search() {
    var ul, li, i;
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
function reply_click(clicked_id) {
    console.log(clicked_id);
}
let login = false;
function set_login_true() {

    document.getElementById("button").innerHTML = "<image id='profile' src='images/profile.png'>";
    document.getElementById("profile").style.borderRadius = "50%";
    document.getElementById("profile").style.width = "30px";
    document.getElementById("profile").style.height = "35px";
    document.getElementById("button").style.border = "3px solid #236F21";


    login = true;




    document.getElementById("myBtn").style.backgroundColor = "green";




}
function set_login_true_p() {
    login = true;




    document.getElementById("myBtn").style.backgroundColor = "green";
}
function sign1() {
    if (login == true) {

        window.location.href = "cart.php";
    }
    else {
        window.location.href = "signin.php";
    }


}
function check_login() {
    if (login == true) {

        window.location.href = "profile.php";
    }
    else {
        window.location.href = "signin.php";
    }


}
function cart_update(str) {
    console.log(str);
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            // contentType: "application/json; charset=utf-8",
            url: "upload_cart.php",
            data: { cart: str },
        });
    });
}


let s = '';

function get_cart() {
    $(document).ready(function () {
        $.ajax({
            type: "GET",
            // contentType: "application/json; charset=utf-8",
            url: "get_cart.php",
            success: function (data) {
                s = data;

            }

        });

    });



}



let cart_id_arr = [];




let cart_str;

function add_element(product_id) {
    cart_arr.push(product_id);

    cart_str = '';
    for (let i = 0; i < cart_arr.length; i++) {
        cart_str.concat(product_id + ", ");

    }


    let s_str = [];
    s_str.pop();
    for (let i = 0; i < cart_arr.length; i++) {

        s_str.push(cart_arr[i]);

    }


    console.log();
    cart_update(s_str.join(' '));








    console.log(cart_arr);

}



function update_divs(cart_array) {
    let len_arr = cart_array.length;
    for (i = 0; i < len_arr; i++) {

        let n = document.getElementById(cart_array[i]).querySelectorAll(".navbuttons");
        n[0].innerHTML = "remove";

    }
}
function revert_divs(product_id) {


    let n = document.getElementById(product_id).querySelectorAll(".navbuttons");
    n[0].innerHTML = "Add to cart";


}
function remove_from_cart(product_id) {

    revert_divs(product_id);
    let index_arr = cart_arr.indexOf(product_id);
    if (index_arr !== -1) {
        cart_arr.splice(index_arr, 1);

        let s_str = [];
        s_str.pop();
        for (let i = 0; i < cart_arr.length; i++) {

            s_str.push(cart_arr[i]);

        }
        cart_update(s_str.join(' '));
    }
}

get_cart();


let cart_arr_str = [];
function convert_cart_arr() {

    get_cart();
    console.log(s);
    // cart_arr_str = s.split(" ");
    // cart_arr = cart_arr_str;
}
cart_arr = [];






function update_badge() {
    let num = cart_arr.length
    let n = document.querySelectorAll(".badge");
    n[0].innerText = num;
}
function add_to_cart(cart_element) {
    if (login == true) {


        let product_id = cart_element.id
        console.log(product_id);
        if (cart_arr.indexOf(product_id) !== -1) {


            remove_from_cart(product_id);
            update_badge();
        }
        else {
            add_element(product_id);
            update_divs(cart_arr);
            update_badge();
        }
    }
    else {
        window.location.href = 'signin.php';

    }

}










