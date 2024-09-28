<?php

namespace App\Http\Controllers;


use App\Models\Categories;
use App\Models\Images;
use App\Models\Videos;
use Illuminate\Http\Request;

class HomeController extends Controller
{
  public function index_main()
  {
    $data = Categories::limit(5)->get();
    $show = Categories::all();
    return view('index', compact('data','show'));
  }
  // public function index()
  // {
  //   return view('index');
  // }
  public function about()
  {

    return view('about');
  }

  public function blog()
  {

    return view('blog');
  }

  public function blog_details()
  {

    return view('blog-details');
  }

  public function contact()
  {

    return view('contact');
  }

  public function services()
  {

    return view('services');
  }

  public function service_details()
  {

    return view('service-details');
  }
  public function kitchen()
  {

    return view('kitchen');
  }
  public function automobile()
  {

    return view('automobile');
  }
  public function panels()
  {

    return view('panels');
  }
  public function pharma()
  {

    return view('pharma');
  }
  public function lockers()
  {
    return view('lockers');
  }
  public function podium()
  {
    return view('podium');
  }
  public function privacy_policy()
  {
    return view('privacy_policy');
  }
  public function term_and_condition()
  {
    return view('term_and_condition');
  }
  public function catagory()
  {
    $data = Categories::all();
    return view('catagory', compact('data'));
  }
  public function technology()
  {
    return view('technology');
  }
  public function product_detail($id)
  {
    $data = Categories::find($id);
    return view('product_detail', compact('id','data'));
  }
 public function gallery_images($id)
  {
    $data = Images::find($id);
    return view('gallery_images', compact('id','data'));
  }
public function gallery()
  {
    $data = Images::all();
    $videos = Videos::all();
    return view('gallery', compact('data', 'videos'));
  }
  public function gallery_videos($id)
  {
    $data = Videos::find($id);
    return view('gallery_videos', compact('id','data'));
  }
   public function brochure()
  {

    return view('brochure');
  }
   public function ms_panel()
  {

    return view('ms_panel');
  }
   public function ss_panel()
  {

    return view('ss_panel');
  }
   public function modular_panel()
  {

    return view('modular_panel');
  }
}
