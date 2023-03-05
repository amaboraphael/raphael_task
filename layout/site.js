// smple function that triggers an alert box

function hello(){
    alert ("Welcome to my website");
}
// a simple function to add two numbers 

function add(){
    document.write(5+6)
}
// document.getElementById(id)
//display or like echo
//document.write
//windows.alert
//consol.log

//function 

function changeColor(){
    //lets declare a veriable with the keyword to get the color fron tne inoput box
    // color variable will get the color user selects
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;

}

// function to change the font color of your page

function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;

}

// on mouse over example

function onm(){

}


//crud, the trim function deletes all empty spaces before and after//
// we want a function where empty spaces cannot be submitted to the data base
// using length character to count the length and pass a command to check
function crud(){
    let fname =(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("first name must be atleast five characters")
        return false;
    }
}

function fnameVal(){
    let fname =(document.form1.fname.value).trim();
    if (fname.length<5){
        alert("first name must be atleast five characters")
        return false;
    }
}

//validating a form 
function validation(){
    // to check if the name field is empty
let name=document.myform.name.value;
if (name==null || name==""){
alert ("name can't be blank");
return false;
}
 //to ensure name can not be more than 15 chaaracters
 else if (name.length>15){
alert ("name can not be more than 15 characters")
return false;
 }
//to ensure name is mot less than 5 characters

else if (name.length<5){
alert ("name can not be less than 5 characters")
return false; 
}
}

//crud validation
function crud(){
    let fname = (document.form1.fname.value).trim();
    if (fname.length<5){
        alert ("name can not be less than 5 characters")
        return false; 
    }
}

function crud1(){
    let lname = (document.form1.lname.value).trim();
   if (lname.length>15){
        alert ("not more than 15 characters")
return false; 
    } 
}