function test()
{    
    var sujet =document.getElementById("sujet").value;
    var probleme = document.getElementById("probleme").value;
    var date= document.getElementById("date").value;
    var idclient= document.getElementById("idclient").value;
    var test4=true;
    
   if(sujet=="Select")   
     {  
    alert('veuillez remplir le champ sujet ');
    test4=false;
           } 

    
    if(probleme.length==0)
    {
        alert('veuillez remplir le champ probleme ');
        test4=false;
    } 

    if(date.length==0)
    {
        alert('veuillez remplir le champ date ');
        test4=false;
    }
    if(idclient.length==0)
    {
        alert('veuillez remplir le champ  nom client  ');
        test4=false;
    }  


   

     
    
   
    
}
