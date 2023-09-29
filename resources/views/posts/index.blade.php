<x-layout>


  <section id="slider" class="slider-part">
    <div class="bnr-overlay">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-lg-10 align-self-end">
            <div class="bnr-con1">
              <h1 class="text-uppercase text-white font-weight-bold">
                Jhalokathi Internet Service provider 
              </h1>
            </div>
          </div>

          <div class="col-lg-8 align-self-baseline">
            <div class="bnr-con2">
              <div
                class="iii align-items-center justify-content-center text-center"
              ></div>
              <p class="text-white-75 font-weight-light">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi
                assumenda repellat hic quasi sed earum voluptatum vitae tempora
                minima corrupti. Officiis tenetur quia quod, quibusdam totam
                maxime saepe reprehenderit similique.
              </p>
              <br />
              <button id="bnrBt" class="wow fadeInUp">Find Out More</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




    @include ('posts._header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-posts-grid :posts="$posts" />
           

            {{ $posts->links() }}
        @else
            <p class="text-center">No posts yet. Please check back later.</p>
        @endif
    </main>
</x-layout>
