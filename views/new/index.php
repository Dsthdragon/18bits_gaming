<?php $general = new general_model(); ?>
<section class="uk-section uk-article">
    <div class="uk-container uk-container-small">
        <h2 class="uk-text-bold uk-h1 uk-margin-remove-adjacent uk-margin-remove-top"><?= $this->article['title'] ?>.</h2>
        <p class="uk-text-lead"><?= $this->article['abstract']; ?>.</p>

        <p class="uk-article-meta"> 
            <div class="uk-grid">
                <div class="uk-width-1-1@s uk-width-3-4@m">
                    <?= relative_time::wordmonth($this->article['created_at']) ?>. 
                    <?php foreach($this->tags as $key => $value): ?>
                        <a href="<?= URL ?>tags/<?= $value['link']; ?>"><?= $value['tag']; ?></a>
                    <?php endforeach; ?>
                </div>
                <div class="uk-width-1-1@s uk-width-1-4@m">
                    <p class="uk-text-right">
                        <a class="uk-icon-button" href="https://www.facebook.com/sharer/sharer.php?<?= URL ?>post/<?= $this->article['link']; ?>" target="_blank" title="Share on Facebook">
                            <span class="fab fa-facebook"></span>
                        </a>
                        <a class="uk-icon-button" href="https://twitter.com/home?status=<?= $this->article['title'] ?> <?= URL ?>post/<?= $this->article['link']; ?>" target="_blank" title="Share on Twitter">
                            <span class="fab fa-twitter"></span>
                        </a>
                        <a class="uk-icon-button" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= URL ?>post/<?= $this->article['link']; ?>&title=<?= $this->article['title'] ?>&summary=<?= $this->article['abstract']; ?>" target="_blank" title="Share on Linkedin">
                            <span class="fab fa-linkedin"></span>
                        </a>
                    </p>
                </div>
            </div>
        </p>
        <hr />
    </div>

    <!-- large image -->
    <div class="uk-container uk-section uk-text-center">
        <img  data-src="<?= loadmedia::image($this->article['image'], "img") ?>" width="" height="" alt="" uk-img  >
    </div>
    <!-- /large image -->
    <!-- text -->
    <div class="uk-container uk-container-small">
        <?= $this->article['post']; ?>
    </div>
    <!-- text -->

</section>


<section class="">
    <div class="uk-container">
        <h2 class="uk-text-bold">More stories</h2>
        <div data-uk-slider="velocity: 5" class="uk-slider">
            <div class="uk-position-relative">
                <div class="uk-slider-container">
                    <ul class="uk-slider-items uk-child-width-1-2@s uk-child-width-1-3@m uk-grid uk-grid-medium uk-grid-match" uk-height-match="target: > li > div > .uk-card > .uk-card-body">
                        <?php foreach($this->posts as $key => $value): ?>
                            <li class="">
                                <!-- card -->
                                <div>
                                    <div class="uk-card uk-card-default uk-card-small uk-height-1-1" style="box-shadow: none;">
                                        <div class="uk-card-media-top">
                                            <a href="<?= URL ?>post/<?= $value['link']; ?>">
                                                <img class="crop" data-src="<?= loadmedia::image($value['image'], "thumb") ?>"  alt="" uk-img >
                                            </a>
                                        </div>
                                        <div class="uk-card-body">
                                            <h4 class="uk-margin-small-bottom uk-text-bold"><?= $value['title']; ?></h4>
                                            <p class="uk-text-meta uk-margin-remove-top uk-text-small">
                                                <span><?= relative_time::wordmonth($value['created_at']) ?>. </span>
                                                <hr />
                                            </p>
                                            <span class="uk-text-small"><?= $value['abstract']; ?></span>
                                        </div>
                                        <div class="uk-card-footer">
                                            <a class="uk-button uk-button-text uk-text-bold uk-margin-small" href="<?= URL ?>post/<?= $value['link']; ?>">READ MORE</a>
                                        </div>
                                    </div>
                                </div>
                                <!-- /card -->
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"><li uk-slider-item="0" class="uk-active"><a href="#"></a></li><li uk-slider-item="1"><a href="#"></a></li><li uk-slider-item="2"><a href="#"></a></li><li uk-slider-item="3"><a href="#"></a></li><li uk-slider-item="4"><a href="#"></a></li><li uk-slider-item="5"><a href="#"></a></li><li uk-slider-item="6"><a href="#"></a></li></ul>
                <div class="uk-hidden@m uk-light">
                    <a class="uk-position-center-left uk-position-small uk-slidenav-previous uk-icon uk-slidenav" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous"><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
                    <a class="uk-position-center-right uk-position-small uk-slidenav-next uk-icon uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next"><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
                </div>
                <div class="uk-visible@m">
                    <a class="uk-position-center-left-out uk-position-small uk-slidenav-previous uk-icon uk-slidenav" href="#" data-uk-slidenav-previous="" data-uk-slider-item="previous"><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="12.775,1 1.225,12 12.775,23 "></polyline></svg></a>
                    <a class="uk-position-center-right-out uk-position-small uk-slidenav-next uk-icon uk-slidenav" href="#" data-uk-slidenav-next="" data-uk-slider-item="next"><svg width="14" height="24" viewBox="0 0 14 24" xmlns="http://www.w3.org/2000/svg"><polyline fill="none" stroke="#000" stroke-width="1.4" points="1.225,23 12.775,12 1.225,1 "></polyline></svg></a>
                </div>
            </div>

        </div>
    </div>
</section>