<a href="{{ route('dvds.show', ['id' => $dvd->id]) }}" class="dvd-list-item">
  <div class="col-md-5">
    <div class="col-md-8">
      <h3>{{ $dvd->title }}</h3>
      <h5>Description <span class="pull-right">{{ $dvd->length != '' ? $dvd->length : '90 minutes' }}</span></h5>
      <p>{{ $dvd->description }}</p>
    </div>
    <div class="col-md-4">
      <img class="img-responsive"
        src="{{ $dvd->cover_image or 'https://placeholdit.imgix.net/~text?txtsize=14&txt=150%C3%97200&w=150&h=200' }}" 
        alt="{{ $dvd->title }}">
    </div>
  </div>
</a>