<x-header />
<body>
<x-nav />
    <div class="container mx-auto">
        <div class="single-product flex flex-col lg:flex-row py-3">
            <div class="w-1/2  w-full">
                <div class="singles  mx-3 px-3 py-2">
                    <h2 class="text-3xl text-end ">  {{ $product->name }}</h2>
                    <div class="product-details py-3">
                        <div class="price bg-white flex items-center justify-end gap-4 py-2 my-2">
                            <h2 class=" text-2xl text-end">  {{$product->price}} $</h2>
                            <h2 class=" text-2xl text-end"> : السعر </h2>
                        </div>
                        <div class="status bg-white flex items-center justify-end gap-4 py-3">
                            <div class="status-rate text-end text-xl">
                                <i class="fas fa-star col"></i>
                                <i class="fas fa-star col"></i>
                                <i class="fas fa-star col"></i>
                                <i class="fas fa-star col"></i>
                                <i class="fas fa-star"></i>
                                :
                            </div>
                            <h2 class="text-xl text-end"> تقييم  </h2>
                        </div>
                        <div class="weight bg-white flex items-center justify-end gap-4 py-2 my-3">
                            <h2 class="text-2xl">0.75 Kg :</h2>
                            <h2 class="text-2xl"> الوزن  </h2>
                        </div>
                    <div class="types bg-white  flex items-center justify-end gap-4 py-3 my-4" style="padding-right:3px;">
                        <h4 class="text-2xl text-end">  شاحن ، قطاء ،سماعات لاسلكية</h4>
                        <h2 class="text-2xl text-end">:  الأكسسوارات </h2>
                    </div>
                        <div class="card-footer mb-3">
                            <button class="btn text-xl bg-red-500 px-6 py-2 text-white w-full">   <i class="fas fa-shopping-cart text-white"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-1/2 w-full py-3">
                <div class="single-img flex items-center justify-center">
                    <img src="{{ asset('storage/'. $product->image) }}" alt="" class="">
                </div>
            </div>
        </div>
        <hr>
     
    </div>
    <div class="announcement border-2 border-b-red-300"">
        <div class="container mx-auto">
            <div class="flex items-center justify-end" >
                <h5 class="text-2xl  py-2 px-1 b">  تفاصيل عن المنتج  </h5>
            </div>
        </div>
    </div>
    <div class="container mx-auto">
        <div class="single-body py-3 bg-white mx-3 my-5">
            <p class="text-end py-8 px-8">
                قد الشمل للسيطرة البولندي عدد, كل حين القوى ويتّفق, في تصفح ماذا قبل. و على هنا؟ أراض الذود, حول ماشاء ليبين وبعدما عن, بالجانب للأراضي ثم عرض. بال هناك أراضي للأراضي قد. وعُرفت وسمّيت الثانية مما بل, الشمل لإنعدام أي جُل. الى وشعار والحزب للأراضي أن, ذلك جنوب واحدة العالمية ثم. وسفن الكونجرس الا أي, جنوب الهجوم ذلك ان. تسمّى أصقاع من جعل.

لم الخطّة الأهداف تلك. الصفحات المنتصر الرئيسية بعد أم, سقوط وعُرفت كل كان. غير فهرست موالية ليرتفع ان. ان جعل يتمكن واستمر الخطّة. هذه كنقطة الخارجية بل, أم الجنوب اتفاقية تعد. بالعمل وتنامت مليارات وفي و.

قبل وسفن قبضتهم في, وقوعها، للأراضي جعل من, و منتصف الأحمر كما. عل هذا مرجع أطراف المتّبعة, قادة يتسنّى الأثناء، ٣٠ بعض. مع يتمكن تكتيكاً دار, في به، أمدها اليابان،. ان أحدث أوروبا كلا, بعد ٣٠ بداية شواطيء إستعمل. أما أن وبدون وإيطالي, ٣٠ جيوب الثقيل عدد.
            </p>
        </div>
    </div>
    <div class="container mx-auto">
        <x-products :products="$products" />
    </div>
    <x-footer />
</body>
</html>