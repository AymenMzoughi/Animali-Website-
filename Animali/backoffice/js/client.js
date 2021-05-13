function Client()
{    
    var CIN =document.getElementById("CIN").value;
    var Sexe =document.getElementById("Sexe").value;
    var Nom = document.getElementById("Nom").value;
    var Prenom=document.getElementById("Prenom").value;
    var NumTel= document.getElementById("NumTel").value;
    var ADR= document.getElementById("ADR").value;
    var DNS= document.getElementById("DNS").value;
    var MDP= document.getElementById("MDP").value;
   if(CIN.length==0)   
     {  
    alert('CIN Vide');} 
    
    if(Sexe=="Choix du Sexe:") 
     {  
    alert('Sexe Vide');

           } 
    
    if(Nom.length==0)
    {
        alert('Nom Vide');
        
    } 

    if(Prenom.length==0)
    {
        alert('Prenom Vide');
        
    } 
    if(NumTel.length==0)
    {
        alert('Numero de telephone Vide');
        
    }
    if(ADR.length==0)
    {
        alert('Adresse Vide');
        
    }
    if(DNS.length==0)
    {
        alert('Date De Naissance Vide');
        
    }
    if(MDP.length==0)
    {
        alert(' Mot de passe vide');
        
    }

   

     
    
   
    
}
