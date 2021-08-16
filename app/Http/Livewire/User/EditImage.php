<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class EditImage extends Component
{
    use WithFileUploads;
    public $image;
    public function profileUpload(){
        
        $this->validate(['image' => ['required','image','max:10240']]);


        if($this->image){
            if(auth()->user()->profile_image){
                Storage::delete('/public/profileImages/'.auth()->user()->profile_image);
            }
            $image = $this->storeImage();
            auth()->user()->update(['profile_image'=> $image]);
            if(auth()->user()->isA('user'))
                return redirect(route('users.viewProfile',auth()->user()->id));
            elseif(auth()->user()->isA('phi'))
                return redirect(route('phi.viewProfile',auth()->user()->id));
            else    
                return redirect(route('admin.viewProfile',auth()->user()->id));
            }
    }

    public function storeImage(){
        if(!$this->image){
            return null;
        }
        
            $filename = $this->image->getClientOriginalname();
            $this->image->storeAs('public/profileImages',$filename);
            return $filename;
        
    }


    public function render()
    {
        return view('livewire.user.edit-image');
    }
}
