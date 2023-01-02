<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\subcategories;
use App\Models\files;

class albumcontroller extends Controller
{
    // home page album controll
    // public function album(){
    //     $categories = categories::All();

    //     return view('Album/album',compact('categories'));
        
    // }

    public function index(){
        $data = categories::all();
        $posts = files::orderBy('id', 'DESC')->limit(5)->get();
        return view('Album/album',['data'=>$data,'posts'=>$posts]);
    }
    function showfolder(){
        $data = categories::all();
        return view('admin/categorylist',['data'=>$data]);
    }
    function showsubfolder(){
        $data = subcategories::all();
        return view('admin/subcategorylist',['data'=>$data]);
    }
    function showsubgallery($id){
        $data = subcategories::where('folder_id',$id)->get();
        return view('album/subgallery',['data'=>$data]);
    }
   
    function fileshow($id){
        $dataa = subcategories::all();
        $data = files::where('subfolder_id',$id)->paginate(8);
        return view('album/gallery',['data'=>$data,'dataa'=>$dataa]);
    }
    public function addFolder(Request $req){
        $fname = $req->get('name');
        $img= $req->file('fileName')->getClientOriginalName();
        //move uploaded file
        $req->fileName->move(public_path('images'),$img);

        $prod= new categories();
        $prod->folderName=$fname;
        $prod->foldImage=$img;
        $prod->save();


        return redirect()->route('admin');
    }
    public function addsubFolder(Request $req){
        $cname=$req->get('select');
        $fname = $req->get('name');
        $img= $req->file('fileName')->getClientOriginalName();
        //move uploaded file
        $req->fileName->move(public_path('images'),$img);
       // $id = $req->route('id');
       
        $id=categories::where('folderName',$cname)->first()->id;
        
        $prod= new subcategories();
        $prod->subfolderName=$fname;
        $prod->fileImage=$img;
        $prod->folder_id=$id;
        $prod->save();


        return redirect()->route('admin');
    }
    public function addFile(Request $req){
        $images=array();
        if($files=$req->file('fileName')){
            foreach($files as $file){
                $name=$file->getClientOriginalName();
                $file->move(public_path('images'),$name);
                $images=$name;
                $cname=$req->get('select');
                $fid=categories::where('folderName',$cname)->first()->id;
        
                $sname=$req->get('selecct');
                $sid=subcategories::where('subfolderName',$sname)->first()->id;
        
        
                $prod= new files();
                $prod->fileImage=$images;
                $prod->folder_id=$fid;
                $prod->subfolder_id=$sid;
                $prod->save();
            }
        }
       


        return redirect()->back();
    }
    public function Sub()
    {
        $data = categories::all();
        return view('admin/addsubcategory',['data'=>$data]);
    }
    public function Subcat()
    {
        $data = categories::all();
        $data1 = subcategories::all();
        return view('admin/addphoto',['data'=>$data,'data1'=>$data1]);
    }
    public function admindashboard(){
        return view('admin/admindashboard');
    }
    public function delete($id)
    {
        $stock = files::find($id);
        $stock->delete(); 
 
        return redirect()->back()->with('error','Data Deleted');  // -> resources/views/stocks/index.blade.php
    } 
    public function edit(Request $req, $id){
        $prod = files::find($id);
        $img= files::where('id',$id)->first()->fileImage;
        
        $cname=$req->get('select');
        $fid=categories::where('folderName',$cname)->first()->id;

        $sname=$req->get('selectt');
        $sid=subcategories::where('subfolderName',$sname)->first()->id;
        $stock = files::find($id);
         
        $prod= new files();
        
        $prod->folder_id=$fid;
        $prod->subfolder_id=$sid;
        $prod->fileImage=$img;
        $prod->save();
        
        $stock->delete(); 
        return redirect()->route('home');
    }
    function editfile($id){
        $ite = files::where('id',$id)->first()->folder_id;
        $it = files::where('id',$id)->first()->subfolder_id;
        $file=files::where('id',$id)->get();
        $item= categories::where('id',$ite)->get();
        $itemm= subcategories::where('id',$it)->get();
        $data = categories::all();
        $data1 = subcategories::all();
        return view('Album/modalgallery',['item'=>$item,'itemm'=>$itemm,'file'=>$file,'data'=>$data,'data1'=>$data1]);
    }
   
    public function search(Request $request){
        $search = $request->get('search');
        
        $posts = subcategories::query()->where('subfolderName', 'LIKE', "%{$search}%")
        
        ->get();
        
            $post = subcategories::all();
        
        
    return view('album/sub', ['posts'=>$posts,'post'=>$post]);
}

    
}
