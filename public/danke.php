<?php
		
	$name = htmlspecialchars($_POST["name"]);
  $email = htmlspecialchars($_POST["mail"]);	
  $frage1 = htmlspecialchars($_POST["was"]);
  $frage2 = htmlspecialchars($_POST["wer"]);
  $frage3 = htmlspecialchars($_POST["probleme"]);
  $frage4 = htmlspecialchars($_POST["hoergeraet"]);
  $alter = htmlspecialchars($_POST["alter"]);
  $plz = htmlspecialchars($_POST["plz"]);
  $tel = htmlspecialchars($_POST["tel"]);


$mailtextKunde = '<html>
                    <head>
                      
                    </head>
                    <body style="background-color: #531d51;">
                    <div style="background-color: white; max-width: 600px; padding: 30px; margin: 0 auto; text-align: left;">

                    <img style="width: 150px; height: auto; margin: 0 auto;" src="https://www.amplifon.com/content/dam/amplifon-emea/global/Icons/amplifon-logo.svg" alt="" width="300" height="73" />

                    <h1 style="color: #c3003e; font-size: 30px; line-height: 33px; font-family: sans-serif; margin: 30px auto;">Vielen Dank für Ihre Anmeldung, ' . $name . '.</h1>
                    <p style="text-align: left; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #333;">Ihr Amplifon-Team wird sich nach Erhalt der Anmeldung bei Ihnen melden, um einen Termin zu vereinbaren.
                    <br><br>
                    Sollten Sie in der Zwischenzeit Fragen haben, können Sie sich gerne per Gratisanruf bei unserem Kundenservice 0800 - 500 80 40 melden.
                    <br><br>
                    Freundliche Grüsse<br>
                    <strong>Ihr Amplifon-Team</strong></p>
                    </div>
                    </body>
                    </html>
                    ';
 
$empfaengerKunde = "$email"; //Mailadresse
$absenderKunde   = "de-marketing@amplifon.com";
$betreffKunde    = "Anmeldung Hörgerätetest";
$antwortenKunde  = "de-marketing@amplifon.com";
 
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";
 
$header .= "From: $absenderKunde\r\n";
$header .= "Reply-To: $antwortenKunde\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();
 
$mail1 = mail( $empfaengerKunde, $betreffKunde, $mailtextKunde, $header);

$mailtextEmpfaenger = '<html>
                          <head>
                            
                          </head>

                          <style>
                          * {font-size: 14px; line-height: 1.5;}
                          </style>
                          <body style="background-color: #c3003e;">
                          <div style="background-color: white; max-width: 600px; padding: 30px; margin: 0 auto; text-align: left;">

                          <img style="width: 150px; height: auto; margin: 0 auto;" src="https://www.amplifon.com/content/dam/amplifon-emea/global/Icons/amplifon-logo.svg" alt="" width="300" height="73" />

                          <h1 style="color: #c3003e; font-size: 30px; line-height: 33px; font-family: sans-serif; text-align: left;">Anmeldung Testhörer</h1><br>
                          <h3 style="font-size: 20px">
                            ' . $name . ' 
                          </h3><br>
                          <strong>Postleitzahl:</strong> '. $plz . '<br>
                          <strong>E-Mail:</strong> '. $email . ' <br>
                          <strong>Telefonnummer:</strong> '. $tel . ' <br><br>
                          <hr>
                          <strong>Was suchen Sie?</strong> '.$frage1.'<br>
                          <hr>
                          <strong>Für wen suchen Sie ein Hörgerät?</strong> '.$frage2.'<br>
                          <hr>
                          <strong>Hat die betreffende Person manchmal Probleme, Sprache in lauten Umgebungen zu verstehen?</strong> '.$frage3.'<br>
                          <hr>
                          <strong>Trägt die betreffende Person bereits ein Hörgerät?</strong> '.$frage4.'<br>
                          <hr>
                          <strong>Wie alt ist die betreffende Person?</strong> '.$alter.'<br>


                          </div>
                          </body>
                          </html>
                          ';
 
$empfaengerEmpfaenger = "service-amplifon@cellit.de, de-servicecenter@amplifon.com"; //Mailadresse 
$absenderEmpfaenger   = $email;
$betreffEmpfaenger    = "Signia NX Hörtester LP";
$antwortenEmpfaenger  = $email;
 
$header  = "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html; charset=utf-8\r\n";
 
$header .= "From: $absenderEmpfaenger\r\n";
$header .= "Reply-To: $antwortenEmpfaenger\r\n";
// $header .= "Cc: $cc\r\n";  // falls an CC gesendet werden soll
$header .= "X-Mailer: PHP ". phpversion();
 
$mail2 = mail( $empfaengerEmpfaenger, $betreffEmpfaenger, $mailtextEmpfaenger, $header);
      
  

if($mail1 && $mail2){
  ?>
  




<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <?php include('includes/trackingHeader.html') ?>
<!-- Facebook Pixel Code Complete-->

<script>
  fbq('track', 'CompleteRegistration');
</script>
<!-- End Facebook Pixel Code -->


<!--
Event snippet for DE_Retargeting_Native Ad on https://hoerstudie-amplifon.de/: Please do not remove.
Place this snippet on pages with events you’re tracking. 
Creation date: 08/22/2018
-->
<script>
  gtag('event', 'conversion', {
    'allow_custom_scripts': true,
    'u1': '[Country-Language]',
    'u2': '[Page URL]',
    'send_to': 'DC-8076233/retde/de_re003+standard'
  });
</script>
<noscript>
<img src="https://ad.doubleclick.net/ddm/activity/src=8076233;type=retde;cat=de_re003;u1=[Country-Language];u2=[Page URL];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" alt=""/>
</noscript>
<!-- End of event snippet: Please do not remove -->


<!--
Start of Floodlight Tag: Please do not remove
Activity name of this tag: DE_Conversion_appointment
URL of the webpage where the tag is expected to be placed: https://www.amplifon.com/web/de/filialfinder/termin-buchen/danke?
This tag must be placed between the <body> and </body> tags, as close as possible to the opening tag.
Creation Date: 08/22/2018
-->
<script type="text/javascript">
var axel = Math.random() + "";
var a = axel * 10000000000000;
document.write('<iframe src="https://8076233.fls.doubleclick.net/activityi;src=8076233;type=conversi;cat=de_co0;u1=[Country-Language];u3=[OrderID];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=' + a + '?" width="1" height="1" frameborder="0" style="display:none"></iframe>');
</script>
<noscript>
<iframe src="https://8076233.fls.doubleclick.net/activityi;src=8076233;type=conversi;cat=de_co0;u1=[Country-Language];u3=[OrderID];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=;tfua=;npa=;ord=1?" width="1" height="1" frameborder="0" style="display:none"></iframe>
</noscript>
<!-- End of Floodlight Tag: Please do not remove -->



  <link rel="stylesheet" href="assets/css/main.min.css">
  <title>Ihr persönliches Klangwunder erleben</title>
</head>

<body>
<script type="text/javascript" src="https://akt.audiencemanager.de/log/ad/conversion?type=js&pid=5b9b9ed20ae8991f85235867&orderID=[VALUE]&cur=EUR" async></script>




<!-- Activity name for this tag: 2018_3047_0075_Vertrieb Hörgeräte Q3_Conversionpixel_20180713 -->
<script type='text/javascript'>
var axel = Math.random()+"";
var a = axel * 10000000000000;
document.write('<img src="https://pubads.g.doubleclick.net/activity;xsp=4393053;ord='+ a +'?" width=1 height=1 border=0/>');
</script>
<noscript>
<img src="https://pubads.g.doubleclick.net/activity;xsp=4393053;ord=1?" width="1" height="1" />
</noscript>
<!-- End Pixel Code -->




<!-- <script>
jQuery( document ).ready(function() {
jQuery( "#gform_submit_button_1" ).click(function() {
  ga('send', 'event', 'terminvereinbaren', 'click', 'Terminvereinbarung' );
  window._tfa = window._tfa || [];
  window._tfa.push({notify: 'event', name: 'TerminAnfragen'});
  !function (t, f, a, x) {
         if (!document.getElementById(x)) {
            t.async = 1;t.src = a;t.id=x;f.parentNode.insertBefore(t, f);
         }
  }(document.createElement('script'),
  document.getElementsByTagName('script')[0],
  '//cdn.taboola.com/libtrc/unip/1142431/tfa.js',
  'tb_tfa_script');
  var axel = Math.random()+"";
var a = axel * 10000000000000;
document.write('<img src="https://pubads.g.doubleclick.net/activity;xsp=4394649;ord='+ a +'?" width=1 height=1 border=0/>');
!function(_window, _document) {
    var OB_ADV_ID='007127d501f783fdffb4b1965e9285b797';
    if (_window.obApi) {var toArray = function(object) {return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];};_window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));return;}
    var api = _window.obApi = function() {api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);};api.version = '1.1';api.loaded = true;api.marketerId = OB_ADV_ID;api.queue = [];var tag = _document.createElement('script');tag.async = true;tag.src = '//amplify.outbrain.com/cp/obtp.js';tag.type = 'text/javascript';var script = _document.getElementsByTagName('script')[0];script.parentNode.insertBefore(tag, script);}(window, document);
obApi('track', 'Termin Anfragen');
});
});
</script> -->

<img src="https://adfarm1.adition.com/track?tid=19201&sid=43981&type=image&orderid=&itemno=&descr=&quantity=&price=0.00&total=1000" width="1" height="1" />


<div class="bodyContent">
  <!-- Navigation -->
  <?php include('includes/menu2.html') ?>


  <!-- Header -->
  

  <section id="danke">
    <div class="danke">
    <h1>VIELEN DANK FÜR IHR INTERESSE.</h1>
    <h3>Vielen Dank für Ihre Anmeldung. Wir werden uns schnellstmöglich telefonisch bei Ihnen melden, um Ihren Wunschtermin zu vereinbaren.</h3>
    <a href="index.php">Startseite</a>

    </div>

  </section>

  <footer>
    <p>© Amplifon Deutschland GmbH 2019</p>
    <div class="hotline">
                <a href="tel:0800620055">
                    <h3><img class="phone" src="assets/img/icn_phone.svg" alt="">
                        0800 - 620 05 55
                    </h3>
                </a>
                <p class="sternchen">Mo.-Fr. 08:00 – 20:00 Uhr || Sa. 09:00 – 15:00 Uhr</p>
            </div>
    <p class="legal">
    <a href="https://www.amplifon.com/web/de/impressum" target="_blank">Impressum</a>
      <a href="https://www.amplifon.com/web/de/datenschutz" target="_blank">Datenschutz</a>
    </p>
  </footer>
  </div>

  <script src="assets/js/vendors.min.js"></script>
  <script src="assets/js/main.min.js"></script>

</body>

</html>
<?php
}else{
	?>
	<div>Irgendwas scheint schief gelaufen zu sein.</div>
	<?php
}
?> 