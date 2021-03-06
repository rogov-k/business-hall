<div class="pop-up--content common hide">
  <div class="pop-up--content__wrapper">
    <div class="pop-up--body">
      <div class="slide-pop-up">
        <?php
        $slider = '';
        foreach (glob('img/photo/simple/*.jpg') as $filename) {
          $slider .= '<div class="img-wrapper"><img src="' . $filename . '"></div>';
        }
        echo $slider;
        ?>
      </div>
      <div class="description">
        <h3>Business Hall - cтандартный номер:</h3>
        <article><?php echo $content['text']['common-full']; ?></article>
      </div>
        <div class="description">
            <div class="variations">
                <div class="variation-once variation-once--title">
                    <div class="title">Номерной фонд</div>
                    <div class="person">Мест</div>
                    <div class="price">Цена</div>
                </div>
                <div class="variation-once variation-once--dark">
                    <div class="title">Стандартный номер</div>
                    <div class="person">
                        <div class="place"></div>
                        <div class="place"></div>
                    </div>
                    <div class="price">4&nbsp;200&#8381;</div>
                </div>
                <div class="variation-once">
                    <div class="title">Стандартный номер</div>
                    <div class="person">
                        <div class="place"></div>
                    </div>
                    <div class="price">3&nbsp;570&#8381;</div>
                </div>
                <div class="variation-once variation-once--dark">
                    <div class="title">Стандартный номер для людей с ограниченными возможностями</div>
                    <div class="person">
                        <div class="place"></div>
                        <div class="place"></div>
                    </div>
                    <div class="price">5&nbsp;200&#8381;</div>
                </div>
                <div class="variation-once">
                    <div class="title">Стандартный номер для людей с ограниченными возможностями</div>
                    <div class="person">
                        <div class="place"></div>
                    </div>
                    <div class="price">4&nbsp;420&#8381;</div>
                </div>
            </div>
        </div>
      <div class="body--buttons">
        <div class="pop-up--close">Скрыть</div>
        <a href="#form" class="pop-up--close number--button">Бронировать</a>
      </div>
    </div>
  </div>
</div>
