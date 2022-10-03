<a href="{{get_the_permalink($artist)}}">
  <div class="relative h-80 md:h-96 overflow-hidden rounded-lg">
    <img class="absolute h-full w-full object-cover transition-all duration-200 ease-in-out transform hover:scale-105" src="{{get_the_post_thumbnail_url($artist)}}" alt="{{get_the_title($artist)}}"/>
    <h3 class="text-white absolute bottom-0 p-5 uppercase">{{get_the_title($artist)}}</h3>
  </div>
</a>
