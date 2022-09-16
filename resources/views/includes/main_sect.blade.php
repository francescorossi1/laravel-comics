<main>
  <div class="jumbotron">
    <div class="main-content py-3">
      <div class="container">
        <a href="#" class="blue-button font-20 moved">CURRENT SERIES</a>
        <div class="d-flex row row-cols-xl-6 row-cols-lg-4 row-cols-md-3 row-cols-sm-2 flex-wrap justify-content-center py-3">
          @foreach($comics as $comic)
          <figure>
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
            <figcaption>{{ $comic['series'] }}</figcaption>
          </figure>
          @endforeach
        </div>
        <div class="d-flex justify-content-center">
          <a href="#" class="blue-button large">LOAD MORE</a>
        </div>
      </div>
    </div>
  </div>
</main>