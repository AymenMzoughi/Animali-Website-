function test1()
{    var test=true;
    var prenom =document.getElementById("prenom").value;
    var nom = document.getElementById("nom").value;
    var message=document.getElementById("message").value;
    var note= document.getElementById("note").value;
   if(note=="Select")   
     {  
    alert('veuillez remplir le champ note');
    test=false;
           } 

    
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


   
        }