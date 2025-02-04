@props([
    'title' => 'المنتجات أكثر مبيعا'
])
<div class="announcement border-2 border-b-red-300"">
    <div class="container mx-auto">
        <div class="flex items-center justify-between" >
            <div class="toggle flex">
                <i class="fas fa-chevron-left"></i>
                <i class="fas fa-chevron-right"></i>
            </div>
            <h5 class="text-2xl  py-2 px-1">{{ $title}} </h5>
        </div>
    </div>
</div>