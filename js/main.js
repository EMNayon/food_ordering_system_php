//admin pannel
// const admin = adminLoginPage = ()=>{
//     const adminContainerId = document.getElementById('admin-field');
//     if(adminContainerId == admin) {
        
//     }
//     else{
//         const adminloginText = document.getElementById('phone-details');
//         adminloginText.innerHTML = ` `;
//         const newDiv = document.createElement('div');
//         newDiv.innerHTML = `
            
//             <h5 class= "fs-3">Admin Panel</h5>
//             <p class= "fs-5">User name :</p>
//             <input class= "p-2" type="text" id="uname" name="uname" placeholder= "username">
//             <p class= "fs-5 mt-3">Password</p>
//             <input class= "p-2" type="password" id="password" name="password" placeholder= "type password"> <br>
//             <input class="mt-4 p-2 px-4 fs-5 text-center btn btn-primary" type="submit" value="Submit">
            
//        `;
//        adminloginText.appendChild(newDiv);
//     }
   
// }
//registraition pannel
// const user = userLoginPage = ()=>{
//     const adminContainerId = document.getElementById('admin-field');
//     if(adminContainerId == user) {
        
//     }
//     else{
//         const adminloginText = document.getElementById('phone-details');
//         adminloginText.innerHTML = ` `;
//         const newDiv = document.createElement('div');
//         newDiv.innerHTML = `
//             <button onclick = "ragistrationForm()" class="btn btn-primary px-4 fs-5">Registration</button>
//             <button onclick = "loginForm()" class="btn btn-primary mx-4 px-5 fs-5">Log in</button>
//        `;
//        adminloginText.appendChild(newDiv);
//     }
// }

// //ragistration form display
// const ragistrationForm =()=>{
//     const adminloginText = document.getElementById('phone-details');
//     adminloginText.innerHTML = ` `;
//     const newDiv = document.createElement('div');
//     newDiv.innerHTML = `
//     <h5 class= "fs-3">Registration For User</h5>
//     <p class= "fs-5">Full Name :</p>
//     <input class= "p-2" type="text" id="fname" name="fname" placeholder= "Full Name">
//     <p class= "fs-5">User Name :</p>
//     <input class= "p-2" type="text" id="uname" name="uname" placeholder= "Username">
//     <p class= "fs-5">Mobile Number :</p>
//     <input class= "p-2" type="text" id="phone" name="phone" placeholder= "username">
//     <p class= "fs-5 mt-3">Password</p>
//     <input class= "p-2" type="password" id="fname" name="fname" placeholder= "type password"> <br>
//     <input class="mt-4 p-2 px-4 fs-5 text-center btn btn-primary" type="submit" value="Submit">
//    `;
//    adminloginText.appendChild(newDiv);
// }
// //log in form display
// const loginForm =()=>{
//     const adminloginText = document.getElementById('phone-details');
//     adminloginText.innerHTML = ` `;
//     const newDiv = document.createElement('div');
//     newDiv.innerHTML = `
//     <h5 class= "fs-3"> Log-in For User</h5>
//     <p class= "fs-5">user name :</p>
//     <input class= "p-2" type="text" id="fname" name="fname" placeholder= "username">
//     <p class= "fs-5 mt-3">password</p>
//     <input class= "p-2" type="password" id="fname" name="fname" placeholder= "type password"> <br>
//     <input class="mt-4 p-2 px-4 fs-5 text-center btn btn-primary" type="submit" value="Submit">
//    `;
//    adminloginText.appendChild(newDiv);
// }

var modal = document.getElementById('id01');
window.onclick = function(event){
    if(event.target === modal){
        modal.style.display = "none";
    }
}

//active navbar
let nav = document.querySelector(".navigation-wrap");
window.onscroll = function(){
    if(document.documentElement.scrollTop > 20){
        nav.classList.add("scroll-on");
    }else{
        nav.classList.remove("scroll-on");
    }
}

//nav hide
let navBar = document.querySelectorAll('.nav-link');
let navCollapse = document.querySelector('.navbar-collapse.collapse');
navBar.forEach(function(a){
    a.addEventListener("click",function(){
        navCollapse.classList.remove("show");
    })
})

// order section
$(document).ready(function(){
    $("#checkAll").click(function(){
        $('input:checkbox').not(this).prop('checked', this.checked);
    });
});