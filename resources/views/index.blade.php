<x-header />
<body>
    <x-nav />
    <x-slider />
    <x-offers />
    <x-product />
    <x-delivery >
            Hello
    </x-delivery>
    <x-offers title="الجميع المنتجات" />
    {{-- <x-products /> --}}
    <div class="products my-3">
        <div class="container mx-auto">
            <x-products :products="$products" />
        </div>
        <div class="mx-auto bg-white ">
            <div class="mx-5 px-5">
                {{ $products->links()}}
            </div>
        </div>
    </div>
    <x-footer />
</body>
</html>