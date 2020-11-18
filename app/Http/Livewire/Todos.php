<?php

namespace App\Http\Livewire;

use App\Models\Todo;
use Livewire\Component;

class Todos extends Component
{
    public $todos = [];
    public $title;
    public $when;
    public $remarks;
    public $order = 1;
    public $is_active = true;
    public $updateMode = false;
    public $orderBy = 'order';

    protected $rules = [
      'title' => 'required',
    ];


    public function getTodos()
    {
      $this->todos = Todo::orderBy($this->orderBy, 'desc')->get();
    }

    public function render()
    {
      return view('livewire.todos.index');
    }
    
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->title = '';
        $this->remarks = '';
        $this->order = 1;
        $this->is_active = true;
        $this->when = '';
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create_todo()
    {
      $this->validate();

      $data = [
        'title' => $this->title,
        'when' => $this->when,
        'remarks' => $this->remarks,
        'order' => $this->order,
      ];
      $todo = Todo::create($data);

      session()->flash('message:create_todo', 'Todo Created Successfully');

      $this->resetInputFields();
      $this->getTodos();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->title = $post->title;
        $this->body = $post->body;
  
        $this->updateMode = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
  
        $post = Post::find($this->post_id);
        $post->update([
            'title' => $this->title,
            'body' => $this->body,
        ]);
  
        $this->updateMode = false;
  
        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
