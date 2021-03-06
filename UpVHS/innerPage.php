<?php
$pageName = 'Inner';
$siteName = 'UP VHS';
$uri      = 'inner';
require( 'inc/header.php' );
?>

<main class="l-contentText">
  <section class="l-firstScreen" style="background-image:linear-gradient(140deg, #0C9398 0%, #744A82 94%), url('../assets/img/userfiles/headerBG/headerBG2.svg'); background-blend-mode: overlay">
    <div class="b-firstScreen -innerPage"></div>
  </section>

  <section class="b-contentText -innerPage__content">
    <div class="b-contentText__images">
      <img src="assets/img/userfiles/innerPage/contentLogo.png"alt="logo" class="b-contentText__img">
    </div>
    <div class="b-contentText__content">
      <h2 class="b-contentText__title -blueBorder">Apple Mac-Kurs für Alle</h2>
      <div class="b-contentText__text b-text"><p>Machen Sie sich in kurzer Zeit mit den Einstellungen Ihres Macs vertraut. In diesem Kurs erlernen Sie die Bedienung des Apple Computers und erhalten einen Überblick zu den wichtigen Programmen. Dieser Kurs eignet sich für Personen, die wenig oder noch nie mit einem Mac gearbeitet haben und die Grundfunktionen ihres Macbooks ohne Zeitdruck erlernen und ausführlich erläutern möchten. Im Kurs angesprochen:</p></div>
      <ul class="b-contentText__list">
        <li class="b-contentText__listRow">Wesentliche Funktionen (macOS-Basics) lernen</li>
        <li class="b-contentText__listRow">Trackpad-Gestensteuerung und Tastatur (Sondertasten) kennen</li>
        <li class="b-contentText__listRow">Fenster auf dem Mac verschieben, ein- und auszoomen</li>
        <li class="b-contentText__listRow">Dateien und Dokumente in Ordnern verwalten</li>
        <li class="b-contentText__listRow">Im Internet mit Safari suchen und beliebte Webseiten speichern</li>
        <li class="b-contentText__listRow">Dokumente von iPhone/iPad importieren.</li>
      </ul>
    </div>
  </section>

  <section class="l-contentInfo">
    <div class="b-contentInfo">
      <div class="b-contentInfo__tableWrapper">
        <table class="b-contentInfo__table">
          <tr class="b-tableBlock__row">
            <td class="b-tableBlock__column">
              <h4 class="b-tableBlock__title">Kursstart</h4>
              <p class="b-tableBlock__text">Fr 22.10.2021 18:00 4x</p>
            </td>
            <td class="b-tableBlock__column">
              <h4 class="b-tableBlock__title">Kursleitung</h4>
              <p class="b-tableBlock__text">Emmanuel Urtuzuástegui</p>
            </td>
            <td class="b-tableBlock__column" rowspan="2">
              <h4 class="b-tableBlock__title">Kursort</h4>
              <p class="b-tableBlock__text">Volkshochschule Bern Grabenpromenade 3 3011 Bern</p>
            </td>
          </tr>
          <tr class="b-tableBlock__row">
            <td class="b-tableBlock__column">
              <h4 class="b-tableBlock__title">Preis</h4>
              <p class="b-tableBlock__text">Standard 360.00</p>
            </td>
            <td class="b-tableBlock__column">
              <h4 class="b-tableBlock__title">Anzahl Plätze</h4>
              <p class="b-tableBlock__text">2 - 5</p>
            </td>
          </tr>
        </table>
      </div>
      <div class="b-contentInfo__buttons">
        <button class="b-contentInfo__button hvr-shutter-out-horizontal">Zurück</button>
        <button class="b-contentInfo__button hvr-shutter-out-horizontal">Anmelden</button>
      </div>
    </div>
  </section>
</main>

<?php require( 'inc/footer.php' ); ?>
