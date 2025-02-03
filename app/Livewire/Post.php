<?php

namespace App\Livewire;

use App\Models\Post as ModelsPost;
use Livewire\Component;

class Post extends Component
{
    public $posts, $title, $body, $postId;
    public $updateMode = false;

    protected $listeners = ['deleteConfirmed'];

    public function render()
    {
        $this->posts = ModelsPost::all();
        return view('livewire.posts.index');
    }

    private function resetInputFields(){
        $this->title = '';
        $this->body = '';
    }

    public function save()
    {
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        ModelsPost::create($validated);
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'Post Created Successfully!'
        ]);
        $this->resetInputFields();
    }

    public function edit(ModelsPost $post)
    {
        $this->postId = $post->id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->updateMode = true;
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    public function update()
    {
        $validated = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $post = ModelsPost::find($this->postId);
        $post->update($validated);
        $this->updateMode = false;
        $this->dispatch('alert', [
            'type' => 'success',
            'message' => 'Post Updated Successfully!'
        ]);
        $this->resetInputFields();
    }

    public function delete(ModelsPost $post)
    {
        $this->dispatch('swal:confirm', [
            'type' => 'warning',
            'message' => 'Are you sure?',
            'text' => 'If deleted, you will not be able to recover this file!',
            'post' => $post
        ]);
    }

    public function deleteConfirmed(ModelsPost $post)
    {
        if($post){
            $post->delete();
            $this->dispatch('swal:deleted');
        }
    }
}
