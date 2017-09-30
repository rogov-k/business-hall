<div class="pop-up--content lux hide">
    <div class="pop-up--content__wrapper">
        <div class="pop-up--body">
            <div class="slide-pop-up">
              <?php
              $slider = '';
              foreach (glob('img/photo/lux/*.jpg') as $filename) {
                $slider .= '<div class="img-wrapper"><img src="' . $filename . '"></div>';
              }
              echo $slider;
              ?>
            </div>
            <div class="description">
                <h3>Business Hall - люкс:</h3>
                <article><?php echo $content['text']['lux-full']; ?></article>
                <h3>Гостиничные номера включают в себя все необходимое:</h3>
                <article><?php echo $content['text']['lux-include']; ?></article>
            </div>
            <div class="description">
                <div class="variations">
                    <div class="variation-once variation-once--title">
                        <div class="title">Номерной фондд</div>
                        <div class="person">Вмещает</div>
                        <div class="price">Цена</div>
                    </div>
                    <div class="variation-once variation-once--dark">
                        <div class="title">Люкс с видом на город</div>
                        <div class="person">2</div>
                        <div class="price">8&nbsp;000&#8381;</div>
                    </div>
                    <div class="variation-once">
                        <div class="title">Люкс с балконом</div>
                        <div class="person">2</div>
                        <div class="price">8&nbsp;700&#8381;</div>
                    </div>
                </div>
            </div>
            <div class="body--buttons">
                <div class="pop-up--close">Скрыть</div>
                <a href="#form" class="pop-up--close number--button">Боронировать</a>
            </div>
        </div>
    </div>
</div>
