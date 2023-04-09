<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;


class DbDataController extends Controller {

    public function dbDataSelect (Request $request){
        $SQL = "SELECT * FROM dbdata";
        $request = DB::select($SQL);
        return $request;
    }

    public function dbDataCreate(Request $request){

        $name = $request->input('Name');
        $address = $request->input('Address');
        $maritalStatus = $request->input('MaritalStatus');
    
        $SQL = "INSERT INTO dbdata(Name, Address, MaritalStatus) VALUES (?,?,?)";
        $resutl = DB::insert($SQL,[$name,$address,$maritalStatus]);
        
        if($resutl){
            return "Create succusful";
        }else{
            return "Create failed";
        }

    }

    public function dbDataUpdate(Request $request){
        $name = $request->input("Name");
        $address = $request->input("Address");
        $maritalStatus = $request->input("MaritalStatus");
        $id = $request->input("Id");
        $SQL = "UPDATE dbdata SET Name =?, Address =?, MaritalStatus =? WHERE Id=?";
        $resutl = DB::update($SQL,[$name,$address,$maritalStatus,$id]);

        if($resutl){
            return "Update Succesful";
        }else{
            return "Update failed";
        }
    }

    public function dbDataDelete(Request $request){

        $id = $request->input('Id');
        $SQL = "DELETE FROM dbdata WHERE id = ?";
        $resutl = DB::delete($SQL,[$id]);

        if($resutl){
            return "Delete Succesful";
        }else{
                return "Delete failed";
            }

    }
}