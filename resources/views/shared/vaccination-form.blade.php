<div class="form-group row mb-1">
  <label for="inputDate" class="col-sm-5 col-form-label">Dosage Date</label>
  <div class="col-sm-7">
    <input name="latest_dosage_date" type="date" class="form-control @error('latest_dosage_date') is-invalid @enderror" id="inputDate" required />
    @error('latest_dosage_date')
    <span class="invalid-feedback" role="alert">
      <strong>{{ $message }}</strong>
    </span>
    @enderror
  </div>
</div>

<div class="form-group row mb-1">
  <label for="inputType" class="col-sm-5 col-form-label">Vaccine Type</label>
  <div class="col-sm-7">
    <select id="inputType" class="form-control @error('vaccine_types') is-invalid @enderror" name="vaccine_type" value="{{ $vaccine_types->first()->type_name }}" required>
      @foreach($vaccine_types as $vaccine_type)
      <option>{{ $vaccine_type->type_name }}</option>
      @endforeach
    </select>
    @error('vaccine_types')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>


<div class="form-group row mb-1">
  <label for="inputBrand" class="col-sm-5 col-form-label">Vaccine Brand</label>
  <div class="col-sm-7">
    <select id="inputBrand" class="form-control @error('vaccine_brands') is-invalid @enderror" name="vaccine_brand" value="{{ $vaccine_brands->first()->brand_name }}" required>
      @foreach($vaccine_brands as $vaccine_brand)
      <option value="{{ $vaccine_brand->id }}">{{ $vaccine_brand->brand_name }}</option>
      @endforeach
    </select>
    @error('vaccine_brands')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row mb-1">
  <label for="inputType" class="col-sm-5 col-form-label">Dosage</label>
  <div class="col-sm-7">
    <select name="dosage" class="form-control">
      <option selected disabled>--Select Dosage--</option>
      <option value="First Dose">First Dose</option>
      <option value="Second Dose">Second Dose</option>
      <option value="Booster">Booster</option>
</div>
</div>

<div class="form-group row mb-1">
  <label for="inputType" style="top:40px" class="col-sm-5 col-form-label">Proof of Vaccination</label>
  <div class="col-sm-7">
    <input name="proof_of_vaccination" class="form-control @error('proof_of_vaccination') is-invalid @enderror" type="file" id="formFileMultiple" multiple />
    @error('proof_of_vaccination')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>

<script>
  $(function() {
    var vaccine_brands = {!! json_encode($vaccine_brands)!!}
    var onChange = () => {
      var vaxType = $("#vaccineType").val()
      $("#vaccineBrand").empty()
      var options = vaccine_brands.filter((_brand) => _brand.type_name == vaxType)
      options.forEach((_option) => {
        var optionEl = $(`<option value='${_option.id}'>${_option.brand_name}</option>`)
        $("#vaccineBrand").append(optionEl)
      })
    }

    onChange()
    $("#vaccineType").on('change', onChange)

  })

</script>