
function validationSignin(){
    
    // extracting the values from the form
    const username = document.forms['signinForm']['username'].value;
    const password = document.forms['signinForm']['password'].value;
    const form=document.getElementById('signinForm');
    var v1=true;

    if(username==""){
        setErrorUsername(document.forms['signinForm']['username']);
        v1=false;
    }

    if(password==""){
        setErrorPassword(document.forms['signinForm']['password']);
        v1=false;
    }

    if(v1==false)
        return false;
    else
        return true;
    
    function setErrorUsername(input1)
    {
        const x=document.getElementById('input1');
        const smalltag=x.querySelector('small');
        smalltag.style.visibility="visible";
        const itag=document.getElementById('error1');
        itag.style.visibility="visible";
        input1.style.borderColor="red";
        return false;
    }
    function setErrorPassword(input2)
    {
        const x=document.getElementById('input2');
        const smalltag=x.querySelector('small');
        smalltag.style.visibility="visible";
        const itag=document.getElementById('error2');
        itag.style.visibility="visible";
        input2.style.borderColor="red";
        return false;
    }

}

function wrongCredentials(){
    alert("Wrong Credentials");
}