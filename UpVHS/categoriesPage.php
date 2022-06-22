<?php
$pageName = 'Home';
$siteName = 'UP VHS';
$uri      = 'categories';
require( 'inc/header.php' );
?>

<main class="l-contentText">

  <section class="l-firstScreen" style="background-image:linear-gradient(140deg, #0C9398 0%, #744A82 94%), url('../assets/img/userfiles/headerBG/headerBG2.svg'); background-blend-mode: overlay">
    <div class="b-firstScreen -innerPage"></div>
  </section>

  <section class="l-contentForm">
    <div class="b-contentForm__wrapper">
      <form class="b-contentForm">
        <div class="b-contentForm__side">
          <h3 class="b-contentForm__title">Stichwort</h3>

          <label for="" class="b-contentForm__label -stichwort">
            <input type="text" class="b-contentForm__input" placeholder="Stichwort">
          </label>

          <h3 class="b-contentForm__title">Kategorie</h3>

          <select name="" id="" class="b-contentForm__select js-select" data-placeholder="Select">
            <option value="" class="b-contentForm__selectOption"></option>
            <option value="" class="b-contentForm__selectOption">Grundlagen</option>
            <option value="" class="b-contentForm__selectOption">Grundlagen</option>
            <option value="" class="b-contentForm__selectOption">Grundlagen</option>
          </select>

          <select name="" id="" class="b-contentForm__select js-select" data-placeholder="Select">
            <option value="" class="b-contentForm__selectOption"></option>
            <option value="" class="b-contentForm__selectOption">Alle</option>
            <option value="" class="b-contentForm__selectOption">Alle</option>
            <option value="" class="b-contentForm__selectOption">Alle</option>
          </select>
        </div>

        <div class="b-contentForm__side">
          <h3 class="b-contentForm__title -wochentag">Wochentag</h3>

          <div class="b-contentForm__checkboxes -wochentag">
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Mo</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox" checked>
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Di</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Mi</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Do</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Fr</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Sa</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">So</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox js-checkbox">
              </label>
            </div>
          </div>

          <h3 class="b-contentForm__title">Tageszeit</h3>

          <select name="" id="" class="b-contentForm__select js-select" data-placeholder="Select">
            <option value="" class="b-contentForm__selectOption"></option>
            <option value="" class="b-contentForm__selectOption">Vormittag</option>
            <option value="" class="b-contentForm__selectOption">Vormittag</option>
            <option value="" class="b-contentForm__selectOption">Vormittag</option>
          </select>

          <button class="b-contentForm__button hvr-shutter-out-horizontal">Suchen</button>
        </div>
      </form>
    </div>
  </section>

  <section class="l-contentTable">
    <div class="b-contentTable">
      <table class="b-contentTable__table">
        <thead>
          <tr>
            <th></th>
            <th>Titel</th>
            <th>Datum</th>
            <th>Kursort</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>
              <img src="assets/img/blocks/contentTable/logo_1.png" alt="" class="b-contentTable__dataImage">
            </td>
            <td>
              <p class="b-contentTable__textTitle"><b>Word für Migranten</b> Christine Rindlisbacher</p>
            </td>
            <td>
              <p class="b-contentTable__textDate">Mi 20.10.2021 18:00 12x</p>
            </td>
            <td>
              <p class="b-contentTable__textLocation">Solothurn</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/blocks/contentTable/logo_2.png" alt="" class="b-contentTable__dataImage">
            </td>
            <td>
              <p class="b-contentTable__textTitle"><b>Apple Mac-Kurs für Alle</b> Emmanuel Urtuzuástegui</p>
            </td>
            <td>
              <p class="b-contentTable__textDate">Fr 22.10.2021 18:00 4x</p>
            </td>
            <td>
              <p class="b-contentTable__textLocation">Bern</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/blocks/contentTable/logo_3.png" alt="" class="b-contentTable__dataImage">
            </td>
            <td>
              <p class="b-contentTable__textTitle"><b>Word für Migranten am Samstag</b> Christine Rindlisbacher</p>
            </td>
            <td>
              <p class="b-contentTable__textDate">Mo 25.10.2021 18:00 3x</p>
            </td>
            <td>
              <p class="b-contentTable__textLocation">Solothurn</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/blocks/contentTable/logo_4.png" alt="" class="b-contentTable__dataImage">
            </td>
            <td>
              <p class="b-contentTable__textTitle"><b>Microsoft Teams für Einsteiger/innen</b> Sonja Hubl</p>
            </td>
            <td>
              <p class="b-contentTable__textDate">Mi 27.10.2021 17:30 4x</p>
            </td>
            <td>
              <p class="b-contentTable__textLocation">Bern</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/blocks/contentTable/logo_5.png" alt="" class="b-contentTable__dataImage">
            </td>
            <td>
              <p class="b-contentTable__textTitle"><b>Word für Migranten</b> Christine Rindlisbacher</p>
            </td>
            <td>
              <p class="b-contentTable__textDate">Fr 22.10.2021 18:00 4x</p>
            </td>
            <td>
              <p class="b-contentTable__textLocation">Grenchen</p>
            </td>
          </tr>
          <tr>
            <td>
              <img src="assets/img/blocks/contentTable/logo_6.png" alt="" class="b-contentTable__dataImage">
            </td>
            <td>
              <p class="b-contentTable__textTitle"><b>Apple Mac-Kurs für Alle</b> Emmanuel Urtuzuástegui</p>
            </td>
            <td>
              <p class="b-contentTable__textDate">Mi 27.10.2021 17:30 4x</p>
            </td>
            <td>
              <p class="b-contentTable__textLocation">Solothurn</p>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

</main>

<?php require( 'inc/footer.php' ); ?>
