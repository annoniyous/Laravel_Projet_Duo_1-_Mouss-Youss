<main id="main">

    <!-- ======= About Section ======= -->
    <section class="about">
        <div class="container">

            <div class="row content mb-5 pb-5">
                <div class="col-lg-6">
                    <h2>{{ $homeStatic[1]->titre }}</h2>
                    <h3>{{ $homeStatic[1]->subtitle }}</h3>
                    <img width="400px" src={{ asset('img/' . $homeStatic[1]->img) }} alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                        {{ $homeStatic[1]->p1 }}
                    </p>

                    <ul>

                        @foreach ($homeListe2 as $item)

                            <li><i class="ri-check-double-line"></i> {{ $item->texte }}</li>

                        @endforeach


                    </ul>
                    <p class="font-italic">
                        {{ $homeStatic[1]->p2 }}
                    </p>
                </div>
            </div>

        </div>
    </section><!-- End About Section -->
