<footer>
  {{-- Footer top   --}}
  <div class="footer-top">
    <div class="container-lg">
      <section class="about-us">
        <h3>
          Bikes 2050
        </h3>
        <ul>
          <li><a href="">Identity</a></li>
          <li><a href="">History</a></li>
          <li><a href="">Plants</a></li>
          <li><a href="">Concepts</a></li>
          <li><a href="">Next future</a></li>
        </ul>
      </section>
      <section class="bike-list">
        <h3>Bikes</h3>
        <ul>
          @foreach ($bikes as $id => $bike)
          <li><a href="{{ $id }}">{{ $bike['model_name'] }}</a></li>
          @endforeach
        </ul>
      </section>
    </div>
  </div>
  {{-- Footer bottom --}}
  <div class="footer-bottom">
    <div class="container-lg">
      <div class="button-box">
        <button class="sign-up-btn">SIGN-UP NOW</button>
      </div>
      <section id="social">
        <h3>
          FOLLOW US
        </h3>
        <ul id="social-link" v-for="link in socialLinks">
          @php
            $socials = ['bi-facebook', 'bi-twitter', 'bi-youtube', 'bi-pinterest', 'bi-geo-alt-fill']
          @endphp
          @foreach ($socials as $item)
          <li>
            <a href="#"><i class="bi {{ $item }}"></i></a>
          </li>
          @endforeach
        </ul>
      </section>
    </div>
  </div>
</footer>
