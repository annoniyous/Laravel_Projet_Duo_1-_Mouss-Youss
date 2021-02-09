 <!-- ======= Why Us Section ======= -->
 <section id="why-us" class="why-us">
     <div class="container ">

         <div class="row mt-5">


             @foreach ($articleDynamic as $item)

                 <div class="col-lg-4">
                     <h3>{{ $item->titre }}</h3>
                     <div class="box">
                         <span>{{ $item->numero }}</span>
                         <h4>{{ $item->subtitle }}</h4>
                         <p>{{ $item->texte }}</p>
                     </div>
                 </div>

              @if ($loop->iteration % 3 === 0)

                  </div>
                  <div class="row">

             @endif

             @endforeach




         </div>

     </div>
 </section><!-- End Why Us Section -->
