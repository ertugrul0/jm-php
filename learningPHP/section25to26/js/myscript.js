function zzz(){
    alert('external script');
}

document.getElementById('button2').addEventListener('click', zzz);


// delete alert confirmation

$("a.delete").on("click", function (e) {
    e.preventDefault();
    if (confirm("Are you sure?")) {
        alert("You deleted the data!");
        // post using jquery..

        // create an on the fly form and set attribute
        // method action
        // append the form to the body element
        // submit the form

        // multiple elements can have the same class but not id
    }
});
// using jquery validation plugin
// adding  custom function to validator and use it
// this validations are on the browser side
// it provides better experience
// if browser side js is off, client side validation does not work
// so server side validation is also important to have.


// ajax request
