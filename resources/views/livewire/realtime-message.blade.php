<div>
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col">
                <h2 class="mb-4"> Gerçek Zamanlı Mesajlaşma</h2>
                <form class="form" wire:submit.prevent="triggerEvent">
                    <input type="text" class="form-control" wire:model="message" placeholder="Mesajınızı yazın...">
                    <input type="submit" class="btn btn-primary mt-3" value="Mesaj Gönder"/>
                </form>
            </div>
        </div>
    </div>
</div>
