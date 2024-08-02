<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function test(){
        // lấy ra toàn bộ dữ liệu 
        // $posts = Post::all();
        // // lấy 1 bản ghi 
        // $posts = Post::all()->first();
        // // lấy dữ liệu theo điều kiện 
        // $posts = Post::query()->where('cate_id', 1)->get();
        // // tìm dữ liệu gần đúng 
        // $posts = Post::query()->where('title', 'LIKE', '%aut%')->get();

        // sử dụng hàm sum, count, avg,...
        // $sum = Post::query()->sum('view');
        // return $sum;
        // thêm dữ liệu 
        // $data = [
        //     'title'=> fake()->text(25),
        //     'image' => fake()->imageUrl(),
        //     'description'=> fake()->text(30),
        //     'content'=> fake()->paragraph(25),
        //     'view'=> rand(10, 100),
        //     'cate_id'=> rand(1, 4),
        // ];
        // Post::query()->create($data);
        // // sử dụng đối tượng
        // $post = new Post();
        // $post ->title = fake()->text(25);
        // $post ->image = fake()->imageUrl();
        // $post ->description = fake()->text(30);
        // $post ->content = fake()->paragraph(25);
        // $post ->view = rand(10, 100);
        // $post ->cate_id = rand(1, 4);
        // $post ->save();
        
        Post::find(101)->update([
            'title' =>'Update data'
        ]) ;

        $posts = Post::orderByDesc('id')->get();
        // return view('posts');
        
        return $posts;
    }
    public function index(){
        $posts = Post::paginate(10);
        return view('posts', compact('posts'));
    }
    // hiển thị form thêm mới
    public function create(){
        $categories = Category::all();
        return view('admin.posts.create', compact('categories'));
    }
    // lưu dữ liệu 
    public function store(Request $request){
        $data = $request->except('image'); // hàm except để loại bỏ key image 
        $data['image'] = ''; // trường họp người dùng không up ảnh
        // nếu người dùng nhập ảnh
        if($request->hasFile('image')){
            $path_image = $request->file('image')->store('image');
            $data['image'] = $path_image;
        }
        // lưu dữ liệu 
        Post::query()->create($data);
        return redirect()->route('post.index')->with('message', 'Thêm dữ liệu thành công');
    }

    public function destroy(Post $post){
        $post->delete();
        return redirect()->route('post.index')->with('message', 'Xóa dữ liệu thành công');
    }
    // hiển thị form edit
    public function edit( Post $post){
        $categories = Category::all();
        return view('admin.posts.edit', compact('categories', 'post'));
    }
    // lưu dữ liệu cập nhật 
    public function update(Request $request, Post $post){
        // dd($request->all());
        $data= $request->except('image');

        $old_image = $post->image;
        // nếu không cập nhật ảnh 
        $data ['image']= $old_image;
        // nếu cập nhật 
        if($request->hasFile('image')){
            $path_image = $request->file('image')->store('image');
            $data['image'] = $path_image;
        }

        // lưu vào data
        $post->update($data);

        // xóa ảnh cũ 
        if(isset($path_image)){
            if(file_exists('storage/' . $old_image)){
                unlink('storage/' . $old_image);
            }
        }

        return redirect()->back()->with('message', 'Cập nhật dữ liệu thành công');
    }
}
