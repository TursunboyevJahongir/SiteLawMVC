<?php

class AdminController extends Controller
{
    public function checkAuth()
    {
        $model = new AdminModal();
        if ($model->isLogged() == false) {
            header('Location: index.php?c=admin&m=login');
        }
    }


    public function admin()
    {
        $this->checkAuth();
        $news = new LawsModel();
        $news = $news->getAll();
        $this->render('_header',["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render('admin', ["news" => $news, "category" => (new categoryModel())->getAll()]);
        $this->render('_footer');
    }
    public function user_article()
    {
        $this->checkAuth();
        $ua = new MessageModel();
        $u = $ua->getAll();
        $this->render('_header',["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render('user_article', ["ua" => $u]);
    }

    public function createcats()
    {
        $this->checkAuth();
        if ($_POST) {
            $model = new categoryModel();
            $name = $_POST['name'];
            $model->create($name);
            header('Location: ?c=admin');
        }
        $this->render('_header',["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render('creatects');
        $this->render('_footer');
    }

    public function createnews()
    {
        $this->checkAuth();
//        var_dump($_POST);
        if (isset($_POST)) {
            $model = new LawsModel();
            $title = isset($_POST['title'])?trim($_POST['title']):"";
            $body = isset($_POST['description'])?trim($_POST['description']):"";
            $image = isset($_POST['image']) ? $_POST['image'] :"";
            $important = !empty($_POST['important']) ? 1 : 0;
            $recom = !empty($_POST['recom']) ? 1 : 0;
            $category = isset($_POST['category']) ? $_POST['category'] :"";
            if ($model->create($title, $body, $image, $important, $recom, $category))
                header('Location: ?c=admin');

        }
        $model = new categoryModel();
        $item = $model->getAll();
        $this->render('_header',["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render('createnews', ['category' => $item]);
//        $this->render('_footer');
    }

    public function imageDelete()
    {
        $id = $_GET['id'];
        $model = new GalleryModel();
        $model->delete($id);
        header('Location: ?c=admin&m=gallery');
    }

    public function NewsDelete()
    {
        $id = $_GET['id'];
        $model = new LawsModel();
        $model->delete($id);
        header('Location: ?c=admin');
    }

    public function CatsDelete()
    {
        $id = $_GET['id'];
        $model = new categoryModel();
        $model->delete($id);
        header('Location: ?c=admin');
    }

    public function newsEdit()
    {
        $this->checkAuth();


        $id = $_GET['id'];
        $model = new LawsModel();
        $item = $model->getOne($id);
//            var_dump($_POST);
//            var_dump($_GET);
        if ($_POST) {
//            $id = $_POST['id'];
            $title = trim($_POST['title']);
            $description = trim($_POST['description']);
            $image = empty($_POST['image']) ? "" : $_POST['image'];
            $important = !empty($_POST['important']) ? 1 : 0;
            $recom = !empty($_POST['recom']) ? 1 : 0;
            $category = $_POST['category'];
            //echo $id.' '.$title.' '.$description.'  '.$important.' '.$recom.' '.$category;
//            exit;
            $model->update($id, $title, $description, $image, $important, $recom, $category);
            header('Location: ?c=admin&m=newscontrol');
        }

        $this->render('_header',["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render('news-edit', [
            'item' => $item[0], 'category' => (new categoryModel())->getAll(),
        ]);
//        $this->render('_footer');
        exit;
    }

    public function newscontrol()
    {
        $this->checkAuth();
        $news = new LawsModel();
        $news = $news->getAll();

        $this->render('_header',["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render('news', ['news' => $news]);
//        $this->render('_footer');
    }

    public function gallery()
    {
        $this->checkAuth();
        $galleryModel = new GalleryModel();
        $gallery = $galleryModel->getAll();
        $this->render("_header",["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render("gallery", ['gallery' => $gallery]);
//        $this->render("_footer");

    }

    public function UploadImage()
    {
        $this->checkAuth();
//        $galleryModel=new GalleryModel();
//        $gallery=$galleryModel->getAll();
        $this->render("_header",["message" => (new MessageModel())->getAll(),"count" => (new MessageModel())->count()]);
        $this->render("UploadImage");
//        $this->render("_footer");

    }

    public function login()
    {
        if ($_POST) {
            $password = isset($_POST['password']) ? $_POST['password'] : '';
            $model = new AdminModal();
            $result = $model->checkpass($password);
            if ($result == true) {
                header('location:index.php?c=admin');
                exit;
            } else {
                $_SESSION['login_error'] = $result;
                header("Location: index.php?c=admin&m=login");
                exit;
            }
        }
        $this->render('lockscreen');

    }

    public function logout()
    {
        $model = new AdminModal();
        $model->logout();
        session_unset();

        header('Location:?c=site');
    }

}