<?php
$pageName = 'Home';
$siteName = 'UP VHS';
$uri      = 'categories';
require( 'inc/header.php' );
?>

<main class="l-contentText">

  <section class="l-firstScreen" style="background-image: url('../../../../assets/img/userfiles/headerBG/headerBG2.svg')">
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

          <select name="" id="" class="b-contentForm__select">
            <option value="" class="b-contentForm__selectOption">Grundlagen</option>
            <option value="" class="b-contentForm__selectOption">Grundlagen</option>
            <option value="" class="b-contentForm__selectOption">Grundlagen</option>
          </select>

          <select name="" id="" class="b-contentForm__select">
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
                <input type="checkbox" class="b-contentForm__checkbox" checked>
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Di</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Mi</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Do</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Fr</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">Sa</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox">
              </label>
            </div>
            <div class="b-contentForm__checkboxGroup">
              <p class="b-contentForm__checkboxTitle">So</p>
              <label for="" class="b-contentForm__label">
                <input type="checkbox" class="b-contentForm__checkbox">
              </label>
            </div>
          </div>

          <h3 class="b-contentForm__title">Tageszeit</h3>

          <select name="" id="" class="b-contentForm__select">
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
        <caption class="b-contentTable__tableCaption">gsa</caption>
        <tr class="b-contentTable__tableRow">
          <td class="b-contentTable__tableData">
            <img src="assets/img/userfiles/innerPage/contentLogo.svg" alt="" class="b-contentTable__tableDataImage">
          </td>
          <td class="b-contentTable__tableData">
            <img src="" alt="" class="b-contentTable__tableDataImage">
          </td>
          <td class="b-contentTable__tableData">
            <img src="" alt="" class="b-contentTable__tableDataImage">
          </td>
          <td class="b-contentTable__tableData">
            <img src="" alt="" class="b-contentTable__tableDataImage">
          </td>
          <td class="b-contentTable__tableData">
            <img src="" alt="" class="b-contentTable__tableDataImage">
          </td>
          <td class="b-contentTable__tableData">
            <img src="" alt="" class="b-contentTable__tableDataImage">
          </td>
        </tr>
      </table>
    </div>
  </section>

</main>

<?php require( 'inc/footer.php' ); ?>
