
<div>



    <div>
        <button class="btn btn-primary" wire:click.prevent=addTeacher()>Add Teacher</button>
    </div>
    <table>
        <tr>
            <td>name</td>
            <td>roll</td>
            <td>Action</td>
        </tr>
        @foreach($data as $item)
        <tr>
            <td>{{ $item->name }}</td>
            <td>{{ $item->email }}</td>
            <td>
                <a href="" wire:click.prevent="editId({{ $item->id }})">Edit</a>
                <a href="#" wire:click.prevent="deleteId({{ $item->id }})">Delete</a>
            </td>
        </tr>
        @endforeach
    </table>




    {{-- CREATE MODAL --}}
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalid">
            Create Teacher
        </button>
        
        <!-- Modal -->
        <div class="modal fade" id="modalid" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create Teacher</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="submit">

                    <div class="modal-body">
                        <div class="py-2">
                            <input type="text" wire:model="name" class="form-control">
                            @error('name') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-2">
                            <input type="text" wire:model="email" class="form-control">
                            @error('email') <span class="error">{{ $message }}</span> @enderror
                        </div>
                        <div class="py-2">
                            
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit"  class="btn btn-primary">Save Contact</button>
                    </div>

                </form> 
            </div>
            </div>
        </div>
    {{-- CREATE MODAL END --}}










</div>

