


  <form>  
  <label class="submit__control">
    <h3>Are you human?</h3>
    <div class="submit__generated">

    </div>
    <i class="fa fa-refresh"></i>
    <span class="submit__error hide">Incorrect value</span>
    <span class="submit__error--empty hide">Required field cannot be left blank</span>
  </label>

  {{-- <input class="submit overlay"
         type="submit"
         value="Submit" />
  <div class="submit__overlay"></div> --}}
</form>
  


@push('scripts')
    <!-- Component-specific JS -->
    <script src="{{ asset('captcha/captcha.js') }}"></script>
@endpush

