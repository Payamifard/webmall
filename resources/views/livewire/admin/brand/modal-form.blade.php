<!--add brand Modal -->
<div wire:ignore.self class="modal fade" id="addBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">افزودن برند جدید</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <form wire:submit="storeBrand">
            <div class="modal-body">
                <div class="mb-3">
                    <label>نام برند </label>
                    <input type="text" wire:model="name" class="form-control">
                    @error('name') <small class="text-danger">{{ $message }} </small> @enderror
                </div>

                <div class="mb-3">
                    <label>اسلاگ</label>
                    <input type="text" wire:model="slug" class="form-control">
                    @error('slug') <small class="text-danger">{{ $message }} </small> @enderror

                </div>

                <div class="mb-3">
                    <label>عدم نمایش </label> <br/>
                    <input type="checkbox" wire:model="status" />
                </div>

            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
            <button type="submit" class="btn btn-primary text-white">ذخیره</button>
            </div>
        </form>
    </div>
    </div>
</div>


<!--update brand Modal -->
<div wire:ignore.self class="modal fade" id="updateBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ویرایش برند</h1>
        <button wire:click="resetInput" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div wire:loading class="p-2">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>Loading...
        </div>

        <div livewire:initing.remove>
            <form wire:submit="updateBrand">
                <div class="modal-body">
                    <div class="mb-3">
                        <label>نام برند </label>
                        <input type="text" wire:model="name" class="form-control">
                        @error('name') <small class="text-danger">{{ $message }} </small> @enderror
                    </div>

                    <div class="mb-3">
                        <label>اسلاگ</label>
                        <input type="text" wire:model="slug" class="form-control">
                        @error('slug') <small class="text-danger">{{ $message }} </small> @enderror

                    </div>

                    <div class="mb-3">
                        <label>عدم نمایش </label> <br/>
                        <input type="checkbox" wire:model="status" />
                    </div>

                </div>
                <div class="modal-footer">
                <button wire:click="resetInput" type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-primary text-white">ذخیره</button>
                </div>
            </form>
        </div>
    </div>
    </div>
</div>


<!--delete brand Modal -->
<div wire:ignore.self class="modal fade" id="deleteBrandModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">حذف برند</h1>
        <button wire:click="resetInput" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        {{-- <div wire:loading class="p-2">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Loading...</span>
              </div>Loading...
        </div> --}}

        {{-- <div livewire:initing.remove> --}}
            <form wire:submit="destroyBrand">
                <div class="modal-body">


                    <h4>آیا می خواهید این برند را حذف کنید؟</h4>


                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">انصراف</button>
                <button type="submit" class="btn btn-primary text-white">بله</button>
                </div>
            </form>
        {{-- </div> --}}
    </div>
    </div>
</div>
