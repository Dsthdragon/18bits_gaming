<div class="uk-container uk-margin-top">
    <div class="uk-grid" uk-grid>
        <div class="uk-width-2-3@m">
            <h2 class="uk-heading-line uk-text-bold"><span><?= ($this->category) ? ucfirst($this->category['title']) : "News" ?></span></h2>

            <?php
            $data = paginator::paginate($this->articles, 9, $this->currentPage);
            $count = $data[1];
            $data = $data[0];
            ?>
            <?php foreach($data as $key => $value): ?>
                <article class="uk-section uk-section-small uk-padding-remove-top uk-padding-remove-bottom white uk-margin">
                    <div class="uk-grid uk-flex-middle" uk-grid>

                        <div class="uk-width-1-1@s uk-width-1-3@m">
                            <figure>
                                <img src="<?= loadmedia::image($value['image'], "thumb") ?>" alt="Alt text">
                            </figure>
                        </div>
                        <div class="uk-width-1-1@s uk-width-2-3@m uk-padding-top">
                            <header>
                                <h3 class="uk-text-bold"><a title=<?= $value['title'] ?>" class="uk-link-reset" href="<?= URL ?>post/<?= $value['link']; ?>"><?= $value['title'] ?></a></h3>
                            </header>
                            <p class="uk-article-meta"><?= relative_time::wordmonth($value['created_at']) ?></p>
                            <hr />
                            <p><?= $value['abstract'] ?>.</p>
                            <a href="<?= URL ?>post/<?= $value['link']; ?>" title="Read More" class="uk-button uk-button-default uk-button-small">READ MORE</a>
                        </div>
                    </div>
                </article>
            <?php endforeach ?>
            <?php if($count > 1 || $this->currentPage != 1): ?>

                <div class="uk-section uk-section-small white uk-padding-small" >
                    <div class="uk-grid">
                        <div class="uk-width-1-2">
                            <?php if($this->currentPage != 1): ?>
                                <a class="uk-button uk-button-default" href="<?= URL.'news/'.($this->currentPage - 1) ?>/<?= ($this->category) ? $this->category['link'] : "" ?>">
                                    <span class="fa fa-chevron-left"></span> Newer
                                </a>
                            <?php endif; ?>
                        </div>

                        <div class="uk-width-1-2 uk-text-right">
                            <?php if($count > $this->currentPage && $count > 0): ?>
                                <a class="uk-button uk-button-default" href="<?= URL.'news/'.($this->currentPage + 1) ?>/<?= ($this->category) ? $this->category['link'] : "" ?>">
                                    Older <span class="fa fa-chevron-right"></span>
                                </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <div class="uk-width-1-3@m">
            <h4 class="uk-heading-line uk-text-bold"><span>Twitter</span></h4>
            <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/18bitsgaming?ref_src=twsrc%5Etfw">Tweets by 18bitsgaming</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>
</div>
