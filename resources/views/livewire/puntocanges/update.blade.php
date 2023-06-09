<!-- Modal -->
<div wire:ignore.self class="modal fade" id="updateModal" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
       <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Puntocange</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span wire:click.prevent="cancel()" aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
					<input type="hidden" wire:model="selected_id">
            <div class="form-group">
                <label for="localpersona_id"></label>
                <input wire:model="localpersona_id" type="text" class="form-control" id="localpersona_id" placeholder="Localpersona Id">@error('localpersona_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="persona_id"></label>
                <input wire:model="persona_id" type="text" class="form-control" id="persona_id" placeholder="Persona Id">@error('persona_id') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tipopunto"></label>
                <input wire:model="tipopunto" type="text" class="form-control" id="tipopunto" placeholder="Tipopunto">@error('tipopunto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="monto"></label>
                <input wire:model="monto" type="text" class="form-control" id="monto" placeholder="Monto">@error('monto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="puntos"></label>
                <input wire:model="puntos" type="text" class="form-control" id="puntos" placeholder="Puntos">@error('puntos') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" wire:click.prevent="cancel()" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" wire:click.prevent="update()" class="btn btn-primary" data-dismiss="modal">Save</button>
            </div>
       </div>
    </div>
</div>