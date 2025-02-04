<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
</div>

@props([
    'title' => 'إذا كنت تعاني من خلل فن       لا تترد في تواصل معنا نحن دائما في خدمتك',
    'icon' => null,
    'head' =>'text-3xl',
])

<div class="box my-3">
    <div class="plane">
        @if($icon)
        <i class="fas fa-{{$icon}} my-3"></i>
        @endif
    </div>
     <div class="body py-3">
        <p >
            {{ $title}}
        </p>
     </div>
</div>