var b_com = false; var b_liv = false; var b_adr = false; var b_tel = false; var b_dat = false;

function Controle(nom_controle)
{
  if(nom_controle == "Commande")
  {
    if(isNaN(document.getElementById(nom_controle).value)  )
    {
      document.getElementById("champs1").innerText  =  "IL CONTIENT DES NOMBRES";
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_com = false;
    }
    else if (document.getElementById(nom_controle).value == "")
    {
            document.getElementById("champs1").innerText = "OBLIGATOIRE  !!";
            document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
            b_com=false;

    }
    else
    {
      document.getElementById("champs1").innerText = "";
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_com = true;
    }
  }
  else if (nom_controle == "Livreur")
  {
    if(isNaN(document.getElementById(nom_controle).value)  )
    {
      document.getElementById("champs2").innerText  =  "IL CONTIENT DES NOMBRES";
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_liv= false;
    }
    else if (document.getElementById(nom_controle).value == "")
    {
            document.getElementById("champs2").innerText = " OBLIGATOIRE !!";
            document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
            b_liv = false;
     }
    else
    {
      document.getElementById("champs2").innerText = "";
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_liv = true;
    }
  }
  else if (nom_controle == "Adresse")
  {
    if (document.getElementById(nom_controle).value == "")
    {
      document.getElementById("champs3").innerText = "OBLIGATOIRE !!";
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_adr=false;
    }
    else
    {
      document.getElementById("champs3").innerText = "";
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_adr = true;
    }
  }
  else if (nom_controle == "Numero")
  {
    b_tel = true;
  }
  else if (nom_controle == "Date")
  {
    var d = document.getElementById(nom_controle).value;
    var jj = Number(d.substr(8,2));
    var mm = Number(d.substr(5,2));
    var aaaa = Number(d.substr(0,4));
    var now = new Date();
    var date = new Date(aaaa,mm-1,jj);
    if (!d)
    {
      //houni ma3neha ili houma khaleha fergha wala kteb haja w khala lourin ferghin donc b_dat false w tcha3elha bil la7mer ...
      document.getElementById("champs5").innerText = "OBLIGATOIRE !!";
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_dat=false;
    }
    else 
    {
      if (date < now)
      {
        //houni ma3neha il date 9dima donc thot il b_dat false w tcha3alha bil la7mer ...
        document.getElementById("champs5").innerText = "La date est non acceptable";
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_dat=false;
      }
      else 
      {
        //houni ma3neha il date jawha behi shiha donc traja3 il loun gris w thot b_dat true ...
        document.getElementById("champs5").innerText = "";
      document.getElementById(nom_controle).style.border = '2px solid #999';
       b_dat=true;
      }
    }
  }
}



function verifier()
{
  if(b_com == true && b_liv == true && b_adr == true && b_tel == true && b_dat == true)
  {
    document.getElementById("controle").innerText ="valide";
     document.getElementById("form").submit();
   }
   else
  {
    document.getElementById("controle").innerText = "verifier";
  }
}



//<button type="submit" onclick="Hediaaane()">Envoyer</button>