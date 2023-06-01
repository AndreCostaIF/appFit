<div class="d-md-none">
    <div class="menuMobile border d-flex justify-content-between bg-light ">

        <x-botao-menu-mobile titulo='Home' icon='bi bi-house'
            link="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')"
        />

        <x-botao-menu-mobile titulo='Refeições' icon='bi bi-egg'
            link="{{ route('dashboard') }}" :active="request()->routeIs('login')"
        />

        <x-botao-menu-mobile titulo='Água' icon='bi bi-droplet-half'
            link="{{ route('agua') }}" :active="request()->routeIs('agua')"
        />

        <x-botao-menu-mobile titulo='Perfil' icon='bi bi-person-bounding-box'
            link="{{ route('login') }}" :active="request()->routeIs('login')"
        />

    </div>
</div>
