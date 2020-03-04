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
            'view'=>(new LawsModel())->order('view_count',"DESC"),

            'newss'=>(new LawsModel())->order('id',"DESC"),
            'important'=>(new LawsModel())->important(), 'recom'=>(new LawsModel())->recom()]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);

    }
    public function login()
    {
//        var_dump($_POST);
        if ($_POST){
            $message = new MessageModel();
            $ism = isset($_POST['ism']) ? trim($_POST['ism']) : 0;
            $familiya  = isset($_POST['familiya']) ? trim($_POST['familiya']):0;
            $telefon  = isset($_POST['telefon']) ? $_POST['telefon'] :0;
            $ish = isset($_POST['ish'])? trim($_POST['ish']):0;
            $mavzu = isset($_POST['mavzu'])? trim($_POST['mavzu']):0;
            $maqola = isset($_POST['maqola']) ? trim($_POST['maqola']):0;
            $message->send($ism, $familiya, $telefon, $ish, $mavzu, $maqola);
            header('Location: ?c=site');
        }
        $this->render('_header');
        $this->render('login');
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }
    public function reg()
    {
        if ($_POST){
            $reg = new RegModel();
            $name = trim($_POST['name']);
            $login  = trim($_POST['login']);
            $pass  = trim($_POST['pass']);

            $reg->create($name, $login, $pass);
            header('Location: ?c=site');
        }

        $this->render('_header');
        $this->render('reg');
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }



    public function news()
    {
    	$c=new CategoryModel();
        $category=$c->getAll();
        $lawsModel = new LawsModel();
        $lawList = $lawsModel->getAll();
        $this->render('_header');
        $this->render('news', ['category'=>$category, 'news'=>$lawList]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }
    public function more()
    {
        $id=$_GET['id'];
        $newsModel = new LawsModel();
        $newsList = $newsModel->getOne($id);
        $comment = new CommentModel();
        $coms = $comment->getOne($id);
        $com = $coms;
        if ($_POST){
            $name=$_POST['ism'];
            $message=$_POST['message'];
            $comment->create($id, $name, $message);
            header("Location: ?c=site");
        }
        $this->render('_header');
        $this->render('more',['news'=>$newsList[0],
            'category'=>(new categoryModel())->getAll() ,'comment'=>$com]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
        (new LawsModel())->incViews($id);

    }

    public function newsCats()
    {
        $id = $_GET['id'];
        $newsModel = new LawsModel();
        $newsList = $newsModel->getById($id);
        $this->render('_header');
        $this->render('news',['news'=>$newsList,
            'category'=>(new categoryModel())->getAll()]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }

    public function about()
    {
        $c=new CategoryModel();
        $category=$c->getAll();
        $this->render('_header');
        $this->render('about',['category'=>$category,
            'newss'=>(new LawsModel())->order('id',"DESC"),
            'important'=>(new LawsModel())->important(), 'recom'=>(new LawsModel())->recom()]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }

    public function pdf(){
        $stylesheet = file_get_contents('assets/css/style.css');
        $id=$_GET['id'];
        $newsModel = new LawsModel();
        $newsList = $newsModel->getOne($id);
        //$newsList[0]["image"];
//        var_dump($newsList[0]);
//        var_dump($_POST['image']);
        // Sends output inline to browser
        $mpdf = new \Mpdf\Mpdf();

            $mpdf->WriteHTML('
            <div class="post-details-content bg-white mb-30 p-30 box-shadow" >
                    <div class="blog-thumb mb-30">
                    ');
            if(!empty($newsList[0]["image"])){
        $mpdf->WriteHTML('
                        <img src="assets/img/bg-img/'.$newsList[0]["image"].'" style="width:700px">
                    ');
            }
                $mpdf->WriteHTML('
                    </div>
                    <div class="blog-content">
                        <div class="post-meta">
                            '.Format::dateFormat($newsList[0]["add_date"], "M d Y").' <br>
                            <TT>'.$newsList[0]["name"]. '</TT>
                        </div>
                        <h1 style="text-align: center;color: #481f38;font:30px bolder">' .$newsList[0]["title"] .'</h1>
                        <p style="font-size: 15px">'.$newsList[0]["description"].'</p>
                    </div>
                </div>
                ');

        $mpdf->Output();
    }

    public function contact()
    {
        if ($_POST){
            $m = new MessageModel();
            $name = isset($_POST['name']) ? trim($_POST['name']) : 0;
            $phone  = isset($_POST['phone']) ? trim($_POST['phone']):0;
            $message  = isset($_POST['message']) ? $_POST['message'] :0;

            $m->send($name, $phone, $message);
            header('Location: ?c=site');
        }
    	$c=new CategoryModel();
        $category=$c->getAll();
        $this->render('_header');
        $this->render('contact',['category'=>$category,
            'newss'=>(new LawsModel())->order('id',"DESC"),
            'important'=>(new LawsModel())->important(), 'recom'=>(new LawsModel())->recom()]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }
    public function search()
    {
        $key=isset($_GET['key'])?$_GET['key']:"";
//        var_dump($key);
        $s=new LawsModel();
        $find=$s->like($key);
        $this->render('_header');
        $this->render('search',['find'=>$find,'category'=>(new categoryModel())->getAll(),'key'=>$key ]);
        $this->render('_footer',["category" => (new categoryModel())->getAll()]);
    }

    public function contactSend() {
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