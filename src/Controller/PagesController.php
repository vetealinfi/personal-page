<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{




    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function home(){
        $this->set('title', 'Jorge Partal || Cakephp Web Developer');
        $this->viewBuilder()->setLayout('front');
        $menu_active = 1;
        $this->set(compact('menu_active'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function skills(){
        $this->set('title', 'Skills Web || Cakephp Web Developer');
        $this->set('description', 'Aquí te presento algunas de mis habilidades, siempre estoy actualizandome. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce');

        $this->viewBuilder()->setLayout('front');
        $menu_active = 2;
        $this->set(compact('menu_active'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function education(){
        $this->set('title', 'Education || Cakephp Web Developer');
        $this->set('description', 'Aquí te presento mi historial en educacion, siempre estoy aprendiendo y tomando cursos. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce');
        $this->viewBuilder()->setLayout('front');
        $menu_active = 3;
        $this->set(compact('menu_active'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function experience(){
        $this->set('title', 'Experience || Cakephp Web Developer');
        $this->set('description', 'Aquí te muestro mi experiencia laboral, revisa tambien mis proyectos freelance. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce');
        $this->viewBuilder()->setLayout('front');
        $menu_active = 4;
        $this->set(compact('menu_active'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function projects(){

        $this->set('title', 'Portfolio || Cakephp Web Developer');
        $this->set('description', 'Aquí te muestro mi protfolio de proyectos, revisa los mas actuales y dime si te interesa algo similar. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce');
        $this->viewBuilder()->setLayout('front');
        $menu_active = 5;
        $this->set(compact('menu_active'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function blog(){
        $this->set('title', 'Blog || Cakephp Web Developer');
        $this->set('description', 'Te contare un poco acerca de lo que hago y lo que he aprendido, ojalá te sirva de ayuda. Contáctame si necesitas realizar un proyecyo desde una pagina simple, hasta sistemas complejos como un ecommerce');
        $this->viewBuilder()->setLayout('front');
        $menu_active = 6;

        $this->loadModel('Posts');
        $this->loadModel('PostCategories');

        $post_obj = $this->Posts->find()
            ->contain([
                'PostCategories'
            ])
            ->order([
                'Posts.id' => 'DESC'
            ]);

        $posts = $this->paginate($post_obj);

        $post_categories = $this->PostCategories->find()
            ->all();

        $this->set(compact('menu_active','posts','post_categories'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function post($slug = null){

        $this->loadModel('Posts');
        $this->loadModel('PostCategories');

        $post = $this->Posts->find()
            ->contain([
                'PostCategories'
            ])
            ->where([
                'Posts.slug' => $slug
            ])
            ->first();


        $this->set('title', 'Blog Jorge Partal || '.$post->post_category->name.' || '.$post->title);
        $this->set('description', substr(strip_tags(($post->body)),0,100));
        $this->viewBuilder()->setLayout('front');
        $menu_active = 6;


        $url_admin = Configure::read('url_admin');


        $this->set('meta_title',$post->title);
        if($post->photo != ''){
            $this->set('meta_title',$url_admin.'img/post_main_photos/'.$post->photo);
        }





        $last_posts = $this->Posts->find()
            ->contain([
                'PostCategories'
            ])
            ->where([
                'Posts.id !=' => $post->id
            ])
            ->limit(2)
            ->all();


        $post_categories = $this->PostCategories->find()
            ->all();

        $this->set(compact('menu_active','post','post_categories','url_admin','last_posts'));
    }

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Neasdsadadsadorksadsadasdads\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Network\Exfgfdgfdception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     asdasdasd

     */
    public function contact(){
        $this->set('title', 'Contact || Cakephp Web Developer');
        $this->set('description', ' Contáctame si necesitas realizar un proyecto desde una pagina simple, hasta sistemas complejos como un ecommerce. Te devolveré el llamado apenas pueda o si quieres nos tomamos un café');
        $this->viewBuilder()->setLayout('front');
        $menu_active = 7;
        $this->set(compact('menu_active'));
    }


}
