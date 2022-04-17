function validform() {

    var a = document.forms["my-form"]["first-name"].value;
    var a1 = document.forms["my-form"]["last-name"].value;
    var b = document.forms["my-form"]["email-address"].value;
    var c = document.forms["my-form"]["username"].value;
    var d = document.forms["my-form"]["password"].value;
    var e = document.forms["my-form"]["confirm_password"].value;

    if (a==null || a=="")
    {
        alert("Please Enter Your Full Name");
        return false;
    }else if (b==null || b=="")
    {
        alert("Please Enter Your Email Address");
        return false;
    }else if (c==null || c=="")
    {
        alert("Please Enter Your Username");
        return false;
    }else if (d != e)
    {
        alert("Passwords must match!");
        return false;
    }

}
