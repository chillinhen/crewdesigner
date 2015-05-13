<?php if ($_SESSION['BE_DATA']['CURRENT_ID']): ?>
    <div class="edit">
        <a target="_blank" href="/contao/main.php?do=article&table=tl_content&id=<?php echo $this->id ?>&rt=<?php echo RequestToken::get() ?>" title="edit article">Bearbeiten</a>
    </div>
    <?php
 endif ?>