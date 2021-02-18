<?php

namespace App\Http\Controllers;


class postForm extends Controller
{
    public function store(){
        request()->validate([
            'nameCompany'=>['required'],
            'cifCompany'=>['required','regex:/^[0-9]{8}[A-Z|a-z]$/','unique:empreses,cif'],
            'directionCompany'=>'required',
            'poblationCompany'=>'required',
            'cpCompany'=>['required','numeric'],
            'tlf1Company'=>['required','numeric','digits:9'],
            'tlf2Company'=>['nullable','numeric','digits:9'],
            'faxCompany'=>['nullable','numeric','digits:9'],
            'emailCompany'=>['required','email'],
            'sector'=>'required',
            'mainActivity'=>'required',
            'ownership'=>'required',
            'nameCoord'=>'required',
            'nifCoord'=>['required','regex:/^[0-9]{8}[A-Z|a-z]$/','unique:coordinadors_fct,nif'],
            'nameTut'=>'required',
            'nifTut'=>['required','regex:/^[0-9]{8}[A-Z|a-z]$/','unique:tutors_empreses,nif'],
            'jobTut'=>'required',
            'nameRep'=>'required',
            'nifRep'=>['required','regex:/^[0-9]{8}[A-Z|a-z]$/','unique:representants,nif'],
            'jobRep'=>'required',
            'nameWorkCenter'=>['required'],
            'directionWorkCenter'=>'required',
            'poblationWorkCenter'=>'required',
            'cpWorkCenter'=>['required','numeric'],
            'tlf1WorkCenter'=>['required','numeric','digits:9'],
            'tlf2WorkCenter'=>['nullable','numeric','digits:9'],
            'faxWorkCenter'=>['nullable','numeric','digits:9'],
            'typeOfWorkingDay'=>'required',
            'schedule'=>'required'
        ]);
        return request();
    }
}
