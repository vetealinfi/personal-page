    <!-- blog area start -->
    <div class="blog-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-1 col-lg-8">
                    <div class="single-post post-details">
                        <?php
                            if($post->photo != ''){
                        ?>
                        <div class="blog-thumb">
                            <img src="<?= $url_admin.'img/post_main_photos/'.$post->photo ?>" alt="<?= $post->title ?>">
                        </div>
                        <?php
                            }
                        ?>
                        <h3 class="blog-post-title">
                            <a href="<?= $this->Url->build('/post/'.$post->slug) ?>"><?= $post->title ?></a>
                        </h3>
                        <ul class="blog-meta">
                            <li>
                                <i class="fa fa-user"></i> <?= $post->post_category->name ?></li>
                            <li>
                                <i class="fa fa-clock-o"></i><?= $post->publishing_date->format('d-m-Y') ?></li>
                        </ul>
                        <?= $post->body ?>
                    </div>
                
                </div>
                <!-- sidebar area start -->
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-area pl--60">
                        <!-- widget Category start -->
                        <div class="widget widget-category">
                            <h2 class="widget-title">Categorias</h2>
                            <ul>
                                <?php
                                    foreach($post_categories as $post_category){
                                ?>
                                <li><a href="<?= $this->Url->build('/blog/'.$post_category->slug) ?>"><?= $post_category->name ?></a></li>
                                <?php
                                    }
                                ?>
                            </ul>
                        </div>
                        <!-- widget Category end -->
                        <!-- widget recent post start -->
                        <div class="widget widget-recent_post">
                            <h2 class="widget-title">Últimos posts</h2>

                            <?php
                                foreach($last_posts as $post2){
                            ?>
                            <div class="rc-post">
                                <ul class="blog-meta">
                                    <li>
                                        <i class="fa fa-user"></i> <?= $post2->post_category->name ?></li>
                                    <li>
                                        <i class="fa fa-clock-o"></i> <?= $post2->publishing_date->format('d-m-Y')   ?></li>
                                </ul>
                                <p>
                                    <a href="<?= $this->Url->build('/post/'.$post2->slug) ?>"><?= $post2->title ?></a>
                                </p>
                            </div>
                            <?php
                                }
                            ?>
                        </div>
                        <!-- widget recent post end -->
                  
                    </div>
                </div>
                <!-- sidebar area end -->
            </div>
        </div>
    </div>
    <!-- blog area end -->