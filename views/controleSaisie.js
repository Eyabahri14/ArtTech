function alpha(ch)
{
	ch = ch.toUpperCase();
	for (i=0;i<ch.length;i++)
	{
		c = ch.charAt(i);
		if (c < 'A' || c > 'Z')
			return false;
	}

	return true;
}
function num(ch)
{
	ch = ch.toUpperCase();
	for (i=0;i<ch.length;i++)
	{
		c = ch.charAt(i);
		if (c < '0' || c > '9')
			return false;
	}

	return true;
}

function test(){
 
 var cin=document.getElementById('verifCin').value;
 var nom=document.getElementById('verifNom').value;
 var prenom=document.getElementById('verifPrenom').value;
 var age=document.getElementById('verifAge').value;
 var email=document.getElementById('verifMail').value;
 var tel=document.getElementById('verifTel').value;
 var ville=document.getElementById('verifVille').selectedIndex;
// alert(ville);
 var v1="@";
 var v2=".";
 var pos1=f1.Email.value.indexOf(v1);
 var pos2=f1.Email.value.indexOf(v2);
  if(num(cin)==false || cin.length < 8){
  	alert('Champ cin invalide');
  	return false;
  }
  if( alpha(nom)==false || nom.length<3 || nom.length>30)
	{
		alert("champ nom invalide");
		return false;
	}
	if( alpha(prenom)==false || prenom.length<3 || prenom.length>30)
	{
		alert("champ prenom invalide");
		return false;
	}
	if(num(age)==false || age.length >2){
		alert("champ age invalide");
		return false;
	}
	if ( (pos1 == (-1))    &&  ( pos2 == (-1)) ){
			alert("champ adresse invalide");
			return false;
	}
	if (num(tel)==false || tel.length!=8 || tel.charAt(0)=='0')
	{
		alert("champ tel invalide");
		return false;
	}
	if(ville==0 ){
		alert("vous devez choisir une ville");
		return false;
	}




}