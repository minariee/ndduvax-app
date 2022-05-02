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
