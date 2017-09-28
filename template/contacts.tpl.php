<div class="block block--form" id="form">
    <div class="block--wrapper">
        <div class="block--header">
            <h2>Обратная связь:</h2>
        </div>
        <div class="block--body">
            <article><?php echo $content['text']['form']; ?></article>
            <div class="info">
                <div class="info--phone"><a href="tel:+73952436380">+7 (3952) 43‒63‒80</a></div>
                <div class="info--email"><a href="mailto:email@domain.ru">email@domain.ru</a></div>
                <div class="info--address">Иркутск, Свердлова, 10</div>
            </div>
            <form method="POST">
                <input type="hidden" value="<?php echo $_SESSION['scrf']; ?>">
                <div class="field-group">
                    <input type="text" name="name" placeholder="Ваше имя *" required>
                    <input type="text" name="data" placeholder="Как с вами связаться? *" required>
                    <input type="text" placeholder="Период проживания" data-range="true" data-multiple-dates-separator=" - " class="datepicker-here" readonly>
                </div>
                <textarea name="text" placeholder="Ваше сообщение *" required></textarea>
                <div class="form-footer">
                    <div class="social-icons">
                        <div class="icon icon--vk"></div>
                        <div class="icon icon--instagram"></div>
                        <div class="icon icon--twitter"></div>
                        <div class="icon icon--facebook"></div>
                    </div>
                    <input type="submit" value="Отправить">
                </div>
            </form>
        </div>
    </div>
</div>