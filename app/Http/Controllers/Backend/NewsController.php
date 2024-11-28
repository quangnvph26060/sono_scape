<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request()->ajax()) {
            return datatables()->of(News::withoutGlobalScope('published')->get())
                ->addColumn('status', function ($row) {
                    return '
                    <div class="radio-container">
                        <label class="toggle">
                            <input type="checkbox" class="status-change update-status" data-id="' . $row->id . '" ' . ($row->status == 'published' ? 'checked' : '') . '>
                            <span class="slider"></span>
                        </label>
                    </div>
                ';
                })
                ->addColumn('subject', function ($row) {
                    return '<a href="' . route('admin.news.edit', $row) . '" class="two-lines" aria-label="' . $row->subject . '">' . $row->subject . '</a>';
                })
                ->addColumn('posted_at', function ($row) {
                    return \Carbon\Carbon::parse($row->posted_at)->format('d/m/Y') . ' - ' . \Carbon\Carbon::parse($row->posted_at)->locale('vi')->diffForHumans();
                })
                ->addColumn('created_at', function ($row) {
                    return \Carbon\Carbon::parse($row->created_at)->format('d/m/Y') . ' - ' . \Carbon\Carbon::parse($row->created_at)->locale('vi')->diffForHumans();
                })
                ->addColumn('action', function ($row) {
                    return '
                        <div class="btn-group">
                           <button class="btn btn-danger btn-sm delete-btn" data-url="' . route('admin.news.destroy', $row) . '">    <i class="fas fa-trash-alt"></i></button>
                        </div>
                    ';
                })
                ->rawColumns(['status', 'action', 'subject'])
                ->addIndexColumn()
                ->make(true);
        }
        return view('backend.news.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.news.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $credentials = $request->validate([
            'subject' => 'required|max:100|unique:sgo_news,subject',
            'summary' => 'required',
            'article' => 'required',
            'seo_description' => 'nullable',
            'status' => 'required|in:published,unpublished',
            'seo_keywords' => 'nullable',
            'featured_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'posted_at' => 'required|date_format:Y-m-d H:i|after:today',
        ], __('request.messages'), [
            'subject' => 'Tiêu đề',
            'summary' => 'Tóm tắt',
            'article' => 'Nội dung',
            'seo_description' => 'Mô tả seo',
            'status' => 'Trạng thái',
            'seo_keywords' => 'Từ khóa seo',
            'featured_image' => 'Ảnh đại diện',
            'posted_at' => 'Ngày đăng',
        ]);

        if ($request->hasFile('featured_image')) {
            $credentials['featured_image'] = saveImage($request, 'featured_image', 'news');
        }

        News::create($credentials);

        toastr()->success('Thêm bài viết thành công');

        return redirect()->route('admin.news.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $news = News::withoutGlobalScope('published')->findOrFail($id);

        return view('backend.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $news = News::withoutGlobalScope('published')->findOrFail($id);

        $credentials = $request->validate([
            'subject' => 'required|max:100|unique:sgo_news,subject,' . $news->id,
            'summary' => 'required',
            'article' => 'required',
            'seo_description' => 'nullable',
            'status' => 'required|in:published,unpublished',
            'seo_keywords' => 'nullable',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'posted_at' => 'required|date_format:Y-m-d H:i|after:today',
        ], __('request.messages'), [
            'subject' => 'Tiêu đề',
            'summary' => 'Tóm tắt',
            'article' => 'Nội dung',
            'seo_description' => 'Mô tả seo',
            'status' => 'Trạng thái',
            'seo_keywords' => 'Từ khóa seo',
            'featured_image' => 'Ảnh đại diện',
            'posted_at' => 'Ngày đăng',
        ]);

        if ($request->hasFile('featured_image')) {
            deleteImage($news->featured_image);
            $credentials['featured_image'] = saveImage($request, 'featured_image', 'news');
        }

        $news->update($credentials);

        toastr()->success('Chỉnh sửa bài biết thành công.');

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        $news->delete();

        deleteImage($news->featured_image);

        return response()->json([
            'status' => true
        ]);
    }

    public function changeStatus(Request $request)
    {
        $news = News::withoutGlobalScope('published')->find($request->id);

        if (!$news) {
            return response()->json([
                'status' => false,
            ]);
        }

        $news->status = 'published' == $news->status ? 'unpublished' : 'published';
        $news->save();

        return response()->json([
            'status' => true
        ]);
    }
}
