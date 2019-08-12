    <!-- blog area start -->
    <div class="blog-area">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-7 offset-xl-1 col-lg-8">
                    <div class="row">

                        <?php
                            foreach($posts as $post){
                        ?>
                        <div class="col-md-6">
                            <div class="single-post">
                                <?php
                                    if($post->photo != ''){
                                ?>
                                    <div class="blog-thumb">
                                        <img src="<?= $url_admin.'img/post_main_photos/'.$post->photo ?>" alt="<?= $post->title ?>">
                                    </div>
                                <?php
                                    }
                                ?>
                                <h3 class="blog-post-title"><a href="<?= $this->Url->build('/post/'.$post->slug) ?>"><?= $post->title ?></a></h3>
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> <?= $post->post_category->name ?></li>
                                    <li><i class="fa fa-clock-o"></i> <?= $post->publishing_date->format('d-m-Y'); ?></li>
                                </ul>
                                <p><?= substr(strip_tags(($post->body)),0,100) ?>...</p>
                                <a href="<?= $this->Url->build('/post/'.$post->slug) ?>" class="read-more">Leer más <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>


                        
                        <div class="col-md-6">
                            <div class="pagination_area">
                                <ul>
                                    <?php
                                        echo $this->Paginator->prev('<<', array('tag'=>'li','escape'=>true), '', array('class'=>'hidden'));
                                        echo $this->Paginator->numbers(array('tag'=>'li','currentTag' => 'a','currentClass' => 'active','separator' => ''));
                                        echo $this->Paginator->next('>>', array('tag'=>'li','escape'=>true), '',  array('class'=>'hidden'));
                                    ?>
                                    <!-- <li><a href="#"><i class="fa fa-chevron-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-chevron-right"></i></a></li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidebar area start -->
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-area">
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
                        <!-- <div class="widget widget-recent_post">
                            <h2 class="widget-title">Recent Post</h2>
                            <div class="rc-post">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin Post</li>
                                    <li><i class="fa fa-clock-o"></i> 28-04-2018</li>
                                </ul>
                                <p><a href="blog-details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiiso</a></p>
                            </div>
                            <div class="rc-post">
                                <ul class="blog-meta">
                                    <li><i class="fa fa-user"></i> Admin Post</li>
                                    <li><i class="fa fa-clock-o"></i> 28-04-2018</li>
                                </ul>
                                <p><a href="blog-details.html">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiiso</a></p>
                            </div>
                        </div> -->
                        <!-- widget recent post end -->
                    </div>
                </div>
                <!-- sidebar area end -->
            </div>
        </div>
    </div>
    <!-- blog area end -->