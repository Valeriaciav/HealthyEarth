<x-layout>
    <x-header>
        {{$category->name}}
    </x-header>
    <div class="container my-5">
        <div class="row justify-content-around">
            @foreach($articles as $article)
            <div class="col-12 col-md-5 mt-4">
                <div class="card">
                    <img src="{{Storage::url($article->image)}}" class="card-img-top" alt="">
                    <div class="card-body">
                      <h5 class="card-title">{{$article->title}}</h5>
                      <p class="card-text">{{$article->subtitle}}</p>
                      <p class="small text-muted fst-italic text-capitalize">{{$article->category->name}}</p>
                    </div>
                    <div class="card-footer text-muted d-flex justify-content-between align-items-center">
                        Redatto il {{$article->created_at->format('d/m/Y')}} da <a href="{{route('article.byUser', ['user' => $article->user->id])}}" class="small text-muted fst-italic text-capitalize m-2">{{$article->user->name}}</a>
                        <a href="{{route('article.show', compact('article'))}}" class="btn btn-success text-white">Leggi</a>
                    </div>
                </div>            
            </div>
            @endforeach
        </div>
    </div>          
</x-layout>