@props([
    'title' => '     خدمات توصيل ',
])
<div class="container mx-auto">
    <div class="announcement border-2 border-b-red-300"">
        <div class="container mx-auto">
            <div class="flex items-center justify-end" >
                <h5 class="text-2xl  py-2 px-1 b"> {{ $title }} </h5>
            </div>
        </div>
    </div>
    <div class=" services py-4">
        {{-- <div class="help">
            <x-service-delivery  icon="info" />
            <x-service-delivery title=" خدمة توصيل علي مستوي الدولي و  العالمي و القاري"  icon="plane" />
            <x-service-delivery title="24/24 لا تترد في تواصل معنا نحن دائما في خدمتك"  icon="people-carry" />
            <x-service-delivery tile="خدمة توصيل عن طريق  سيارة الي باب منزلك." icon="truck" />
        </div> --}}
        <div class=" help grid grid-cols-1 gap-4">
            <x-service-delivery head="text-xl" icon="info" />
            <x-service-delivery title=" خدمة توصيل علي مستوي الدولي و  العالمي و القاري تصلك الي بيتك"  icon="plane" />
            <x-service-delivery title=" عزيزي زبون 24/24 لا تترد في تواصل معنا نحن دائما في خدمتك"  icon="people-carry" />
            <x-service-delivery tile="خدمة توصيل عن طريق  سيارة الي باب منزلك." icon="truck" />
          </div>
    </div>


</div>