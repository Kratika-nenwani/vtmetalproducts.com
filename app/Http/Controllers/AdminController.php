<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Panel;
use App\Models\Images;
use App\Models\Videos;
use Illuminate\Http\Request;
use App\Models\Query;
use Yajra\DataTables\DataTables as Datatables;

class AdminController extends Controller

   
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {

        return view('home');
    }

    public function manage_categories(Request $request)
    {
        $data = Categories::all();
        // \Log::info($data);
        if($request->ajax()){
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function($row){
              $btn = '<a href="' . route('manage-image',$row->id) . '" class="btn btn-sm btn-info">🔍 View & Manage</a>'; 
            return $btn;
                // $image = '<img src="' . asset("CategoryImages/" . $row->image) . '" width="80px">';
                // return $image;
            } )
            ->addColumn('action', function($row){
                $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                return $btn;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
        }
        return view('admin.manage-categories', compact('data'));
       
    }

    public function save_categories(Request $request) 
    {
        // dd($request->all());// Validate the incoming request data
        $request->validate([
            // 'image' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        // Create a new gallery instance and fill it with the validated data
        $categories = new Categories();
        $categories->name =  $request->input('name');
        $categories->description = $request->input('description');

        $imagePaths = [];

    // Check if multiple images are uploaded
        if ($request->hasFile('image')) { 
            foreach ($request->file('image') as $file) { 
                $ext = $file->getClientOriginalExtension(); 
                $filename = time() . '_' . uniqid() . '.' . $ext; 
                $file->move('CategoryImages/', $filename); 
                $imagePaths[] = $filename;  // Add each image path to array
            } 
        } 

        // Store image paths as a JSON string in the 'images' field
        $categories->images = json_encode($imagePaths); 
        // if ($request->hasFile('image')) {
        //     $file1 = $request->file('image');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages/', $filename1);
        //     $categories->image = $filename1;
         
        //   }

        //   if ($request->hasFile('image1')) {
        //     $file1 = $request->file('image1');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages1/', $filename1);
        //     $categories->image1 = $filename1;
         
        //   }

        //   if ($request->hasFile('image2')) {
        //     $file1 = $request->file('image2');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages2/', $filename1);
        //     $categories->image2 = $filename1;
         
        //   }
          
        //     if ($request->hasFile('image3')) {
        //     $file1 = $request->file('image3');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages3/', $filename1);
        //     $categories->image3 = $filename1;
         
        //   }

        //   if ($request->hasFile('image4')) {
        //     $file1 = $request->file('image4');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages4/', $filename1);
        //     $categories->image4 = $filename1;
         
        //   }

        //   if ($request->hasFile('image5')) {
        //     $file1 = $request->file('image5');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages5/', $filename1);
        //     $categories->image5 = $filename1;
         
        //   }

        //   if ($request->hasFile('image6')) {
        //     $file1 = $request->file('image6');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages6/', $filename1);
        //     $categories->image6 = $filename1;
         
        //   }

        //   if ($request->hasFile('image7')) {
        //     $file1 = $request->file('image7');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages7/', $filename1);
        //     $categories->image7 = $filename1;
         
        //   }
        
         $categories->save();

        
        return redirect()->back()->with('success', 'category created successfully.');


    }

    public function update_categories(Request $request ,$id)
    {
        //dd($request->all());
        $request->validate([
            // 'image' => 'required',
            // 'image1' => 'required',
            // 'image2' => 'required',
            // 'image3' => 'required',
            // 'image4' => 'required',
            // 'image5' => 'required',
            // 'image6' => 'required',
            // 'image7' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        // Create a new gallery instance and fill it with the validated data
        $categories = Categories::find($id);
        $categories->name =  $request->input('name');
        $categories->description = $request->input('description');
        // if ($request->hasFile('image')) {
        //     $file1 = $request->file('image');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages/', $filename1);
        //     $categories->image = $filename1;
         
        //   }

        //   if ($request->hasFile('image1')) {
        //     $file1 = $request->file('image1');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages1/', $filename1);
        //     $categories->image1 = $filename1;
         
        //   }
        //   if ($request->hasFile('image2')) {
        //     $file1 = $request->file('image2');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages2/', $filename1);
        //     $categories->image2 = $filename1;
         
        //   }
        //    if ($request->hasFile('image3')) {
        //     $file1 = $request->file('image3');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages3/', $filename1);
        //     $categories->image3 = $filename1;
         
        //   }
        //   if ($request->hasFile('image4')) {
        //     $file1 = $request->file('image4');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages4/', $filename1);
        //     $categories->image4 = $filename1;
         
        //   }
        //   if ($request->hasFile('image5')) {
        //     $file1 = $request->file('image5');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages5/', $filename1);
        //     $categories->image5 = $filename1;
         
        //   }
        //   if ($request->hasFile('image6')) {
        //     $file1 = $request->file('image6');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages6/', $filename1);
        //     $categories->image6 = $filename1;
         
        //   }
        //   if ($request->hasFile('image7')) {
        //     $file1 = $request->file('image7');
        //     $ext1 = $file1->getClientOriginalExtension();
        //     $filename1 = time() . '.' . $ext1;
        //     $file1->move('CategoryImages7/', $filename1);
        //     $categories->image7 = $filename1;
         
        //   }
        
         $categories->save();

        
        return redirect()->back()->with('success', 'category updated successfully.');

    }

    public function delete_categories(Request $request)
    {
        $categories = Categories::find($request->id);
        $categories->delete();
        return response()->json(['success', true]);
    }

    // panels
    public function manage_panels(Request $request)
    {
        $data = Panel::all();
        // Log::info($data);
        if($request->ajax()){
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function($row){
                $image = '<img src="' . asset("PanelImages/" . $row->image) . '" width="80px">';
                return $image;
            } )
            ->addColumn('action', function($row){
                $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                return $btn;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
        }
        return view('admin.manage-panels', compact('data'));
       
    }

    public function save_panels(Request $request) 
    {
        // dd($request->all());// Validate the incoming request data
        $request->validate([
            'image' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        // Create a new gallery instance and fill it with the validated data
        $panels = new Panel();
        $panels->name =  $request->input('name');
        $panels->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('PanelImages/', $filename1);
            $panels->image = $filename1;
         
          }

          if ($request->hasFile('image1')) {
            $file1 = $request->file('image1');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('PanelImages1/', $filename1);
            $panels->image1 = $filename1;
         
          }

          if ($request->hasFile('image2')) {
            $file1 = $request->file('image2');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('PanelImages2/', $filename1);
            $panels->image2 = $filename1;
         
          }
        
         $panels->save();

        
        return redirect()->back()->with('success', 'category created successfully.');


    }

    public function update_panels(Request $request ,$id)
    {
        //dd($request->all());
        $request->validate([
            'image' => 'required',
            'image1' => 'required',
            'image2' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        // Create a new gallery instance and fill it with the validated data
        $panels = Panel::find($id);
        $panels->name =  $request->input('name');
        $panels->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('PanelImages/', $filename1);
            $panels->image = $filename1;
         
          }

          if ($request->hasFile('image1')) {
            $file1 = $request->file('image1');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('PanelImages1/', $filename1);
            $panels->image1 = $filename1;
         
          }
          if ($request->hasFile('image2')) {
            $file1 = $request->file('image2');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('PanelImages2/', $filename1);
            $panels->image2 = $filename1;
         
          }
        
         $panels->save();

        
        return redirect()->back()->with('success', 'category updated successfully.');

    }

    public function delete_panels(Request $request)
    {
        $panels = Panel::find($request->id);
        $panels->delete();
        return response()->json(['success', true]);
    }
    public function manage_query(Request $request)
    {
        $data = Query::all();
        // Log::info($data);
        if($request->ajax()){
            return Datatables::of($data)
            ->addIndexColumn()
           
            ->addColumn('action', function($row){
                $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                return $btn;
            })
            ->rawColumns(['action'])
            ->make(true);
        }
        return view('admin.manage-query', compact('data'));
       
    }
       public function save_query(Request $request)
       {
        ($request->all);
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'subject'=> 'required',
            'message'=> 'required',
        ]);

        
        $query = new Query ();
        $query->fname =  $request->input('fname');
        $query->lname =  $request->input('lname');
        $query->email = $request->input('email');
        $query->phone =  $request->input('phone');
        $query->message = $request->input('message');
        $query->subject = $request->input('subject');
       
        
         $query->save();

        
        return redirect()->back()->with('success', 'Query updated successfully.');

       }
       public function delete_query(Request $request)
       {
           $query = Query::find($request->id);
           $query->delete();
           return response()->json(['success', true]);
       }

       public function manage_image($id) 
      { 
      $category = Categories::find($id); 
      $images = json_decode($category->images, true); // Assuming images are stored as JSON
      return view('admin.manage-image', compact('images', 'category'));
      }
       

      public function deleteImage($id, $image)
      {
          $category = Categories::find($id);
          $images = json_decode($category->images, true);

          // Remove the image from the array
          if (($key = array_search($image, $images)) !== false) {
              unset($images[$key]);
          }

          // Update the images in the database
          $category->images = json_encode(array_values($images));
          $category->save();

          // Delete the image from the folder
          $imagePath = public_path('CategoryImages/' . $image);
          if (file_exists($imagePath)) {
              unlink($imagePath);
          }

          return redirect()->back()->with('success', 'Image deleted successfully.');
      }

        public function manage_images(Request $request)
       
    {
        $data = Images::all();
        // \Log::info($data);
        if($request->ajax()){
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function($row){
                $image = '<img src="' . asset("Images/" . $row->image) . '" width="80px">';
                return $image;
            } )
            ->addColumn('action', function($row){
                $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                return $btn;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
        }
        return view('admin.manage-images', compact('data'));
       
    }

    public function save_images(Request $request) 
    {
        // dd($request->all());// Validate the incoming request data
        $request->validate([
            'image' => 'required',
            'description' => 'required',
        ]);

        // Create a new gallery instance and fill it with the validated data
        $images = new Images();
        $images->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images/', $filename1);
            $images->image = $filename1;
         
          }

          if ($request->hasFile('image1')) {
            $file1 = $request->file('image1');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images1/', $filename1);
            $images->image1 = $filename1;
         
          }

          if ($request->hasFile('image2')) {
            $file1 = $request->file('image2');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images2/', $filename1);
            $images->image2 = $filename1;
         
          }
          if ($request->hasFile('image3')) {
            $file1 = $request->file('image3');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images3/', $filename1);
            $images->image3 = $filename1;
         
          }
          if ($request->hasFile('image4')) {
            $file1 = $request->file('image4');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images4/', $filename1);
            $images->image4 = $filename1;
         
          }
          if ($request->hasFile('image5')) {
            $file1 = $request->file('image5');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images5/', $filename1);
            $images->image5 = $filename1;
         
          }
          if ($request->hasFile('image6')) {
            $file1 = $request->file('image6');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images6/', $filename1);
            $images->image6 = $filename1;
         
          }
          if ($request->hasFile('image7')) {
            $file1 = $request->file('image7');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images7/', $filename1);
            $images->image7 = $filename1;
         
          }
          if ($request->hasFile('image8')) {
            $file1 = $request->file('image8');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images8/', $filename1);
            $images->image8 = $filename1;
         
          }
          if ($request->hasFile('image9')) {
            $file1 = $request->file('image9');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images9/', $filename1);
            $images->image9 = $filename1;
         
          }
        
         $images->save();

        
        return redirect()->back()->with('success', 'category created successfully.');


    }

    public function update_images(Request $request ,$id)
    {
        // dd($request->all());
        // $request->validate([
        //     'image' => 'required',
        //     'image1' => 'required',
        //     'image2' => 'required',
        //     'image3' => 'required',
        //     'image4' => 'required',
        //     'image5' => 'required',
        //     'image6' => 'required',
        //     'image7' => 'required',
        //     'image8' => 'required',
        //     'image9' => 'required',
        //     'description' => 'required',
        // ]);

        // Create a new gallery instance and fill it with the validated data
        $images = Images::find($id);
        $images->description = $request->input('description');
        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images/', $filename1);
            $images->image = $filename1;
         
          }

          if ($request->hasFile('image1')) {
            $file1 = $request->file('image1');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images1/', $filename1);
            $images->image1 = $filename1;
         
          }
          if ($request->hasFile('image2')) {
            $file1 = $request->file('image2');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images2/', $filename1);
            $images->image2 = $filename1;
         
          }
          if ($request->hasFile('image3')) {
            $file1 = $request->file('image3');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images3/', $filename1);
            $images->image3 = $filename1;
         
          }
          if ($request->hasFile('image4')) {
            $file1 = $request->file('image4');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images4/', $filename1);
            $images->image4 = $filename1;
         
          }
          if ($request->hasFile('image5')) {
            $file1 = $request->file('image5');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images5/', $filename1);
            $images->image5 = $filename1;
         
          }
          if ($request->hasFile('image6')) {
            $file1 = $request->file('image6');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images6/', $filename1);
            $images->image6 = $filename1;
         
          }
          if ($request->hasFile('image7')) {
            $file1 = $request->file('image7');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images7/', $filename1);
            $images->image7 = $filename1;
         
          }
          if ($request->hasFile('image8')) {
            $file1 = $request->file('image8');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images8/', $filename1);
            $images->image8 = $filename1;
         
          }

          if ($request->hasFile('image9')) {
            $file1 = $request->file('image9');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images9/', $filename1);
            $images->image9 = $filename1;
         
          }

         $images->save();

        
        return redirect()->back()->with('success', 'image updated successfully.');

    }

    public function delete_images(Request $request)
    {
        $images = Images::find($request->id);
        $images->delete();
        return response()->json(['success', true]);
    }
    public function addImage(Request $request, $id)
    {
      
        $category = Categories::find($id);
        
        // Validate the image uploads
        $request->validate([
            'new_images.*' => 'required|image', // Allow only image files
        ]);
        // dd($request->all());
        $images = json_decode($category->images, true) ?? [];
    
        // Handle each file upload
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $image) {
                $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                
                // Store the image in the 'CategoryImages' directory
                $image->move(public_path('CategoryImages'), $imageName);
                
                // Append the new image to the array
                $images[] = $imageName;
            }
            
            // Update the images in the database
            $category->images = json_encode($images);
            $category->save();
            
            return redirect()->back()->with('success', 'Images added successfully!');
        }
    
        return redirect()->back()->with('error', 'Failed to upload images.');
    }
    


public function manage_videos(Request $request)
       
    {
        $data = Videos::all();
        // \Log::info($data);
        if($request->ajax()){
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('image', function($row){
                $image = '<img src="' . asset("Images/" . $row->image) . '" width="80px">';
                return $image;
            } )
            ->addColumn('action', function($row){
                $btn = ' <a data-bs-toggle="modal" href="#editModal' . $row->id . '">✏️</a>';
                $btn = $btn . '<a href="javascript:void(0);" id="' . $row->id . '" class="delete btn ml-3 btn">🗑️</a>';
                return $btn;
            })
            ->rawColumns(['action', 'image'])
            ->make(true);
        }
        return view('admin.manage-videos', compact('data'));
       
    }
    
    public function save_videos(Request $request) 
    {
        
        $request->validate([
            'image' => 'required',
            'name' => 'required',
            'iframe1' => 'required'
        ]);

        // Create a new gallery instance and fill it with the validated data
        $videos = new Videos();
        $videos->name = $request->input('name');
        $videos->iframe1 = $request->iframe1;
        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images/', $filename1);
            $videos->image = $filename1;
         
          }
        if($request->iframe2){
            $videos->iframe2 = $request->iframe2;
        }
        if($request->iframe3){
            $videos->iframe3 = $request->iframe3;
        }
        if($request->iframe4){
            $videos->iframe4 = $request->iframe4;
        }
        if($request->iframe5){
            $videos->iframe5 = $request->iframe5;
        }
        if($request->iframe6){
            $videos->iframe6 = $request->iframe6;
        }
        if($request->iframe7){
            $videos->iframe7 = $request->iframe7;
        }
        if($request->iframe8){
            $videos->iframe8 = $request->iframe8;
        }
        if($request->iframe9){
            $videos->iframe9 = $request->iframe9;
        }
        if($request->iframe10){
            $videos->iframe10 = $request->iframe10;
        }
          
        
        $videos->save();

        
        return redirect()->back()->with('success', 'category created successfully.');


    }
    
    public function update_videos(Request $request ,$id)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'iframe1'=>'required'
        ]);

        // Create a new gallery instance and fill it with the validated data
        $videos = Videos::find($id);
        $videos->name = $request->input('name');
        if ($request->hasFile('image')) {
            $file1 = $request->file('image');
            $ext1 = $file1->getClientOriginalExtension();
            $filename1 = time() . '.' . $ext1;
            $file1->move('Images/', $filename1);
            $videos->image = $filename1;
         
          }
        $videos->iframe1 = $request->iframe1;
        if($request->iframe2){
            $videos->iframe2 = $request->iframe2;
        }
        if($request->iframe3){
            $videos->iframe3 = $request->iframe3;
        }
        if($request->iframe4){
            $videos->iframe4 = $request->iframe4;
        }
        if($request->iframe5){
            $videos->iframe5 = $request->iframe5;
        }
        if($request->iframe6){
            $videos->iframe6 = $request->iframe6;
        }
        if($request->iframe7){
            $videos->iframe7 = $request->iframe7;
        }
        if($request->iframe8){
            $videos->iframe8 = $request->iframe8;
        }
        if($request->iframe9){
            $videos->iframe9 = $request->iframe9;
        }
        if($request->iframe10){
            $videos->iframe10 = $request->iframe10;
        }
          

         $videos->save();

        
        return redirect()->back()->with('success', 'videos updated successfully.');

    }
    
    public function delete_videos(Request $request)
    {
        $videos = Videos::find($request->id);
        $videos->delete();
        return response()->json(['success', true]);
    }
    
    
    
}
