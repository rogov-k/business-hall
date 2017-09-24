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
        <h3>Business Hall - двухместный номер:</h3>
        <article><?php echo $content['text']['common-full']; ?></article>
        <h3>Гостиничные номера включают в себя все необходимое:</h3>
        <article><?php echo $content['text']['common-include']; ?></article>
      </div>
      <div class="body--buttons">
        <div class="pop-up--close">Скрыть</div>
        <a href="#form" class="pop-up--close number--button">Боронировать</a>
      </div>
    </div>
  </div>
</div>
