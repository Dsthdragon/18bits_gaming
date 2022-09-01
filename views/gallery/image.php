<div class="uk-container uk-margin-top">
    <h2 class="uk-heading-line uk-text-bold"><span>Images</span></h2>
    <div class="uk-grid" uk-grid data-uk-lightbox="toggle:a.uk-position-cover">
        <?php foreach ($this->gallery as $key => $value): ?>
            <div class="uk-width-1-1@s uk-width-1-5@m">
                <div class="uk-grid uk-grid-medium uk-flex uk-flex-middle" data-uk-grid>
                    <div class="uk-width-1-1@s uk-width-1-1@m uk-height-1-1">
                        <div class="uk-inline uk-inline-clip uk-transition-toggle ">
                            <img data-src="<?= loadmedia::image($value['id'], "thumb") ?>" uk-img>
                            <div class="uk-transition-fade uk-position-cover uk-overlay uk-overlay-primary uk-flex uk-flex-center uk-flex-middle">
                                <div class="uk-transition-fade uk-position-center">
                                    <span uk-overlay-icon></span>
                                </div>
                                <p class="uk-position-bottom-center"><?= $value['title']; ?></p>
                                <a href="<?= loadmedia::image($value['id'], "img") ?>" class="uk-position-cover" data-caption="<?= $value['title']; ?>" data-type="image"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>