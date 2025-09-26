<?php
    namespace App\Http\Controllers\Admin;

    use App\Http\Controllers\Controller;
    use App\Http\Requests\PostRequest;
    use App\Models\{Post,User};
    use Illuminate\Http\RedirectResponse;
    use Illuminate\Http\Request;
    use Illuminate\Support\Facades\{Auth,Redirect,Storage};
    use Illuminate\Support\Str;
    use Illuminate\View\View;

    class PostController extends Controller {
        public function index() {
            $user = Auth::user();
            $posts = Post::with('user')->where('user_id',$user->id)->orderBy('posts.created_at', 'DESC')->get();
            return \view ('admin/posts/index', compact('posts','user'));
        }

        public function create(){
            $user = Auth::user();
            return \view('admin/posts/create', compact('user'));
        }

        public function store(PostRequest $request) {
            $request->validated();
            $user = User::find($request->user_id);
            $slug = Str::slug($request->title);
            $post = new Post();
            if($request->hasFile('cover')) {
                $file = $request->file('cover');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/users/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
            }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category = $request->category;
            $post->cover = 'uploads/users/'.$user->id.'/'.$fileImg;
            $post->subject = $request->subject;
            $post->user_id = $user->id;
            $post->save();
            return Redirect::route('post.index')->with('success','Upload efetuado com sucesso!');
        }
        public function edit(Post $post): View {
            $user = Auth::user();
            return view('admin/posts/edit', compact('post','user'));
        }

        public function update(PostRequest $request, Post $post) {
            $request->validated();
            $user = $post->user;
            $fileImage = Post::first();
            $slug = Str::slug($request->title);
            if($request->hasFile('cover')) {
                if($fileImage->cover && file_exists(public_path($fileImage->cover))){
                    unlink(public_path($fileImage->cover));
                }
                $file = $request->file('cover');
                $fileImg = $user->id.'-'.$slug.'-'.rand(1,99).'.'.$file->getClientOriginalExtension();
                $request->user()->image = 'uploads/users/'.$user->id.'/'.$fileImg;
                $file->move(public_path('uploads/users/'.$user->id), $fileImg);
            }
            $post->title = $request->title;
            $post->slug = $slug;
            $post->category = $request->category;
            $post->cover = 'uploads/users/'.$user->id.'/'.$fileImg;
            $post->subject = $request->subject;
            $post->user_id = $user->id;
            $post->update();
            return Redirect::route('post.index')->with('success','Edição efetuada com sucesso!');
        }

        public function delete(): View {
            return view('admin/posts/delete');
        }

        public function destroy(Request $request): RedirectResponse {
            $request->validateWithBag('postDeletion', ['password' => ['required', 'current_password'],]);
            $post = Post::find($request->id);
            if($post->image) {Storage::disk('public')->delete($post->image);}
            $post->delete();
            return Redirect::to(route('post.index'))->with('success','Exclusão feita com sucesso!');
        }
    }
