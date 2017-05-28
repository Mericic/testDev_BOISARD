<?php

namespace App\Repositories;

use App\Profile;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Input;

class ProfileRepository{

    protected $profile;

    public function __construct(Profile $profile)
    {
        $this->profile = $profile;
    }

    public function getData()
    {
        return $this->profile->paginate();
    }

    public function store(array $input){
        $input['image']->store(config('images.path'), 'public');
        $input['image']='storage/'.$input['image']->hashName();
        return $this->profile->create($input);
    }

    public function update(Profile $profile, Array $input)
    {
        if(array_key_exists('image', $input)){//On teste si l'utilisateur a saisi une nouvelle image
            $input['image']->store(config('images.path'), 'public');
            $input['image']='storage/'.$input['image']->hashName();
            $profile->update($input);
        }else
            $profile->update(Input::except('image'));
    }

    public function destroy(Profile $profile){

        $profile->delete();
    }
}