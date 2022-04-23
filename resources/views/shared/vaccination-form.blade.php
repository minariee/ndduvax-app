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
  <label for="inputBrand" class="col-sm-5 col-form-label">Vaccine Brand</label>
  <div class="col-sm-7">
    <select id="inputBrand" class="form-control @error('vaccine_brands') is-invalid @enderror" name="vaccine_brand" value="{{ $vaccine_brands->first()->brand_name }}" required>
      @foreach($vaccine_brands as $vaccine_brand)
      <option value="{{ $vaccine_brand->id }}">{{ $vaccine_brand->brand_name }} (Dose: {{ $vaccine_brand->dose }})</option>
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
  <label for="inputType" class="col-sm-5 col-form-label">Vaccine Type</label>
  <div class="col-sm-7">
    <input name="vaccine_type" type="input" class="form-control @error('vaccine_type') is-invalid @enderror" id="inputType" required />
    @error('vaccine_type')
      <span class="invalid-feedback" role="alert">
          <strong>{{ $message }}</strong>
      </span>
    @enderror
  </div>
</div>

<div class="form-group row mb-1">
  <label for="inputType" class="col-sm-5 col-form-label">Proof of Vaccination</label>
  <div class="col-sm-7">
    <input name="proof_of_vaccination" class="form-control @error('proof_of_vaccination') is-invalid @enderror" type="file" id="formFileMultiple" multiple />
    @error('proof_of_vaccination')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
  </div>
</div>