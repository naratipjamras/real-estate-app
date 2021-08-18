<div class="modal off" id="offer">
  <div class="modal-background"></div>
  <div class="modal-card">
      <header class="modal-card-head">
          <p class="modal-card-title has-text-centered">เสนอราคา</p>
          <button class="delete closeoffer" aria-label="close"></button>
      </header>
      <section class="modal-card-body">
      <p class="subtitle is-6 has-text-centered"><strong class="has-text-danger">
              หมายเหตุ : กรุณาเสนอราคาสูงกว่าราคา ณ ปัจจุบัน</strong></p>
      <form action="/house/{{$house->id}}/offer" method="post">
          @csrf
          <div class="field">
              <div class="control column is-8 is-offset-2">
                  <input class="input is-7" name="offeramount" type="text" placeholder="Enter Your Offer Amount">
                  <input name="propertyid" type="text" value="{{$house->property_id}}" hidden>
                  <input name="houseid" type="text" value="{{$house->id}}" hidden>
              </div>
          </div>
          <div class="field is-centered has-text-centered">
              <button type="submit" class="button is-info"><span class="savebutton">เสนอราคา</span></button>
          </div>
      </form>
      </section>
      <footer class="modal-card-foot is-centered has-text-centered">
        <p class="subtitle is-7 has-text-centered">
        </p>
      </footer>
  </div>
</div>

{{-- JS Script for popup --}}
<script>
  var modal = document.getElementById('offer');
  var btn = document.getElementById("myBtn");
  var span = document.getElementsByClassName("closeoffer")[0];
  btn.onclick = function() {
      document.querySelector('.off').style.display = 'block';
  }
  span.onclick = function() {
      document.querySelector('.off').style.display = 'none';
  }
  window.onclick = function(event) {
      if (event.target == modal) {
          document.querySelector('.off').style.display = 'none';
      }
  }
</script>
{{-- Tablet View Submit --}}
<script>
  var modal = document.getElementById('offer');
  var btn = document.getElementById("myBtnM");
  var span = document.getElementsByClassName("closeoffer")[0];
  btn.onclick = function() {
      document.querySelector('.off').style.display = 'block';
  }
  span.onclick = function() {
      document.querySelector('.off').style.display = 'none';
  }
  window.onclick = function(event) {
      if (event.target == modal) {
          document.querySelector('.off').style.display = 'none';
      }
  }
</script>
