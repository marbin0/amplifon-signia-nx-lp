<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="http://code.jquery.com/jquery-3.3.1.slim.min.js"></script>

  <link rel="shortcut icon" href="assets/img/favicon.ico">
  <link rel="stylesheet" href="assets/css/main.min.css">

  <title>Das Signia NX verändert auch Ihr Leben!</title>

  <script src="//assets.adobedtm.com/6da552c8ef67c1c7df1a3571abf16fce8626f2ba/satelliteLib-7f7af5e4a0b96bbeecc31588889ce0b4e3221932.js"></script>
  <script type='text/javascript' src='https://origin-media.sivantos.com/apps/snippets.js'></script> 
</head>




<body>

  <div class="cookie-banner">
    <div class="cookie-banner-wrapper">
      <div class="cookie-banner-content" data-link="https://www.amplifon.com/de/datenschutz">
        <div class="cookie-content">Um unsere Webseite für Sie optimal zu gestalten und fortlaufend zu verbessern, verwenden wir Cookies. Um einen uneingeschränkten Service zu gewährleisten,  stimmen Sie der Cookie-Nutzung zu. Mehr Informationen erhalten Sie in der <a href="https://www.amplifon.com/de/datenschutz">Datenschutzerklärung</a></div>
        <span class="cookie-banner-close">
          <button id="accept">Zustimmen</button>
        </span>
      </div>
      <div class="cookie-banner-buttons">
        <div class="cookie-banner-details"></div>
      </div>
    </div>
  </div>


  <img src="https://adfarm1.adition.com/tagging?type=image&network=142&tag[AMP.Hoer_Frau]" width="1" height="1" />
  <img src="https://adfarm1.adition.com/tagging?type=image&network=142&tag[AMP.Hoer_Mann]" width="1" height="1" />
    


  <div class="bodyContent">
  <!-- Navigation -->
  <?php include('includes/menu.html') ?>


  <!-- Header -->
  <header>
    <div class="image"></div>
    <div class="content">
      <div class="col-1"></div>
      <div class="col-1">
        <h1>Das Signia NX verändert auch Ihr Leben!</h1>

        <!-- Formular -->
        <form action="danke.php" method="post" id="form">
          <div class="formHeader">
            <h2>Qualifizieren <span>Sie sich jetzt als</span> Hörgeräte-Tester!</h2>
            <h4>Nur noch <span id="counter"></span> Plätze frei!</h4>
          </div>
          <div class="formContent">

            <!-- Frage1 -->
            <div id="q1" class="question active">
              <div class="inputSection">

                <strong>Was suchen Sie?</strong>
                <p>(Bitte eine Antwort auswählen)</p><br>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="was" id="was01" value="Hörtest">
                  <label class="btn-outline" for="was01">Hörtest</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="was" id="was02" value="Das optimale Hörgerät">
                  <label class="btn-outline" for="was02">Das optimale Hörgerät</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="was" id="was03" value="Ausgewählte Akustiker in meiner Nähe">
                  <label class="btn-outline" for="was03">Ausgewählte Akustiker in meiner Nähe</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="was" id="was04" value="Preisvergleich von Hörgeräten">
                  <label class="btn-outline" for="was04">Preisvergleich von Hörgeräten</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="was" id="was05" value="Hörgeräte im Alltag testen">
                  <label class="btn-outline" for="was05">Hörgeräte im Alltag testen</label>
                </div>
              </div>

              <!-- Next -->
              <div class="btn next inactive" id="next1">Weiter</div>

            </div>

            <!-- Frage 2 -->
            <div id="q2" class="question">
              <div class="inputSection">

                <strong>Für wen suchen Sie ein Hörgerät?</strong>
                <p>(Bitte eine Antwort auswählen)</p><br>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="wer" id="wer01" value="Für mich selbst">
                  <label class="btn-outline" for="wer01">Für mich selbst</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="wer" id="wer02" value="Für mein Kind">
                  <label class="btn-outline" for="wer02">Für mein Kind</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="wer" id="wer03" value="Für meine Eltern">
                  <label class="btn-outline" for="wer03">Für meine Eltern</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="wer" id="wer04" value="Für meine Großeltern">
                  <label class="btn-outline" for="wer04">Für meine Großeltern</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="wer" id="wer05" value="Sonstige">
                  <label class="btn-outline" for="wer05">Sonstige</label>
                </div>
              </div>

              <!-- Next -->
              <div class="btn next inactive" id="next2">Weiter</div>
            </div>

            <!-- Frage 3 -->
            <div id="q3" class="question">
              <div class="inputSection">
                <strong>Hat die betreffende Person manchmal Probleme, Sprache in lauten Umgebungen zu verstehen?</strong>
                <p>(Bitte eine Antwort auswählen)</p><br>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="probleme" id="probleme01" value="Ja">
                  <label class="btn-outline" for="probleme01">Ja</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="probleme" id="probleme02" value="Nein">
                  <label class="btn-outline" for="probleme02">Nein</label>
                </div>
              </div>
              <!-- Next -->
              <div class="btn next inactive" id="next3">Weiter</div>
            </div>
            <!-- Frage 4 -->
            <div id="q4" class="question">
              <div class="inputSection">
                <strong>Trägt die betreffende Person bereits ein Hörgerät?</strong>
                <p>(Bitte eine Antwort auswählen)</p><br>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="hoergeraet" id="hoergeraet01" value="Ja">
                  <label class="btn-outline" for="hoergeraet01">Ja</label>
                </div>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input type="radio" name="hoergeraet" id="hoergeraet02" value="Nein">
                  <label class="btn-outline" for="hoergeraet02">Nein</label>
                </div>
              </div>
              <!-- Next -->
              <div class="btn next inactive" id="next4">Weiter</div>
            </div>
            <!-- Frage 5 -->
            <div id="q5" class="question">
              <div class="inputSection">
                <strong>Wie alt ist die betreffende Person?</strong>
                <p>(Bitte Alter in Jahren eintragen)</p><br>

                <!-- Antwort -->
                <div class="inputGroup">
                  <input class="btn-outline-input" type="number"name="alter" id="alter" placeholder="Alter eintragen"  
                        onblur="javascript: 
                          if (this.value < 18 || this.value > 120 ) {
                            document.getElementById('alertAlter').innerHTML = 'Ungültige Eingabe!';
                            document.getElementById('alertAlter').classList.add('alert');
} 
                            else {document.getElementById('alertAlter').innerHTML = '';
                                  document.getElementById('alertAlter').classList.remove('alert');
                            document.getElementById('next5').classList.remove('inactive');
                            };">
                        <div id="alertAlter" class=""></div>
                  </div> </div> <!-- Next -->
                    <div class="btn next inactive" id="next5">Weiter</div>
                </div>
                <!-- Frage 6 -->
                <div id="q6" class="question">
                  <div class="inputSection">
                    <strong>Wie lautet Ihre Postleitzahl?</strong>
                    <p>(Bitte eine Antwort eintragen)</p><br>

                    <!-- Antwort -->
                    <div class="inputGroup">
                      <input class="btn-outline-input" type="number" name="plz" id="plz" placeholder="Postleitzahl"
                        required maxlength="5" 
                        onblur="javascript: 
                          if (this.value.length !== this.maxLength) {
                            document.getElementById('alertPlz').innerHTML = 'Ungültige Postleitzahl!';
                            document.getElementById('alertPlz').classList.add('alert');
} 
                            else {document.getElementById('alertPlz').innerHTML = '';
                            document.getElementById('alertPlz').classList.remove('alert');
                            document.getElementById('next6').classList.remove('inactive');

                            };">

                      <div id="alertPlz" class=""></div>
                    </div>

                  </div>
                  <!-- Next -->
                  <div class="btn next inactive" id="next6">Weiter</div>
                </div>
                <!-- Frage 7 -->
                <div id="q7" class="question">
                            <div class="inputSection">
                                <strong>Wie lautet Ihre Telefonnummer?</strong>
                                <p>(Bitte eine Antwort eintragen)</p><br>

                                <!-- Antwort -->
                                <div class="inputGroup">
                                    <input class="btn-outline-input" type="number" name="tel" id="tel" placeholder="Telefonnummer"
                                           required
                                           onblur="javascript:
                          if (this.value.length < 2) {
                            document.getElementById('alertTel').innerHTML = 'Ungültige Telefonnummer!';
                            document.getElementById('alertTel').classList.add('alert');
}
                            else {document.getElementById('alertTel').innerHTML = '';
                            document.getElementById('alertTel').classList.remove('alert');
                            document.getElementById('next7').classList.remove('inactive');

                            };">

                                    <div id="alertTel" class=""></div>
                                </div>

                            </div>
                            <!-- Next -->
                            <div class="btn next inactive" id="next7">Weiter</div>
                        </div>


                <!-- Frage 8 -->
                <div id="q8" class="question">
                  <div class="inputSection">
                    <strong>Wie ist Ihr Name?</strong>
                    <p>(Bitte eine Antwort eintragen)</p><br>

                    <!-- Antwort -->
                    <div class="inputGroup">
                      <input class="btn-outline-input" type="text" name="name" id="name" placeholder="Namen eintragen"
                      onblur="javascript: 
                          if (this.value.length < 3) {
                            document.getElementById('alertName').innerHTML = 'Ungültige Eingabe!';
                            document.getElementById('alertName').classList.add('alert');
} 
                            else {document.getElementById('alertName').innerHTML = '';
                            document.getElementById('alertName').classList.remove('alert');
                            document.getElementById('next8').classList.remove('inactive');
                            
                            };">
                      <div id="alertName" class=""></div>
                    </div>

                  </div>
                  <!-- Next -->
                  <div class="btn next inactive" id="next8">Weiter</div>
                </div>
                <!-- Frage 9 -->
                <div id="q9" class="question">
                  <div class="inputSection">
                    <strong>Wie ist Ihre E-Mail Adresse?</strong>
                    <p>(Bitte eine Antwort eintragen)</p><br>

                    <!-- Antwort -->
                    <div class="inputGroup">
                      <input required class="btn-outline-input" type="email" name="mail" id="mail" placeholder="E-Mail eintragen"
                      onblur="javascript: var reg = /\S+@\S+\.\S+/;
                          if (reg.test(this.value) == false) {
                            document.getElementById('alertEmail').innerHTML = 'Ungültige Eingabe!';
                            document.getElementById('alertEmail').classList.add('alert');
} 
                            else {document.getElementById('alertEmail').innerHTML = '';
                            document.getElementById('alertEmail').classList.remove('alert');
                            document.getElementById('next9').disabled = false;
                            document.getElementById('next9-label').classList.remove('inactive');

                            
                            
                            };">
                      <div id="alertEmail" class=""></div>
                    </div>

                  </div>
                  <!-- Submit -->
                  <input type="submit" disabled  id="next9" style="display: none">
                  <label id="next9-label" for="next9" class="btn-submit inactive"><span><span class="large">Jetzt Teilnahme sichern</span> unverbindlich & kostenlos</span></label>


                </div>

              </div>
        </form>

      </div>

    </div>

  </header>
  <hr>
  <div class="headercontent">
    <div class="soft-row">
      <div class="col-1">
        <ul>
          <li>Nahezu unsichtbar</li>
          <li>100% kostenlos und unverbindlich testen</li>
          <li>Mit 500 Filialen auch in Ihrer Nähe</li>
        </ul>
      </div>
      <div class="col-1"></div>
    </div>
  </div>
  <hr>

  <section id="testhoerer">
    <div class="soft-row">
      <div class="col-1">
        <div class="soft-row">
          <div class="ohr"></div>
          <h2>500<strong> Testhörer</strong> gesucht!</h2>
        </div>
        <h3>Teilnahme&shy;bedingungen</h3>
        
         <p>• Volljährig<br>
          • Kein Hörgerät / Hörgerät älter als 5 Jahre<br>
          • Wohnhaft in Deutschland</p>
        
        <a href="#form" class="btn-large" id="teilnehmenBtn">Jetzt teilnehmen!</a>
      </div>
      <div class="col-1">
        <br>
        <div class="google">
        <h3>Amplifon hat eine Kunden&shy;zufriedenheit von 4,3 von 5</h3><br>
          <p>
            Bewertung basierend auf Google (4,3/5,0):
          </p> <img src="assets/img/google.png" alt="">
        </div>
        <div class="soft-row" style="margin-bottom: 0">
          <div class="col-1 ausnahme">
            <div class="zitat">
              <div class="sterne">
                <img src="assets/img/stars.svg" alt="">
                <p>vor 20 Stunden</p>
              </div>
              <p>Sehr freundlicher und prompter Service. Kann ich absolut weiter empfehlen. </p>
              <p class="name">S. Berg</p>
            </div>
          </div>
          <div class="col-1">
            <div class="zitat">
              <div class="sterne">
                <img src="assets/img/stars.svg" alt="">
                <p>vor 4 Tagen</p>
              </div>
              <p>Erstmalig Amplifon besucht und bin überrascht, wie sehr ich mich dort wohl fühlte. Professionelle
                Beratung im Bereich Hörgeräte und Zubehör! </p>
              <p class="name">Robert G.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<hr>
  <section id="zeit">
        <div class="container">
            <div class="col-1">
              <h2>Ihre Vorteile mit Signia NX:<br></h2>
                    <ul>
                      <li>Klarer, voller Klang</li>
                      <li>Leistungsstarke Akku-Technologie <br><span></span></li>
                      <li>Optimale Anpassung an Ihre Umgebung</li>
                      <li>Tester sparen bis zu 44% bei Kauf*</li>
                  </ul>
            </div>
            <div class="col-2">
                    <img src="assets/img/productshot2.png">
            </div>
        </div>
        <br><br>

    <div id="iframeCenter">
      <script type='text/javascript'>load_signia_product_gallery('de','INSIO_IIC_NX','1000px','700px');</script>
    </div>
    <p>*44% auf das 2. Hörgerät der Klasse 1 eines Signia NX Gerätes, 22 % auf Kategorie 2, 11% auf Kategorie 3. Der Rabatt ist gültig bis zum 30.6.2019.</p></div>
    </section>


  <footer>
    <p>© Amplifon Deutschland GmbH 2019</p>
    <div class="hotline">
                <a href="tel:08006764767">
                    <h3><img class="phone" src="assets/img/icn_phone.svg" alt="">
                      0800 - 676 47 67
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
  <script type="text/javascript">_satellite.pageBottom();</script>
</body>

</html>