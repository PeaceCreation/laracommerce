<div class="products my-3">
    <div class="container mx-auto">
        <div class="product  py-4">

            {{-- <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/product-1.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/glasse-1.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/key-2.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/head-1.jpg')}}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/mac-1.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/head-2.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/tv-1.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div>
            <div class="card  bg-white">
                <div class="card-img">
                    <img src="{{ asset('/images/key-1.jpg') }}" alt="" class="">
                </div>
                <h3 class="card-title text-center py-1 text-3xl"> Product one</h3>
                <div class="card-body text-center py-2">
                    <p class="py-2">
                        This is Product one rom adfasfasfa
                    </p>
                    <span class="text-2xl my-2">
                        50 $
                    </span>
                </div>
                <div class="card-footer ">
                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full"> أضف إلي سلة</button>
                </div>
            </div> --}}
    
        </div>
    </div>
</div>


<div class="product  py-4">
    @foreach ($products as $product)
                    <div class="card  bg-white">
                            <a href="/{{$product->name}}/{{$product->id}}">
                                <div class="card-img">
                                    <img src="{{ asset('storage/'. $product->image) }}" alt="" class="">
                                </div>
                                <h3 class="card-title text-center py-1 text-3xl">{{$product->name}}</h3>
                                <div class="card-body text-center py-2">
                                    <p class="py-2">
                                        {{ $product->description}}
                                    </p>
                                    <span class="text-2xl my-2">
                                        {{ $product->price}} $
                                    </span>
                                </div>
                                <div class="card-footer ">
                                    <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full">  Add to Card <i class="fas fa-shopping-cart text-white"></i></button>
                                </div>
                            </a>
                    </div>
    @endforeach
</div>