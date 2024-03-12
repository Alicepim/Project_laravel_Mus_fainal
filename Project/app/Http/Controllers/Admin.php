<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Admin extends Controller
{
    //ดึงข้อมูล
    function dataCompany()
    {
        $dataCompany = Company::all();
        return view('customer', compact('dataCompany'));
    }
    function Datalist()
    {
        $companyAll = Company::all();
        return view('customer_data', compact('companyAll'));
    }

    function detailData($id)
    {
        $dataId = Company::find($id);
        return view('customer_detail', compact('dataId'));
    }


    //อัพโหลดข้อมูล
    function upload(Request $request)
    {
        $request->validate(
            [
                'cm_name' => 'required',
                'cm_phone' => 'required',
                'cm_full_name' => 'required',
                'cm_about_cm' => 'required',
                'cm_income' => 'required',
                'cm_img' =>  'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ],
        );
        if ($request->hasFile('cm_img')) {
            $image = $request->file('cm_img');
            $nameImg = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $nameImg);
        }
        DB::table('companies')->insert([
            'cm_name' => $request->cm_name,
            'cm_phone' => $request->cm_phone,
            'cm_full_name' => $request->cm_full_name,
            'cm_about_cm' => $request->cm_about_cm,
            'cm_income' => $request->cm_income,
            'cm_img' => 'image/' . $nameImg,
        ]);
        $dataCompany = Company::all();
        return view('customer', compact('dataCompany'));
    }

    //ลบข้อมูล
    function delete($id)
    {
        $data = Company::find($id);
        if ($data) {
            // ลบไฟล์รูปที่อยู่ใน public
            unlink(public_path($data->cm_img));
            $data->delete();
            $companyAll = Company::all();
            return view('customer_data', compact('companyAll'));
        }
    }

    //ดึงข้อมูลไปยังหน้า edit
    function edit($id)
    {
        $item = Company::find($id);
        return view('customer_edit', compact('item'));
    }


    //อัพเดทข้อมูลที่ถูกส่งมา
    function update(Request $request, $id)
    {

        $company = Company::find($id);
        $request->validate([
            'cm_name' => 'required',
            'cm_phone' => 'required',
            'cm_full_name' => 'required',
            'cm_about_cm' => 'required',
            'cm_income' => 'required',
            'cm_img' =>  'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // อัปโหลดรูปภาพใหม่ (ถ้ามี)
        if ($request->hasFile('cm_img')) {
            $image = $request->file('cm_img');
            $nameImg = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('image'), $nameImg);

            // ลบรูปเก่า (ถ้ามี)
            if ($company->post_img) {
                unlink(public_path($company->post_img));
            }

            // อัปเดตข้อมูล
            $company->update([
                'cm_name' => $request->cm_name,
                'cm_phone' => $request->cm_phone,
                'cm_full_name' => $request->cm_full_name,
                'cm_about_cm' => $request->cm_about_cm,
                'cm_income' => $request->cm_income,
                'cm_img' => 'image/' . $nameImg,
            ]);
            $companyAll = Company::all();
            return view('customer_data', compact('companyAll'));
        } else {
            // อัปเดตข้อมูล (ไม่มีการอัปโหลดรูป)
            $company->update([
                'cm_name' => $request->cm_name,
                'cm_phone' => $request->cm_phone,
                'cm_full_name' => $request->cm_full_name,
                'cm_about_cm' => $request->cm_about_cm,
                'cm_income' => $request->cm_income,
            ]);
            $companyAll = Company::all();
            return view('customer_data', compact('companyAll'));
        }
    }
}
