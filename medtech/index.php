<?php
require_once 'include/header.php';
?>
<section class="hero">
  <div class="container hero__inner">
    <h1 class="hero__title">Медицинское оборудование с доставкой по России</h1>
    <p class="hero__sub">Сертифицированная техника с гарантией и сервисом</p>
  </div>
</section>

<main class="container">
  <div class="tabs" id="cat-tabs">
    <button class="tab active" data-cat="all">Все товары</button>
    <button class="tab" data-cat="ivl">ИВЛ</button>
    <button class="tab" data-cat="defib">Дефибрилляторы</button>
    <button class="tab" data-cat="monitor">Мониторы</button>
    <button class="tab" data-cat="light">Операционные светильники</button>
    <button class="tab" data-cat="ster">Стерилизация</button>
    <button class="tab" data-cat="lab">Лаборатория</button>
  </div>

  <section class="catalog" id="catalog">
    <!-- Дефибрилляторы -->
    <div class="card" data-id="6" data-cat="defib" data-name="дефибриллятор d-heart-12">
      <div class="card__img">
        <img src="accets/img/9.jpg" alt="Дефибриллятор D-Heart-12">
      </div>
      <div class="card__info">
        <h3 class="card__title">Дефибриллятор D-Heart-12</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">485 000 ₽</span>
          <span class="card__rating">★ 4.9</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="6">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="7" data-cat="defib" data-name="philips heartstart hs1">
      <div class="card__img">
        <img src="accets/img/10.jpg" alt="Philips HeartStart HS1">
      </div>
      <div class="card__info">
        <h3 class="card__title">Philips HeartStart HS1</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">227 000 ₽</span>
          <span class="card__rating">★ 4.8</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="7">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="8" data-cat="defib" data-name="zoll aed 3">
      <div class="card__img">
        <img src="accets/img/11.jpg" alt="ZOLL AED 3">
      </div>
      <div class="card__info">
        <h3 class="card__title">ZOLL AED 3</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">319 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="8">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="9" data-cat="defib" data-name="mindray beneheart c1a">
      <div class="card__img">
        <img src="accets/img/12.jpg" alt="Mindray BeneHeart C1A">
      </div>
      <div class="card__info">
        <h3 class="card__title">Mindray BeneHeart C1A</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">255 000 ₽</span>
          <span class="card__rating">★ 4.6</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="9">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="10" data-cat="defib" data-name="schiller fred easy">
      <div class="card__img">
        <img src="accets/img/13.jpg" alt="Schiller Fred Easy">
      </div>
      <div class="card__info">
        <h3 class="card__title">Schiller Fred Easy</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">410 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="10">В 1 клик</button>
        </div>
      </div>
    </div>

    <!-- Мониторы -->
    <div class="card" data-id="11" data-cat="monitor" data-name="монитор пациента or-patient-m800">
      <div class="card__img">
        <img src="accets/img/14.jpg" alt="Монитор пациента OR-Patient-M800">
      </div>
      <div class="card__info">
        <h3 class="card__title">Монитор пациента OR-Patient-M800</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">230 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="11">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="13" data-cat="monitor" data-name="philips intellivue mx800">
      <div class="card__img">
        <img src="accets/img/15.jpg" alt="Philips IntelliVue MX800">
      </div>
      <div class="card__info">
        <h3 class="card__title">Philips IntelliVue MX800</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">680 000 ₽</span>
          <span class="card__rating">★ 4.9</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="13">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="14" data-cat="monitor" data-name="comen cm-1200t">
      <div class="card__img">
        <img src="accets/img/16.jpg" alt="Comen CM-1200T">
      </div>
      <div class="card__info">
        <h3 class="card__title">Comen CM-1200T</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">170 000 ₽</span>
          <span class="card__rating">★ 4.5</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="14">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="15" data-cat="monitor" data-name="nihon kohden bsm-3565">
      <div class="card__img">
        <img src="accets/img/17.jpg" alt="Nihon Kohden BSM-3565">
      </div>
      <div class="card__info">
        <h3 class="card__title">Nihon Kohden BSM-3565</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">590 000 ₽</span>
          <span class="card__rating">★ 4.8</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="15">В 1 клик</button>
        </div>
      </div>
    </div>

    <!-- Операционные светильники -->
    <div class="card" data-id="16" data-cat="light" data-name="операционный светильник ol-led-3">
      <div class="card__img">
        <img src="accets/img/18.jpg" alt="Операционный светильник OL-LED-3">
      </div>
      <div class="card__info">
        <h3 class="card__title">Операционный светильник OL-LED-3</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">340 000 ₽</span>
          <span class="card__rating">★ 4.6</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="16">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="17" data-cat="light" data-name="dr mach led 500">
      <div class="card__img">
        <img src="accets/img/19.jpg" alt="Dr. Mach LED 500">
      </div>
      <div class="card__info">
        <h3 class="card__title">Dr. Mach LED 500</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">420 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="17">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="18" data-cat="light" data-name="martin led 3">
      <div class="card__img">
        <img src="accets/img/20.jpg" alt="Martin LED 3">
      </div>
      <div class="card__info">
        <h3 class="card__title">Martin LED 3</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">380 000 ₽</span>
          <span class="card__rating">★ 4.8</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="18">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="19" data-cat="light" data-name="mindray hyled 760">
      <div class="card__img">
        <img src="accets/img/21.jpg" alt="Mindray HyLED 760">
      </div>
      <div class="card__info">
        <h3 class="card__title">Mindray HyLED 760</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">520 000 ₽</span>
          <span class="card__rating">★ 4.9</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="19">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="20" data-cat="light" data-name="trumpf led 3">
      <div class="card__img">
        <img src="accets/img/22.jpg" alt="Trumpf LED 3">
      </div>
      <div class="card__info">
        <h3 class="card__title">Trumpf LED 3</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">480 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="20">В 1 клик</button>
        </div>
      </div>
    </div>

    <!-- Стерилизация -->
    <div class="card" data-id="21" data-cat="ster" data-name="автоклав class b 12 л">
      <div class="card__img">
        <img src="accets/img/23.jpg" alt="Автоклав Class B 12 л">
      </div>
      <div class="card__info">
        <h3 class="card__title">Автоклав Class B 12 л</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">290 000 ₽</span>
          <span class="card__rating">★ 4.5</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="21">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="22" data-cat="ster" data-name="автоклав mocom exact 12">
      <div class="card__img">
        <img src="accets/img/24.jpg" alt="Автоклав Mocom Exact 12">
      </div>
      <div class="card__info">
        <h3 class="card__title">Автоклав Mocom Exact 12</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">420 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="22">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="23" data-cat="ster" data-name="стерилизатор паровой 23 л">
      <div class="card__img">
        <img src="accets/img/25.jpg" alt="Стерилизатор паровой 23 л">
      </div>
      <div class="card__info">
        <h3 class="card__title">Стерилизатор паровой 23 л</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">560 000 ₽</span>
          <span class="card__rating">★ 4.6</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="23">В 1 клик</button>
        </div>
      </div>
    </div>

    

    <div class="card" data-id="25" data-cat="ster" data-name="сушилка медицинская 50 л">
      <div class="card__img">
        <img src="accets/img/26.jpg" alt="Сушилка медицинская 50 л">
      </div>
      <div class="card__info">
        <h3 class="card__title">Сушилка медицинская 50 л</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">135 000 ₽</span>
          <span class="card__rating">★ 4.5</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="25">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="27" data-cat="lab" data-name="гематологический анализатор bc-30s">
      <div class="card__img">
        <img src="accets/img/27.jpg" alt="Гематологический анализатор BC-30s">
      </div>
      <div class="card__info">
        <h3 class="card__title">Гематологический анализатор BC-30s</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">490 000 ₽</span>
          <span class="card__rating">★ 4.7</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="27">В 1 клик</button>
        </div>
      </div>
    </div>

    <div class="card" data-id="28" data-cat="lab" data-name="микроскоп olympus cx23">
      <div class="card__img">
        <img src="accets/img/28.jpg" alt="Микроскоп Olympus CX23">
      </div>
      <div class="card__info">
        <h3 class="card__title">Микроскоп Olympus CX23</h3>
        <p class="card__desc">Надёжное медицинское оборудование с официальной гарантией.</p>
        <div class="card__bottom">
          <span class="card__price">230 000 ₽</span>
          <span class="card__rating">★ 4.9</span>
        </div>
        <div class="card__actions">
          <button class="btn btn--primary add-to-cart">В корзину</button>
          <button class="btn btn--ghost quick-order-btn" data-id="28">В 1 клик</button>
        </div>
      </div>
    </div>

  </section>
</main>

<!-- <dialog id="cart-modal">
  <form method="dialog">
    <h2>Корзина</h2>
    <div id="cart-items"></div>
    <div class="cart-total">Итого: <span id="total-price">0</span> ₽</div>
    <button class="btn btn--primary">Оформить заказ</button>
    <button value="close" class="btn btn--ghost">Закрыть</button>
  </form>
</dialog>

<dialog id="quick-order">
  <form id="quick-form">
    <h2>Быстрый заказ</h2>
    <input type="text" name="name" placeholder="Контактное лицо" required>
    <input type="tel" name="phone" placeholder="Телефон" required>
    <input type="email" name="email" placeholder="E-mail (не обязательно)">
    <textarea name="comment" placeholder="Комментарий"></textarea>
    <input type="hidden" name="productId" id="quick-product">
    <button class="btn btn--primary">Отправить заявку</button>
  </form>
</dialog> -->



<?php 
require_once 'include/footer.php';
?>

</body>
</html>