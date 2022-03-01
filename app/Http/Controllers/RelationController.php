<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Image;
use App\Models\hospital;
use App\Models\doctor;
use resources\views\doctors\hospitals;
use resources\views\doctors\doctors;
use App\Models\Service;





use Illuminate\Http\Request;

class RelationController extends Controller
{

########### Begin one to one relationship ###########

    public function getImage(){

        $post = Post::find(1);
        // $p = Post::where('id',2)->first();
        // return view('/article',[
        // 'post'=>$post,
        // 'linkedIn'=>$p]);


        // $post = Post::with(['image'=> function($q){
        //     $q->select('path','post_id');
        // }])->find(1);
        // return response()->json($post);

        return $post->content;
    

        
        }

        public function getPost(){

            // $img = Image::find(2);
            // return $img->post-> content;
           

            $img = Image::with('post')->find(2);
           
            return response()->json($img->post->content);


            // $img->makeVisible(['post_id']);
            // $img->makeHidden(['path']);

            // return response()->json($img); //return $img;
        }

        public function getPostHasImg(){

           return Post::whereHas('image') ->get();

           

        
}


public function getPostNotHasImg(){
    return Post::whereDoesntHave('image')->get();

}

public function getPostHasImgWithCondition(){
    return Post::whereHas('image',function($q){
        $q->where('id','2');
    }) ->get();
}

########### End one to one relationship ###########




########### Begin one to many relationship ###########

public function getHospitalDoctor(){
    // $hospital =  hospital::with('doctors')->find(1);

    // $doctors = $hospital->doctors;

    // foreach($doctors as $doctor){
    //     echo $doctor->name.'<br>'; 
    // }

    $doctor = doctor::find(3);

   return $doctor->hospital->name;

}


public function hospitals(){
    $hospitals = hospital::all();
   // $hospitals = hospital::select('id','name','address')->get();
    return view('doctors.hospitals',compact('hospitals'));
}


public function doctors($hospital_id){

   /* $hospital = hospital::find($hospital_id);

   $doctors = $hospital -> doctors; */
   $doctors = doctor::where('hospital_id' , $hospital_id)->get();
   return view('doctors.doctors',compact('doctors'));


}

//get all hospital must has doctors

public function getHospitalHasDoctors(){
    return hospital::whereHas('doctors') ->get();

}

public function getHospitalNotHasDoctors(){
    return hospital ::whereDoesntHave('doctors')->get();
}

########### End one to many relationship ###########




public function deleteHospital($hospital_id){
    $hospital = hospital::find($hospital_id);
    
    if(!$hospital)
       return abort('404');

    //delete doctors in this hospital
    $hospital -> doctors()->delete();

    //delete this hospital
    $hospital ->delete();

    return redirect()->route('hospital.all');
}


########### Begin Many to Many relationship ###########

public function getDoctorServices(){

    $doctor = doctor::with('services')->get();
    return $doctor;

}

public function getServiceDoctors(){

    $service = Service::with(['doctors'=> function($q){
        $q->select('name','title');
    }])->find(1);
    return $service; 
}





########### End Many to Many relationship ###########



}
