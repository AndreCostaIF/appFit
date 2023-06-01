

<a href="{{isset($link) ? $link : ''}}" class=' {{$active ? 'border border-dark bg-white' : ''}}
                                                p-2 border w-100 d-flex flex-column align-items-center justify-content-center
                                                ' >
    <i class="{{isset($icon) ? $icon : ''}}"></i>
    {{isset($titulo) ? $titulo : ''}}
</a>
