<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;

class VendorHandler extends Component
{
    use WithFileUploads;

    public $totalSteps = 4;
    public $currentStep = 1;

    public $companyName;
    public $firmType;
    public $businessType;
    public $unitServing;
    public $email;
    public $landlineNumber;
    public $gstRegistered;
    public $gstNumber;
    public $gstPayerStatus;
    public $msmeRegistered;
    public $drugLicenseNumber;
    public $panNumber;
    public $pincode;
    public $city;
    public $state;
    public $country;
    public $address;
    public $contactPerson;
    public $mobileNumber;
    public $contactEmail;
    public $bankName;
    public $branch;
    public $ifscCode;
    public $cityTown;
    public $accountHolderName;
    public $accountNumber;
    public $accountType;
    public $vendorCategory;
    public $productsServices;
    public $documentListing;
    public $declaration;
    

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

        $data = ['companyName'=>$this->companyName.' '.$this->contactPerson,'mobileNumber'=>$this->mobileNumber];
        
  }

    public function render()
    {
        
        return view('livewire.vendor-handler')->layout('layouts.app');
    }

    public function store()
    {
        
    }
}
