<div id="product" class="product py-5">
    <div class="py-5 text-center">
        <h2 class="fw-bold">{{ __('frontend/products.title.title') }}</h2>
    </div>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <!-- First Product -->
            @foreach ($products as $product)
                <div class="col-12 col-sm-10 col-md-6 col-lg-4 mb-3">
                    <div class="card toggle-card shadow-lg">
                        <img src="{{ $product->getFirstMediaUrl('products') }}" class="card-img-top w-100"
                            style="height: 11rem;" alt="img">
                        <div class="card-body">
                            <div class="d-flex justify-content-between reverse-text">
                                <h4 class="pb-2"></h4>
                                <div class="d-flex justify-content-center align-items-start pt-2 pe-3">
                                    <img src="{{ asset('frontend/images/arrow-right-up-svgrepo-com 1.svg') }}"
                                        class="arrow-icon" alt="arrow">
                                </div>
                            </div>
                            {!! de_lang($product['content']) !!}
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function () {
    let cards = document.querySelectorAll(".card-body");

    cards.forEach(card => {
        let arrow = card.querySelector('img[alt="img"]');
        card.addEventListener("click", function () {
            document.querySelectorAll('.card-body img[alt="img"]').forEach(img => {
                img.style.transform = "rotate(0deg)";

            });

            if (!card.classList.contains("open")) {
                arrow.style.transform = "rotate(180deg)";
                card.classList.add("open");
            } else {
                arrow.style.transform = "rotate(0deg)";
                card.classList.remove("open");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".toggle-card").forEach(card => {
        card.addEventListener("click", function () {
            this.classList.toggle("expanded");
        });
    });
});
</script>
