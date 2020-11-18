
<form wire:submit.prevent="create_todo" class="w-full">
  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="title">
      title
    </label>
    <input wire:model="title" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="title" name="title" type="text" placeholder="title">
  </div>
  <div class="mb-4 flex flex-wrap -mx-3">

    <div class="w-full md:w-1/2 mb-4 md:mb-0 px-3">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="when">
        when
      </label>
      <input wire:model="when" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="when" name="when" type="text" placeholder="when">
    </div>

    <div class="w-full md:w-1/2 px-3">
      <label class="block text-gray-700 text-sm font-bold mb-2" for="order">
        order
      </label>
      <input wire:model="order" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="order" name="order" type="number" placeholder="order">
    </div>

  </div>

  <div class="mb-4">
    <label class="block text-gray-700 text-sm font-bold mb-2" for="remarks">
      remarks
    </label>
    <input wire:model="remarks" class="shadow appearance-none bremarks rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="remarks" name="remarks" type="text" placeholder="remarks">
  </div>

  <div class="mb-4">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">Create</button>
  </div>



</form>