var b_com = true; var b_liv = true; var b_adr = true; var b_tel = true; var b_dat = true;
var v_ = false;
function Controle(nom_controle)
{
  if(nom_controle == "Commande")
  {
    if(isNaN(document.getElementById(nom_controle).value)  )
    {
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_com = false;
    }
    else if (document.getElementById(nom_controle).value == "")
    {
            document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
            b_com=false;

    }
    else
    {
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_com = true;
    }
  }
  else if (nom_controle == "Livreur")
  {
    if(isNaN(document.getElementById(nom_controle).value)  )
    {
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_liv= false;
    }
    else if (document.getElementById(nom_controle).value == "")
    {
            document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
            b_liv = false;
     }
    else
    {
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_liv = true;
    }
  }
  else if (nom_controle == "Adresse")
  {
    if (document.getElementById(nom_controle).value == "")
    {
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_adr=false;
    }
    else
    {
      document.getElementById(nom_controle).style.border = '2px solid #999';
      b_adr = true;
    }
  }
  else if (nom_controle == "Numero")
  {
    b_tel = true;
    /*var res = document.getElementById(nom_controle).value.split("+");
    var res_ = res_[1].split(" ");
    for(var i=0; i<res_.length; i++)
    {
      if(isNaN(res_[i]))
      {
        document.getElementById("hediane").innerText = aaaaaaaaaaaaaaaaaaaaaaaaaaa;
        document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
        b_tel = false;
        var blabla = true;
        break;
      }
    }
    if (!blabla)
    {
      document.getElementById(nom_controle).style.border = '2px solid #999';
        b_tel = true;
    }*/
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
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_dat=false;
    }
    else 
    {
      if (date < now)
      {
        //houni ma3neha il date 9dima donc thot il b_dat false w tcha3alha bil la7mer ...
      document.getElementById(nom_controle).style.border = '#CC3300 2px solid';
      b_dat=false;
      }
      else 
      {
        //houni ma3neha il date jawha behi shiha donc traja3 il loun gris w thot b_dat true ...
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
    v_ = true;
    document.getElementById("form_modifier").submit();
  }
}
