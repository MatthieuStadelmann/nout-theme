<footer class="content-info bg-black text-white p-10 text-2xl">
  <div class="grid grid-cols-2">
    <div class="col-span-2 mb-10">
      <h2>{{$siteName}}</h2>
      <p>{{$theme_general_settings->address}}</p>
    </div>
    <div class="col-span-2 md:col-span-1">
      <div>
        <a href="mailto:{{$theme_general_settings->email}}">{{$theme_general_settings->email}}</a>
      </div>
      <div>
        <a href="tel:{{$theme_general_settings->phone}}">{{$theme_general_settings->phone}}</a>
      </div>
    </div>
    <div class="md:ml-auto">
      <a href="{{$theme_general_settings->instagram}}">Instagram</a>, <a href="{{$theme_general_settings->facebook}}">Facebook</a>
    </div>
  </div>
</footer>
