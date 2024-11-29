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
                'seo_title' => 'nullable|max:100',
                'seo_description' => 'nullable|max:100',
                'seo_keywords' => 'nullable|max:100',
                'copyright' => 'nullable',
                'working_time' => 'nullable',
                'header_top' => 'nullable',
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
                'seo_title' => 'Tiêu đề seo',
                'seo_description' => 'Mô tả seo',
                'seo_keywords' => 'Từ khóa seo',
                'copyright' => 'Copyright',
                'working_time' => 'Thời gian làm việc',
                'header_top' => 'Tiều đề đầu trang',
            ]
        );

        $this->contactService->update();

        return back();
    }
}
