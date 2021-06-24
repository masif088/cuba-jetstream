<x-app-layout>
    <x-slot name="header">
        <div class="col-6">
            <h3>Dashboard</h3>
        </div>
        <div class="col-6">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                <li class="breadcrumb-item">Dashboard</li>
                <li class="breadcrumb-item active">Default</li>
            </ol>
        </div>
    </x-slot>

    <div>
        <a href="{{ route('learning-path.create') }}" class="btn btn-primary">Add</a>
        <br><br>
        <div class="row">
            <div class="col-xl-12 row">
                @foreach($learningpaths as $lp)
                    <div class="col-xl-4 xl-25 col-sm-6 box-col-6">
                        <div class="card">
                            <div class="blog-box blog-grid text-center product-box">
                                <div class="product-img">
                                    <img class="img-fluid top-radius-blog" src="{{asset(($lp->thumbnail_path==null)?'images/faq/3.jpg':$lp->thumbnail_path)}}" alt="">
                                    <div class="product-hover">
                                        <ul>
                                            <li><i class="icon-link"></i></li>
                                            <li><i class="icon-import"></i></li>
                                            <li><i class="icon-pencil"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="blog-details-main">
                                    <ul class="blog-social">
                                        <li>{{$lp->updated_at->format('M d Y')}}</li>
                                        <li>By :{{$lp->studyProgram->name}}</li>
                                        <li>{{$lp->userOnLearningPaths->count()."/".$lp->quota}} Pelajar</li>
                                    </ul>
                                    <hr>
                                    <h6 class="blog-bottom-details">
                                        {{$lp->title}}
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
