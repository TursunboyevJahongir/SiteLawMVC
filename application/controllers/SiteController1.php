<?php
use PHPMailer\PHPMailer\PHPMailer;
class SiteController extends Controller
{
    public function index()
    {
        $c=new CategoryModel();
        $category=$c->getAll();
        $this->render('_header');
        $this->render('home',['category'=>$category,
            'newss'=>(new LawsModel())->order('id',"DESC"),
            'important'=>(new LawsModel())->important(), 'recom'=>(new LawsModel())->recom()]);
        $this->render('_footer');
    }
    public function login()
    {
        var_dump($_POST);
        if ($_POST){
            $message = new MessageModel();
            $ism = trim($_POST['ism']);
            $familiya  = trim($_POST['familiya']);
            $telefon  = trim($_POST['telefon']);
            $ish = trim($_POST['ish']);
            $mavzu = trim($_POST['mavzu']);
            $maqola = trim($_POST['maqola']);
            $message->send($ism, $familiya, $telefon, $ish, $mavzu, $maqola);
            header('Location: ?c=site');
        }
        $this->render('_header');
        $this->render('login');
        $this->render('_footer');
    }
    public function reg()
    {
        if ($_POST){
            $reg = new RegModel();
            $name = trim($_POST['name']);
            $login  = trim($_POST['login']);
            $pass  = $_POST['pass'];

            $reg->create($name, $login, $pass);
            header('Location: ?c=site');
        }

        $this->render('_header');
        $this->render('reg');
        $this->render('_footer');
    }

    public function gallery()
    {
        $galleryModel=new GalleryModel();
        $gallery=$galleryModel->getAll();
        $this->render('_header');
        $this->render('gallery',['gallery'=>$gallery]);
        $this->render('_footer');
    }

    public function news()
    {
        $newsModel = new LawsModel();
        $newsList = $newsModel->getAll();
        $this->render('_header');
        $this->render('news',['news'=>$newsList]);

        $this->render('_footer');
    }
    public function more()
    {
        $id=$_GET['id'];
        $newsModel = new LawsModel();
        $newsList = $newsModel->getOne($id);
        $this->render('_header');
        $this->render('more',['news'=>$newsList,
            'category'=>(new categoryModel())->getAll()]);
        $this->render('_footer');
    }

    public function newsCats()
    {
        $id = $_GET['id'];
        $newsModel = new LawsModel();
        $newsList = $newsModel->getById($id);
        $this->render('_header');
        $this->render('news',['news'=>$newsList,
            'category'=>(new categoryModel())->getAll()]);
        $this->render('_footer');
    }

    public function contact() {
        $alert = null;
        if ($_POST) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $question = $_POST['question'];

            $adminEmail = "djialhsho@gmail.com";
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = $adminEmail;
            $mail->Password   = 'diljah9197';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;

            $mail->setFrom($adminEmail, $name);
            $mail->addAddress('jah6332@gmail.com');
            $mail->isHTML(['isHtml' => true]);
            $mail->Body = $question . PHP_EOL . "<br/><b>Telefon:</b> " . $phone . " <br/><b>E-mail:</b> " . $email;
            $result = $mail->send();
            $alert = $result ? 'success' : 'error';
            echo $alert;
            exit;
        }
    }

}