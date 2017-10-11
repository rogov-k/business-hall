<div class="block block--welcome" id="welcome">
    <div class="block--wrapper">
        <div class="block--header">
            <h2>Добро пожаловать в Business Hall:</h2>
        </div>
        <div class="block--body">
          <?php
          $slider = '<div class="slider">';
          foreach (glob('img/photo/*.png') as $filename) {
            $slider .= '<div class="img-wrapper"><img src="' . $filename . '"></div>';
          }
          $slider .= '</div>';
          echo $slider;
          ?>
            <article><?php echo $content['text']['welcome']; ?></article>
            <div class="icons">
                <div class="icon-item r">Ресторан</div>
                <div class="icon-item f">Семейные комнаты</div>
                <div class="icon-item s">Комнаты для не курящих</div>
                <div class="icon-item b">Камеры хранения</div>
                <div class="icon-item c">Ежедневная уборка</div>
            </div>
        </div>
    </div>
</div>