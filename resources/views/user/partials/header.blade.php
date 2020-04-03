<div class="header pb-8 pt-lg-6 d-flex align-items-center">

    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-md-12 {{ $class ?? '' }}">
                <h1 class="display-2 text-primary">{{ $title }}</h1>
                @if (isset($description) && $description)
                    <p class="text-primary mt-0 mb-5">{{ $description }}</p>
                @endif
            </div>
        </div>
    </div>
</div>
