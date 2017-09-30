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
        </div>
    </div>
</div>