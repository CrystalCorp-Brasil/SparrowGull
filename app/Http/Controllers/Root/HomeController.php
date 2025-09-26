<?php
    namespace App\Http\Controllers\Root;

    use App\Http\Controllers\Controller;
    use Illuminate\Http\Request;

    class HomeController extends Controller {
        public function index(){
//            $images = Image::with('user')->limit(2)->orderBy('created_at', 'DESC')->get();
//            $posts = Post::with('user')->limit(4)->orderBy('created_at', 'DESC')->get();
            return view('root/home/index');
        }

        public function about(){
            $pageTitle= 'Sobre Nós';
            return view ('root/pages/about', compact('pageTitle'));
        }

        public function termsOfUse(){
            $pageTitle = 'Termos de Uso';
            return view('root/pages/termsOfUse',compact('pageTitle'));
        }

/*


        public function privacyPolicy(){
            $pageTitle = 'Política de Privacidade';
            return view('site/pages/privacyPolicy',compact('pageTitle'));}

        public function imageGallery(){
            $pageTitle = 'Galeria de Imagens';
            $images = Image::with('user')->orderBy('created_at', 'DESC')->paginate(16);
            return view('site/pages/imageGallery', compact('images','pageTitle'));
        } */
    }
