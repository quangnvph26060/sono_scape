<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Backend\ContactService;

class ContactController extends Controller
{

    public function __construct(protected ContactService $contactService) {}

    public function show()
    {
        $data = $this->contactService->show();

        return view('backend.contact.show', compact('data'));
    }
    public function update(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => ['required', 'regex:/^0[0-9]{9}$/'],
                'company' => 'required',
                'address' => 'required',
                'fanpage' => 'required',
                'youtube' => 'required',
                'sort_description' => 'required|max:100',
                'map' => 'nullable',
                'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
                'company_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            ],
            __('request.messages'),
            [
                'name' => 'Chủ sở hữu',
                'email' => 'Email',
                'phone' => 'Số điện thoại',
                'company' => 'Tên công ty',
                'address' => 'Địa chỉ',
                'fanpage' => 'Fanpage',
                'youtube' => 'Youtube',
                'sort_description' => 'Mô tả ngắn',
                'map' => 'Bản đồ',
                'logo' => 'Logo',
                'icon' => 'Icon',
                'company_logo' => 'Logo công ty',
            ]
        );

        $this->contactService->update();

        return back();
    }
}
