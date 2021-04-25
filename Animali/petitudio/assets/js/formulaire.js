function test()
{    
    var sujet =document.getElementById("sujet").value;
    var probleme = document.getElementById("probleme").value;
    var etat=document.getElementById("etat").value;
    var date= document.getElementById("date").value;
   if(sujet=="Select")   
     {  
    alert('veuillez remplir le champ sujet ');

           } 

    
    if(probleme.length==0)
    {
        alert('veuillez remplir le champ probleme ');
        
    } 

    if(date.length==0)
    {
        alert('veuillez remplir le champ date ');
        
    } 
    if(etat.length==0)
    {
        alert('veuillez remplir le champ etat ');
        
    }
    f(etat=="Select")   
     {  
        alert('veuillez remplir le champ etat ');
           } 

   

     
    
   
    
}
