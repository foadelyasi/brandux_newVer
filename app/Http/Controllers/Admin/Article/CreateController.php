<?php

namespace App\Http\Controllers\Admin\Article;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CreateController extends Controller
{

    public function index(){
        $articles=Article::latest()->paginate(10);
        return view('Admin.Article.index',compact('articles'));
    }
   public function create(){

       $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
       return view('Admin.Article.create',compact('categories'));
   }

   public function edit(Article $article){

       $categories=Category::with('childrenRecursive')->where('parent_id',null)->get();
       return view('Admin.Article.edit',compact('categories','article'));
   }

   public function store(Request $request){

       $this->validate($request,[
           'title'=>'required',
           'category_id'=>'required','description'=>'required',
           'meta_description'=>'required',
           'image'=>'required|image|max:1024|mimes:jpg,png,jpeg',
           'imagethumb'=>'required|image|max:300|mimes:jpg,png,jpeg',
       ]);
       $keywords=serialize(explode(",",$request->meta_keywords));

       if ($request->slug==null){
           $slug=make_slug($request->title);
       }else{
           $slug=make_slug($request->slug);
       }
       $rand=rand('0','480');
       $IMGname=date('YmdHi').'_'.'article'.$rand.'.'.$request->image->extension();
       $request->image->storeAs('upload/articles',$IMGname,'public');

       $IMGTHname=date('YmdHi').'_'.'articleTH'.$rand.'.'.$request->imagethumb->extension();
       $request->imagethumb->storeAs('upload/articles',$IMGTHname,'public');

       Article::create([
           'title'=>$request->title,
           'category_id'=>$request->category_id,
           'description'=>$request->description,
           'meta_description'=>$request->meta_description,
           'slug'=>$slug,
           'meta_keywords'=>$keywords,
           'image'=>$IMGname,
           'imagethumb'=>$IMGTHname,
       ]);

       session()->flash('add_article','مطلب مورد نظر با موفقیت اضافه شد');
       return back();

   }

   public function update(Article $article,Request $request){

       $val=$this->validate($request,[
           'title'=>'required',
           'category_id'=>'required','description'=>'required',
           'meta_description'=>'required',
           'image'=>'required|image|max:1024|mimes:jpg,png,jpeg',
           'imagethumb'=>'required|image|max:300|mimes:jpg,png,jpeg',
       ]);



       $newData=$request->all();
       $rand=rand('0','480');
       if ($request['image']){
           $path='/upload/articles/'.$article['image'];
           Storage::delete($path);
           $IMGname=date('YmdHi').'_'.'article'.$rand.'.'.$request->image->extension();
           $request->image->storeAs('upload/articles',$IMGname,'public');
       }else{
           $newData['image']=$article['image'];
       }

       if ($request['imagethumb']){
           $path='/upload/articles/'.$article['imagethumb'];
           Storage::delete($path);
           $IMGTHname=date('YmdHi').'_'.'article'.$rand.'.'.$request->imagethumb->extension();
           $request->imagethumb->storeAs('upload/articles',$IMGTHname,'public');
       }else{
           $newData['imagethumb']=$article['imagethumb'];
       }

       if ($request['meta_keywords']){
           $newData['meta_keywords']=serialize(explode(",",$request->meta_keywords));
       }else{
           $newData['meta_keywords']=$article['meta_keywords'];
       }

       $article->update($newData);
       session()->flash('update_article','مقاله ی مورد نظر با موفقیت اپلود شد');
       return back();

   }

   public function delete(Article $article){
       if ($article['image']){
           $path='/upload/articles/'.$article['image'];
           Storage::delete($path);
       }

       if ($article['imagethumb']){
           $path='/upload/articles/'.$article['imagethumb'];
           Storage::delete($path);
       }

       $article->delete();

       session()->flash('delete_article','مقاله با موفقیت حذف شد');

       return back();
   }

    public function upload(Request $request)
    {

        if (!$request->has('upload')) {
            return response()->json(['message' => 'Missing file'], 422);
        }


//            $originName = $request->file('upload')->getClientOriginalName();
//            $fileName = pathinfo($originName, PATHINFO_FILENAME);
//            $extension = $request->file('upload')->getClientOriginalExtension();
//            $fileName = $fileName . '_' . time() . '.' . $extension;

//            $request->file('upload')->move(public_path('images'), $fileName);

            $rand=rand('0','480');
            $IMGname=date('YmdHi').'_'.'article'.$rand.'.'.$request->file('upload')->extension();
            $request->file('upload')->storeAs('upload/articles',$IMGname,'public');

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('/storage/upload/articles' . $IMGname);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }


}
