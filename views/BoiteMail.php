<?php 
$server ="{imap.gmail.com:993/imap/ssl}INBOX";
$username = 'houaidafatma.karoui@esprit.tn';
$password = 'fatma23703032';
$mailbox = imap_open($server , $username, $password);
$mails = FALSE;
if (FALSE === $mailbox) {
$err = 'La connexion a échoué. Vérifiez vos paramètres!';
} else {
$info = imap_check($mailbox);
if (FALSE !== $info) {
// le nombre de messages affichés est entre 1 et 50
// libre à vous de modifier ce paramètre
$nbMessages = min(50, $info->Nmsgs);
$mails = imap_fetch_overview($mailbox, '1:'.$nbMessages, 0);
} else {
$err = 'Impossible de lire le contenu de la boite mail';
}
}
if (FALSE === $mails) {
echo $err;
} else {
$informationboite = 'La boite aux lettres contient '.$info->Nmsgs.' message(s) dont '.
$info->Recent.' recent(s)';
foreach ($mails as $mail) {
echo 'Objet : ' . (iconv_mime_decode($mail->subject,0, "ISO-8859-1")) . ' Date de r;&eacutception : ' . $mail->date . '
';
}
}
?>
?>