<?php

namespace App\Http\Controllers\Site;

use App\Models\Identity;
//use App\Models\Contact;
use App\Models\Counter;
use App\Models\Service;
//use App\Models\Category;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\Slider;
use Illuminate\Support\Facades\App;




class SiteController extends Controller
{
    public function __construct()
    {

    }
    public function Index()
    {
        //sliders
        //$locale = App::currentLocale();
        $sliders = Slider::limit(5)->get(); // return collection
        $sliders->makeHidden(['resource_url','media']);
       // return $sliders;
        //about About
        $about = Identity::limit(5)->get(); // return collection
       $about->makeHidden(['resource_url']);
       //service Service
        $service = Service::limit(8)->get(); // return collection
        $service->makeHidden(['resource_url']);

       //Categories
      //  $categories = Category::limit(8)->get(); // return collection
       // $categories->makeHidden(['resource_url']);
       //products


        //rate
          $data=[
           'sliders'=>$sliders,
           'about'=>$about,
           'service'=>$service,
           //'categories'=>$categories,

       ];
      return view('front\index',compact('data'));

    }
    public function About()
    {
        // echo "home mn controller";
       // return view('front\about');
        $about = About::limit(5)->get();
        $about->makeHidden(['resource_url']);
        //service Service
        $service = Service::limit(8)->get(); // return collection
        $service->makeHidden(['resource_url']);
         $data=[
           // 'sliders'=>$sliders,
            'about'=>$about,
            'service'=>$service,
        ];
        return view('front\about',compact('data'));
    }
    public function Services()
    {

        $counter = Counter::limit(4)->get(); // return collection
        $counter->makeHidden(['resource_url']);
        $category = Category::limit(8)->get(); // return collection
        $category->makeHidden(['resource_url']);
        $data=[
            'category'=>$category,
            'counters'=>$counter,
            ];
        return view('front\categories',compact('data'));

    }
    public function Service($id)
    {

        $products = Category::with('products')->find($id)->limit(8)->get(); // return collection
        $products->makeHidden(['resource_url']);
        $posts = Category::with('posts')->find($id)->limit(5)->get(); // return collection
        $posts->makeHidden(['resource_url']);
        return $data=[

            'products'=>$products,
            'posts'=>$posts,
        ];
        // return view('front\categories');

    }
    public function Products()
    {
        // echo "home mn controller";
        return view('front\products');

    }
    public function Product($id)
    {
        // echo "home mn controller";
        $data['id']=$id;
        return view('front\product',$data);

    }
    public function Contact()
    {
        $contact = Contact::limit(8)->get(); // return collection
        $contact->makeHidden(['resource_url']);

         $data=[
            'contact'=>$contact,
        ];
        // echo "home mn controller";
       return view('front\contact',compact('data'));

    }

}
