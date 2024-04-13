<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class VendorHandler extends Component
{
    use WithFileUploads;

    public $totalSteps = 4;
    public $currentStep = 1;

    public $date_of_birth;
    public $cities = [];
    public $disableAlternativeMobile;
    public $list_of_locations = [];
    public $languages = [];
    public $source_of_hire;
    public $states_list = [];

    public $email;
    public $companyName;
    public $address;
    public $city;
    public $state;
    public $country;
    public $pincode;
    public $firmType;
    public $businessType;
    public $contactPerson;
    public $mobileNumber;
    public $landlineNumber;
    public $contactEmail;
    public $unitServing;
    public $gstRegistered;
    public $bankName;
    

    public function mount(){
        $this->currentStep = 1;
    }

    public function increaseStep(){
        $this->resetErrorBag();
        $this->validateData();
         $this->currentStep++;
         if($this->currentStep > $this->totalSteps){
             $this->currentStep = $this->totalSteps;
         }
    }

    public function validateData(){

        if($this->currentStep == 1){
            $this->validate([
                'companyName'=>'nullable',
            ]);
        }
        elseif($this->currentStep == 2){
              $this->validate([
                'address'=>'nullable',
              ]);
        }
        elseif($this->currentStep == 3){
              $this->validate([
                'bankName'=>'nullable',
              ]);
        }
    }

    public function decreaseStep(){
        $this->resetErrorBag();
        $this->currentStep--;
        if($this->currentStep < 1){
            $this->currentStep = 1;
        }
    }

    public function register(){
        $this->resetErrorBag();
        if($this->currentStep == 4){
            $this->validate([
                'vendorCategory' => 'nullable',
            ]);
        }

        $cv_name = 'CV_'.time().$this->cv->getClientOriginalName();
        $upload_cv = $this->cv->storeAs('students_cvs', $cv_name);

        if($upload_cv){
            $values = array(
                "first_name"=>$this->first_name,
                "last_name"=>$this->last_name,
                "gender"=>$this->gender,
                "email"=>$this->email,
                "phone"=>$this->phone,
                "country"=>$this->country,
                "city"=>$this->city,
                "frameworks"=>json_encode($this->frameworks),
                "description"=>$this->description,
                "cv"=>$cv_name,
            );

            // Vendor::insert($values);
          //   $this->reset();
          //   $this->currentStep = 1;
          $data = ['name'=>$this->first_name.' '.$this->last_name,'email'=>$this->email];
          return redirect()->route('registration.success', $data);
        }
  }

    public function render()
    {
        return view('livewire.vendor-handler')->layout('layouts.app');
    }

    public function store()
    {
        
    }
}
