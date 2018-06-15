<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Gallery;
use Storage;
use Image;

class GalleryController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $user = Auth::user();

        return view('gallery.index')->with('user',$user);
    }

    public function upload(Request $request)
    {

        ini_set('memory_limit','512M');
        $user = Auth::user();

    	$images = $request->file('file');



    	foreach ($images as $image) {
            //image name define
            $ext = $image->extension();
            $imageName = time().'_'.str_random(2).'.'.$ext;

            //image real path
            $img_realpath = $image->getRealPath();

            //real image
            $img = Image::make($img_realpath);
            $img->orientate();

            // backup status
            $img->backup();

            //oriantation correct and store
            $img->save(public_path('/storage/upload_images/').$imageName,80);

            // reset image (return to backup state)
            $img->reset();

            //create thumbanil image
            $img->fit(247);
            $img->resize(247, 247);
            $img->save(public_path('/storage/upload_images_thumb/').$imageName,80);
            

            //large image path & store
            // $path = Storage::putFileAs('public/upload_images/',$img,$imageName);

            //thumbanil image path & store
            // $destinationPath = public_path('/storage/upload_images_thumb');
            // $thumb_img->save($destinationPath.'/'.$imageName,80);

            //database save
	        $gallery = new Gallery;
	        $gallery->user_id = $user->id;
	        $gallery->image_path = $imageName;
	        $gallery->save();

            $path[] = public_path('/storage/upload_images/').$imageName;

	        // $upload_success = $image->move(public_path('upload_images'),$imageName);
	        
    	}


    	return response()->json($path, 200);
    }

    public function delete($id)
    {
    	$image = Gallery::find($id);
    	$delete_flag = Storage::delete('public/upload_images/'.$image->image_path);
        $delete_flag = Storage::delete('public/upload_images_thumb/'.$image->image_path);
    	$delete_flag = $image->delete();

    	if($delete_flag){
    		return redirect()->back()->with('success_tost','Image Deleted Successfully');
    	}
    	else{
    		return redirect()->back()->with('error_tost','Delete Error. Please Try Again');
    	}
    }

    public function update($id,$status)
    {
        $image = Gallery::find($id);

        if($status == 'hide')
        {
            $image->active = 0;
            $image->save();
            return redirect()->back()->with('success_tost','Image Hidden Successfully');
        }
        elseif($status == 'show'){
            $image->active = 1;
            $image->save();
            return redirect()->back()->with('success_tost','Image Activated Successfully');
        }
        else{
            return redirect()->back();
        }
    }
}
