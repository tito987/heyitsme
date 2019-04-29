function estvide()
{
var email = f.mail.value;
var password = f.pwd.value;
var password2= f.pwd.value;
var fname =f.fname.value;
var lname=f.lname.value;
var a = "@";
var pt = ".";
if( mail.length== 0 || pwd.length== 0)
{
alert("Vérifier votre login et votre de mot de passe");

}
if(password<>password2)
{alert("la mot de passe n'est pas la meme ");}
else
{
alert('Bienvenue ' +lname+ " " + fname ) ;
window.location="index.html";
}
}