//    //    //     form
var myPlaceholder = document.getElementById("dis_placeholder"),
    myPlaceholder_con = document.getElementById("dis_placeholder_con"),
    myinputemail = document.getElementById("dis_labelemail"),
    myinputname = document.getElementById("dis_labelname"),
    myinputlogin = document.getElementById("inputlogin"),
    mylabelemail =document.getElementById("label_login1"),
    mylabelname =document.getElementById("label_login0"),
    mylabelpass =document.getElementById("label_login2");
// label passwoed & placeholder
myPlaceholder.onfocus =function disappear () {
    "use strict";
    if(this.placeholder === "Write a strong password")
        this.placeholder ="";
    // mylabelpass.style.display = 'none';   
}
myPlaceholder.onblur = function appear () {
    "use strict";
    if(this.placeholder === "")
        this.placeholder ="Write a strong password";
        // mylabelpass.style.display = 'inline';
}
myPlaceholder_con.onfocus =function disappear () {
    "use strict";
    if(this.placeholder === "Confirmation The password")
        this.placeholder ="";
    // mylabelpass.style.display = 'none';   
}
myPlaceholder_con.onblur = function appear () {
    "use strict";
    if(this.placeholder === "")
        this.placeholder ="Confirmation The password";
        // mylabelpass.style.display = 'inline';
}
var show_pass = document.getElementById("show_pass"),
   hide_pass = document.getElementById("hide_pass");

    show_pass.onclick = function(){
        'use strict';
            myPlaceholder.setAttribute('type','text');
            this.style.display = 'none';
            hide_pass.style.display = 'inline';
    }
var show_pass_con = document.getElementById("show_pass_con"),
   hide_pass_con = document.getElementById("hide_pass_con");

    show_pass_con.onclick = function(){
        'use strict';
            myPlaceholder_con.setAttribute('type','text');
            this.style.display = 'none';
            hide_pass_con.style.display = 'inline';
    }

// // label email
// myinputemail.onfocus =function disappear1 () {
//     "use strict";
//     mylabelemail.style.display = 'none';   
// }
// myinputemail.onblur = function appear1 () {
//     "use strict";
//     mylabelemail.style.display = 'inline';
// }
// label name 
// myinputname.onfocus =function disappear1 () {
//     "use strict";
//     mylabelname.style.display = 'none';   
// }
// myinputname.onblur = function appear1 () {
//     "use strict";
//     mylabelname.style.display = 'inline';
// }
// submit 
myinputlogin.onfocus = function add () {
    "use strict";
    document.getElementById("Confirm_form_login").classList.add("Confirm_form");
}
// back
document.getElementById("baketologin").onclick = function remove () {
    document.getElementById("Confirm_form_login").classList.remove("Confirm_form");
}
// congirm the code
var myConfirm_login = document.getElementById("Confirm_login");

myConfirm_login.onfocus =function disappear () {
    "use strict";
    if(this.placeholder === "Write the code")
        this.placeholder ="";
}
myConfirm_login.onblur = function appear () {
    "use strict";
    if(this.placeholder === "")
        this.placeholder ="Write the code";
}