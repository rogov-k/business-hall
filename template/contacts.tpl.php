<div class="block block--form" id="form">
    <div class="block--wrapper">
        <div class="block--header">
            <h2>Контакты:</h2>
        </div>
        <div class="block--body">
            <article><?php echo $content['text']['contact']; ?></article>
            <form method="POST">
                <input type="hidden" value="<?php echo $_SESSION['scrf']; ?>">
                <div class="field-group">
                    <input type="text" name="name" placeholder="Ваше имя *" required>
                    <input type="email" name="email" placeholder="Ваш email *" required>
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