function test1()
{    var test=true;
    var prenom =document.getElementById("prenom").value;
    var nom = document.forms["myForm"]["nom"].value
    var email = document.getElementById("email").value;
    var message=document.getElementById("message").value;
    alert('veuillez remplir le champ nom ');
    if(prenom.length==0)
    {
        alert('veuillez remplir le champ prenom ');
        test=false;
    } 

    if(nom.length==0)
    {
        alert('veuillez remplir le champ nom ');
        test=false;
    } 
    if(message.length==0)
    {
        alert('veuillez remplir le champ  message ');
        test=false;
    }
    if(email.length==0)
    {
        alert('veuillez remplir le champ  email ');
        test=false;
    }
    if(nom.length==0)
    {
        alert('veuillez remplir le champ prenom ');
        test=false;
    } 


   
        }