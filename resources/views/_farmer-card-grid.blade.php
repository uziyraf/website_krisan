<div class="farmer-card-grid" id="farmer-card-container">
    @foreach ($farmers as $farmer)
        <div class="card-profil">
            <img class="profil-img" src="{{ asset('storage/' . $farmer->image) }}" alt="{{ $farmer->name }}" />
            <div class="heading-2-a-summer-to-grow-explore">{{ $farmer->name }}</div>
            <div class="heading-2-a-summer-to-grow-explore">{{ $farmer->specialization }}</div>
            <div class="profil-desc">{{ $farmer->description }}</div>

            {{-- Mengubah div onclick menjadi link <a> yang standar --}}
            <a href="{{ route('farmer.detail', $farmer->id) }}" class="button-lihat-detail2">
                <div class="heading-2-a-summer-to-grow-explore3">Lihat Detail</div>
            </a>
        </div>
    @endforeach
    </div>