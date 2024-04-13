<?php

namespace App\Livewire;

use App\Models\Vendor;
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
                'companyName' => 'required|string',
                'firmType' => 'required|string',
                'businessType' => 'required|string',
                'unitServing' => 'required|string',
                'email' => 'required|email',
                'landlineNumber' => 'nullable|string',
                'gstRegistered' => 'required|boolean',
                'gstNumber' => 'nullable|string',
                'gstPayerStatus' => 'nullable|string',
                'msmeRegistered' => 'required|boolean',
                'drugLicenseNumber' => 'nullable|string',
                'panNumber' => 'nullable|string',
            ]);            
        }
        elseif($this->currentStep == 2){
            $this->validate([
                'pincode' => 'required|string',
                'city' => 'nullable|string',
                'state' => 'nullable|string',
                'country' => 'nullable|string',
                'address' => 'nullable|string',
                'contactPerson' => 'required|string',
                'mobileNumber' => 'nullable|string',
                'contactEmail' => 'nullable|email',
            ]);            
        }
        elseif($this->currentStep == 3){
            $this->validate([
                'bankName' => 'required|string',
                'branch' => 'nullable|string',
                'ifscCode' => 'nullable|string',
                'cityTown' => 'nullable|string',
                'accountHolderName' => 'required|string',
                'accountNumber' => 'required|string',
                'accountType' => 'nullable|string',
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
                'vendorCategory' => 'required|string',
                'productsServices' => 'nullable|string',
                'documentListing' => 'nullable|array',
                'declaration' => 'required|boolean',
            ]);

            try {

                $data = [
                    'companyName' => $this->companyName,
                    'email' => $this->email,
                    'address' => $this->address,
                    'city' => $this->city,
                    'state' => $this->state,
                    'country' => $this->country,
                    'pincode' => $this->pincode,
                    'firmType' => $this->firmType,
                    'businessType' => $this->businessType,
                    'contactPerson' => $this->contactPerson,
                    'mobileNumber' => $this->mobileNumber,
                    'landlineNumber' => $this->landlineNumber,
                    'contactEmail' => $this->contactEmail,
                    'unitServing' => $this->unitServing,
                    'gstRegistered' => $this->gstRegistered,
                    'gstNumber' => $this->gstNumber,
                    'gstPayerStatus' => $this->gstPayerStatus,
                    'panNumber' => $this->panNumber,
                    'msmeRegistered' => $this->msmeRegistered,
                    'drugLicenseNumber' => $this->drugLicenseNumber,
                    'bankName' => $this->bankName,
                    'branch' => $this->branch,
                    'cityTown' => $this->cityTown,
                    'accountHolderName' => $this->accountHolderName,
                    'accountNumber' => $this->accountNumber,
                    'accountType' => $this->accountType,
                    'vendorCategory' => $this->vendorCategory,
                    'productsServices' => $this->productsServices,
                    'documentListing' => $this->documentListing,
                    'declaration' => $this->declaration,
                    // Add more fields as needed
                ];

                Vendor::create($data);

                //send success message
                session()->flash('success', 'Vendor registered successfully.');

            } catch (\Throwable $th) {
                //throw error
                session()->flash('error', 'Error occurred while registering vendor. Please try again.');
                throw $th;
            }
            
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
