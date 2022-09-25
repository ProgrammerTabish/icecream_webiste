

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
    get_cart();
    document.getElementById("button").innerHTML = "<image id='profile' src='images/profile.png'>";
    document.getElementById("profile").style.borderRadius = "2px";
    document.getElementById("profile").style.width = "23px";
    document.getElementById("profile").style.height = "30px";
    document.getElementById("button").style.border = "0px";
    document.getElementById("button").style.boxShadow = "1px 1px 10px 5px";
    login = true;




    document.getElementById("myBtn").style.backgroundColor = "green";

    // document.getElementById("myBtn").style.boxShadow = "2px 3px 9px 5px";




}
function set_login_true_p() {
    login = true;




    document.getElementById("myBtn").style.backgroundColor = "green";
    // document.getElementById("myBtn").style.boxShadow = "4px 4px 8px 1px";
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
function cart_update(strings, addr) {
    // console.log(strings);
    $(document).ready(function () {
        $.ajax({
            type: "POST",
            // contentType: "application/json; charset=utf-8",
            url: addr,
            data: { cart: strings },
        });
    });
}


let s = '';
let call = 0;
let cart_arr = [];
function get_cart() {
    $(document).ready(function () {
        $.ajax({
            type: "GET",

            url: "get_cart.php",
            success: function (data) {


                cart_arr = data.split(" ");
                if (cart_arr[0] == "") {
                    cart_arr.shift();
                }


            }

        });

    });

    update_divs();

    call = call + 1;

}
let pid_str;
function get_pids() {
    $(document).ready(function () {
        $.ajax({
            type: "GET",

            url: "get_pid.php",
            success: function (data) {


                pid_str = data.split(" ");
                console.log(pid_str);


            }

        });

    });

    update_divs();

    call = call + 1;

}















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
    cart_update(s_str.join(' '), "upload_cart.php");









}



function update_divs() {


    let len_arr = cart_arr.length;
    for (i = 0; i < len_arr; i++) {
        try {
            let n = document.getElementById(cart_arr[i]).querySelectorAll(".navbuttons");
            n[0].innerHTML = "Remove";

        }
        catch
        {

        }

    }
    update_badge();
}
function revert_divs(product_id) {


    let n = document.getElementById(product_id).querySelectorAll(".navbuttons");
    n[0].innerHTML = "Add to cart";


}






function remove_from_cart(product_id) {

    let path = window.location.pathname;
    let page = path.split("/").pop();
    if (page != "cart.php") {

        revert_divs(product_id);
    }


    let index_arr = cart_arr.indexOf(product_id);

    if (index_arr !== -1) {
        cart_arr.splice(index_arr, 1);

        let s_str = [];
        s_str.pop();
        for (let i = 0; i < cart_arr.length; i++) {

            s_str.push(cart_arr[i]);

        }
        cart_update(s_str.join(' '), "upload_cart.php");
    }
}





function update_badge() {
    try {
        let num = cart_arr.length
        let n = document.querySelectorAll(".badge");
        if (num > 0) {
            n[0].innerText = num;
            document.getElementById("myBtn").style.boxShadow = "1px 1px 10px 5px";
        }
        else {
            n[0].innerText = "";

            document.getElementById("myBtn").style.boxShadow = "0px 0px 0px 0px";
        }

    }
    catch {

    }

}











function add_to_cart(cart_element) {
    if (login == true) {

        console.log(cart_element);



        let product_id = cart_element.id
        console.log(product_id);
        if (cart_arr.indexOf(product_id) !== -1) {

            remove_from_cart(product_id);
            update_badge();

        }
        else {

            add_element(product_id);
            update_divs();
            update_badge();
        }
    }
    else {
        window.location.href = 'signin.php';

    }

}



function copy_it(text) {
    navigator.clipboard.writeText(text);
    alert("Copied the text: " + text);

}

function calculate_cost() {
    let grand_ttl = 0;
    for (i = 0; i < cart_arr.length; i++) {
        let quantity = document.querySelectorAll("input")[i].value;
        let price_string = document.getElementsByClassName("cost_str")[i].innerText;
        let cost_cart = price_string.match(/\d+/)[0];
        // console.log(quantity);
        // console.log(cost_cart);
        let ttl = quantity * cost_cart;

        document.getElementsByClassName("ammount")[i].childNodes[1].innerHTML = ttl + "/-";
        grand_ttl += ttl;



    }
    document.getElementById("total_ammount").innerText = grand_ttl + "/-";
}


let quantity_str = '';

function create_qnt_str() {
    quantity_str = '';
    for (i = 0; i < cart_arr.length; i++) {
        let id = document.querySelectorAll(".content")[i].id;
        let qnt = document.querySelectorAll("input")[i].value;
        quantity_str = quantity_str + " " + id + "-" + qnt;
    }
    quantity_str = quantity_str.trim();
}



function update_total() {

    let char_package = "";
    // console.log(counter.parentElement.parentElement.childNodes[1].childNodes[1].childNodes[7].childNodes[1].childNodes[1].value);
    for (i = 0; i < cart_arr.length; i++) {

        let quantity = document.querySelectorAll("input")[i].value;
        char_package = char_package + " " + quantity;


    }

    char_package = char_package.substring(1);

    cart_update(char_package, "upload_pid.php");
    calculate_cost();
}





function upadte_stats() {
    calculate_cost();
    create_qnt_str();
    update_total();
    if (document.getElementById("total_ammount").innerText == "") {
        update_status();

    }
}



let outval;




function increase(output) {

    outval = output;
    let cnti = parseInt(outval.childNodes[7].childNodes[1].childNodes[1].value);
    if (cnti > 0) {
        cnti++;
        outval.childNodes[7].childNodes[1].childNodes[1].value = cnti;
    }


    update_total();
    create_qnt_str();
}
function decrease(output) {
    let cntd = parseInt(outval.childNodes[7].childNodes[1].childNodes[1].value);

    outval = output;
    if (cntd > 1) {
        cntd--;

        outval.childNodes[7].childNodes[1].childNodes[1].value = cntd;
    }
    update_total();
    create_qnt_str();
}

function qnt_change(op) {
    // console.log(op.parentElement.parentElement);
    let ip_val = op.childNodes[1].value;

    if (ip_val > 999) {

        console.log(ip_val)
        op.childNodes[1].value = 999;

    }
    if (ip_val < 1) {

        console.log(ip_val)
        op.childNodes[1].value = 1;

    }
    if (ip_val == "") {

        console.log(ip_val)
        op.childNodes[1].value = 1;

    }
    if (ip_val % 1 != 0) {

        op.childNodes[1].value = Math.floor(ip_val);

    }

    if (ip_val !== ~~ip_val) {
        op.childNodes[1].value = Math.trunc(ip_val);
    }
    if (ip_val == 0) {
        op.childNodes[1].value = 1;
        qnt_change(op);

    }
    if (ip_val[0] == ".") {
        op.childNodes[1].value = 1;
    }

    update_total(op.parentElement.parentElement)
}




function remove_cart(key) {

    let id_remove = key.parentElement.parentElement.childNodes[1].childNodes[3].id;
    document.getElementById(id_remove).parentElement.parentElement.remove();
    let length = document.querySelectorAll(".serial_number").length;

    if (length == 0) {

        console.log()
        // document.childNodes[1].childNodes[2].childNodes[7].childNodes[3].remove();
        // document.querySelectorAll("#prompt") = "No data!";

    }
    else {
        for (i = 0; i < length; i++) {
            document.querySelectorAll(".serial_number")[i].innerHTML = i + 1;
        }

    }


    remove_from_cart(id_remove);
    upadte_stats();



}
function dispaly_serial_number() {
    let length = document.querySelectorAll(".serial_number").length;
    for (i = 0; i < length; i++) {
        document.querySelectorAll(".serial_number")[i].innerHTML = i + 1;
    }

}
window.onload = function () { dispaly_serial_number(); };
var path = window.location.pathname;
var page = path.split("/").pop();
if (page == "cart.php") {


    setTimeout(function () { upadte_stats(); }, 1000);
    setTimeout(function () { upadte_stats(); }, 2000);
    setTimeout(function () { upadte_stats(); }, 3000);
    setTimeout(function () { upadte_stats(); }, 4000);
    setTimeout(function () { get_cart(); }, 1000);
    setTimeout(function () { get_cart(); }, 2000);
    setTimeout(function () { get_cart(); }, 3000);
    setTimeout(function () { get_cart(); }, 4000);
}

if (page = "index.php" || page == "product.php");
{
    setTimeout(function () { get_cart(); }, 1000);
    setTimeout(function () { get_cart(); }, 2000);
    setTimeout(function () { get_cart(); }, 3000);
    setTimeout(function () { get_cart(); }, 4000);
}