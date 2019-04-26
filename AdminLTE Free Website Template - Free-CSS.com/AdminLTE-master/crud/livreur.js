var b_nom = false; var b_pre = false; var b_tel = false; 

function Controle(nom_controle)
{
  if(nom_controle == "nom")
  {
    if(isNaN(document.getElementById(nom_controle).value)  )
    {
      document.getElementById("champ").innerText = "";
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_nom= true;
      
    }
    else if (document.getElementById(nom_controle).value == "")
    {
            document.getElementById("champ").innerText = "OBLIGATOIRE";
            document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
            b_nom=false;

    }
    else
    {
      document.getElementById("champ").innerText  =  "une chaine de caratere";
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_nom = false;
    }
  }

  else if (nom_controle=="prenom")
  {
    if(isNaN(document.getElementById(nom_controle).value)  )
      {
        document.getElementById("champ1").innerText = "";
        document.getElementById(nom_controle).style.border = '2px solid #999';
        b_pre= true;
      }
      else if (document.getElementById(nom_controle).value == "")
      {
              document.getElementById("champ1").innerText = "OBLIGATOIRE";
              document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
              b_pre= false;
       }
      else
      {
        document.getElementById("champ1").innerText  =  "une chaine de caratere";
        document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
        b_pre= false;
      }
  }

  else if (nom_controle == "Numero")
  {
    b_tel = true;
  }


}



function verifier()
{
  if(b_nom == true && b_pre == true && b_tel == true)
  {
    document.getElementById("controle1").innerText ="valide"
     document.getElementById("form").submit();
  }
  else
  {
    document.getElementById("controle1").innerText = "verifier les champs";
  }
}