<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SliderController extends Controller
{

    public function index()
    {
        $sliders = \App\Models\Slider::latest()->get();
        return view('backend.slider.index', compact('sliders'));
    }
    public function create($type)
    {
        $sliders = \App\Models\Slider::where('type', $type)->first();

        if ($type == 'image') {
            return view('backend.slider.create-image', compact('type', 'sliders'));
        }

        return view('backend.slider.create-video', compact('type', 'sliders'));
    }
    public function store(Request $request, $type)
    {
        switch ($type) {
            case 'image':
                return $this->storeImage($request, $type);
            case 'video':
                return $this->storeVideo($request, $type);
        }
    }

    private function storeImage(Request $request, $type)
    {
        $data = Validator::make($request->all(), [
            'slider' => 'required|array',
            'slider.*' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',

            'link' => 'nullable|array',
            'link.*' => 'nullable|url',

            'alt' => 'nullable|array',
            'alt.*' => 'nullable|string',

            'index' => 'required|array',
            'index.*' => 'integer',
        ], __('request.messages'));

        if ($data->fails()) {

            return response()->json([
                'status' => false,
                'message' => $data->errors()->first()
            ]);
        }


        if (empty($data->validated()['slider'])) {
            return response()->json([
                'status' => false,
                'message' => 'Vui lòng điền ít nhất 1 ảnh.'
            ]);
        }

        $credentials = $data->validated();

        $array = [];

        foreach ($credentials['slider'] as $key => $value) {
            $array[$key]['slider'] = $value->store('slider');
            $array[$key]['link'] = $credentials['link'][$key];
            $array[$key]['alt'] = $credentials['alt'][$key];
            $array[$key]['index'] = $credentials['index'][$key];
        }

        \App\Models\Slider::updateOrCreate([
            'type' => $type,
        ], [
            'items' => $array
        ]);

        return response()->json([
            'status' => true,
        ]);
    }

    private function storeVideo($request, $type)
    {
        $data = Validator::make($request->all(), [
            'links' => 'required|array',
            'links.*' => 'required',
        ], __('request.messages'));

        if ($data->fails()) {

            return response()->json([
                'status' => false,
                'message' => $data->errors()->first()
            ]);
        }

        $credentials = $data->validated();

        \App\Models\Slider::updateOrCreate([
            'type' => $type,
        ], [
            'items' => $credentials,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Thêm trình chiếu video thành công'
        ]);
    }
}
