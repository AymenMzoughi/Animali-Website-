function Carte()
{    
    var IDC =document.getElementById("IDC").value;
    var DATEC = document.getElementById("DATEC").value;
    var DATEX=document.getElementById("DATEX").value;
    var NbP= document.getElementById("NbP").value;
    var CINC= document.getElementById("CINC").value;
    
   if(IDC.length==0)   
     {  
    alert('ID du carte vide');} 

    
    if(DATEC.length==0)
    {
        alert('Date de Creation Vide');
        
    } 

    if(DATEX.length==0)
    {
        alert("Date d'expiration vide");
        
    } 
    if(NbP.length==0)
    {
        alert('Nombre de points de fidelité vide');
        
    }
    if(CINC.length==0)
    {
        alert('CIN du Client vide');
        
    }


   

     
    
   
    
}
